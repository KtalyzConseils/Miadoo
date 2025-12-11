<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Illuminate\Support\Facades\Validator;

class FedapayController extends Controller
{
    protected $firestore;

    public function __construct()
    {
        // Initialisation Firebase
        $firebase = (new Factory)
            ->withServiceAccount(config('firebase.credentials.file'))
            ->withDatabaseUri(config('firebase.database.url'));
        
        $this->firestore = $firebase->createFirestore()->database();
    }

    public function saveFedapay(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'publicKey' => 'required|string',
            'secretKey' => 'required|string',
            'callbackUrl' => 'nullable|string',
            'cancelUrl' => 'nullable|string',
            'returnUrl' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Récupération des valeurs
        $enabled     = $request->has('enable') ? true : false;
        $sandbox     = $request->has('sandbox') ? true : false;
        $publicKey   = $request->publicKey;
        $secretKey   = $request->secretKey;
        $callbackUrl = $request->callbackUrl;
        $cancelUrl   = $request->cancelUrl;
        $returnUrl   = $request->returnUrl;
        $image       = $request->image ?? null;


        /*
        |--------------------------------------------------------------------------
        | 1️⃣ SAUVEGARDE DANS LARAVEL (EX: table app_settings)
        |--------------------------------------------------------------------------
        */

        setting([
            'fedapay_enabled'     => $enabled,
            'fedapay_sandbox'     => $sandbox,
            'fedapay_public_key'  => $publicKey,
            'fedapay_secret_key'  => $secretKey,
            'fedapay_callback_url'=> $callbackUrl,
            'fedapay_cancel_url'  => $cancelUrl,
            'fedapay_return_url'  => $returnUrl,
            'fedapay_image'       => $image,
        ])->save();


        /*
        |--------------------------------------------------------------------------
        | 2️⃣ SAUVEGARDE DANS FIREBASE
        |--------------------------------------------------------------------------
        */

        $fireData = [
            'enable'     => $enabled,
            'isSandbox'  => $sandbox,
            'publicKey'  => $publicKey,
            'secretKey'  => $secretKey,
            'callbackUrl'=> $callbackUrl,
            'cancelUrl'  => $cancelUrl,
            'returnUrl'  => $returnUrl,
            'image'      => $image,
        ];

        $this->firestore
            ->collection('settings')
            ->document('fedapay_settings')
            ->set($fireData, ['merge' => true]);


        /*
        |--------------------------------------------------------------------------
        | 3️⃣ RETOUR UTILISATEUR
        |--------------------------------------------------------------------------
        */
        
        return redirect()
            ->back()
            ->with('success', 'Paramètres FedaPay enregistrés avec succès.');
    }
}
