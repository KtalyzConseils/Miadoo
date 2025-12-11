@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="card">

        {{-- TABS DES MOYENS DE PAIEMENT --}}
        <div class="payment-top-tab mt-3 mb-3">
                <ul class="nav nav-tabs card-header-tabs align-items-end">
                    <li class="nav-item">
                        <a class="nav-link stripe_active_label" href="{!! url('settings/payment/stripe') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_stripe')}}<span
                                class="badge ml-2"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cod_active_label" href="{!! url('settings/payment/cod') !!}"><i
                            class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_cod_short')}}<span
                            class="badge ml-2"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link razorpay_active_label"
                           href="{!! url('settings/payment/razorpay') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_razorpay')}}<span
                                class="badge ml-2"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link paypal_active_label" href="{!! url('settings/payment/paypal') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_paypal')}}<span
                                class="badge ml-2"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link paytm_active_label" href="{!! url('settings/payment/paytm') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_paytm')}}<span
                                class="badge ml-2"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wallet_active_label" href="{!! url('settings/payment/wallet') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_wallet')}}<span
                                class="badge ml-2"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link payfast_active_label" href="{!! url('settings/payment/payfast') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.payfast')}}<span
                                class="badge ml-2"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link paystack_active_label" href="{!! url('settings/payment/paystack') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_paystack_lable')}}<span
                                class="badge ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link flutterWave_active_label"
                           href="{!! url('settings/payment/flutterwave') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.flutterWave')}}<span
                                class="badge ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mercadopago_active_label"
                           href="{!! url('settings/payment/mercadopago') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.mercadopago')}}<span
                                class="badge ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link xendit_active_label"
                           href="{!! url('settings/payment/xendit') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_xendit')}}<span
                                class="badge ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link orangepay_active_label"
                           href="{!! url('settings/payment/orangepay') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_orangepay')}}<span
                                class="badge ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fedapay_active_label"
                           href="{!! url('settings/payment/fedapay') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_fedapay')}}<span
                                class="badge ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link midtrans_active_label"
                           href="{!! url('settings/payment/midtrans') !!}"><i
                                class="fa fa-envelope-o mr-2"></i>{{trans('lang.app_setting_midtrans')}}<span
                                class="badge ml-2"></span></a>
                    </li>
                </ul>
            </div>
        {{-- FORMULAIRE FEDA PAY --}}
        <div class="card-body">
            <div class="row restaurant_payout_create">
                <div class="restaurant_payout_create-inner">
                    <fieldset>
                        <legend>{{trans('lang.app_setting_fedapay')}}</legend>

                        {{-- Enable --}}
                        <div class="form-check width-100">
                            <input type="checkbox" id="enable_fedapay" class="enable_fedapay">
                            <label for="enable_fedapay" class="col-3 control-label">
                                {{trans('lang.app_setting_enable_fedapay')}}
                            </label>
                        </div>

                        {{-- Sandbox --}}
                        <div class="form-check width-100">
                            <input type="checkbox" id="sand_box_mode" class="sand_box_mode">
                            <label for="sand_box_mode" class="col-3 control-label">
                                {{trans('lang.app_setting_enable_sandbox_mode')}}
                            </label>
                        </div>

                        {{-- Public Key --}}
                        <div class="form-group row width-100">
                            <label class="col-3 control-label">{{trans('lang.app_setting_fedapay_public_key')}}</label>
                            <div class="col-7">
                                <input type="text" class="form-control fedapay_publicKey">
                            </div>
                        </div>

                        {{-- Secret Key --}}
                        <div class="form-group row width-100">
                            <label class="col-3 control-label">{{trans('lang.app_setting_fedapay_secret_key')}}</label>
                            <div class="col-7">
                                <input type="password" class="form-control fedapay_secretKey">
                            </div>
                        </div>

                        {{-- Callback URL --}}
                        <div class="form-group row width-100">
                            <label class="col-3 control-label">{{trans('lang.app_setting_fedapay_callback_url')}}</label>
                            <div class="col-7">
                                <input type="text" class="form-control fedapay_callbackUrl"
                                       readonly value="{{ url('/api/payment/fedapay/webhook') }}">
                            </div>
                        </div>

                        {{-- Cancel URL --}}
                        <div class="form-group row width-100">
                            <label class="col-3 control-label">{{trans('lang.app_setting_fedapay_cancel_url')}}</label>
                            <div class="col-7">
                                <input type="text" class="form-control fedapay_cancelUrl" placeholder="{{ url('/payment/cancel') }}">
                            </div>
                        </div>

                        {{-- Return URL --}}
                        <div class="form-group row width-100">
                            <label class="col-3 control-label">{{trans('lang.app_setting_fedapay_return_url')}}</label>
                            <div class="col-7">
                                <input type="text" class="form-control fedapay_returnUrl" placeholder="{{ url('/payment/success') }}">
                            </div>
                        </div>

                        {{-- Logo --}}
                        <div class="form-group row width-100">
                            <label class="col-3 control-label">{{trans('lang.image')}}</label>
                            <div class="col-7">
                                <input type="file" class="form-control fedapay-image" onchange="handleFileSelect(event)">
                                <div class="placeholder_img_thumb payment_image"></div>
                                <div id="uploding_image"></div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

        {{-- Save --}}
        <div class="form-group col-12 text-center btm-btn">
            <button type="button" class="btn btn-primary edit-setting-btn">
                <i class="fa fa-save"></i>{{ trans('lang.save') }}
            </button>
            <a href="{{ url('/dashboard') }}" class="btn btn-default">
                <i class="fa fa-undo"></i>{{trans('lang.cancel')}}
            </a>
        </div>

    </div>
</div>
@endsection


@section('scripts')
<script>

    var database = firebase.firestore();
    var paymentRef = database.collection('settings').doc('fedapay_settings');

    var photo = "";
    var fileName = "";
    var ImageFile = "";
    var storageRef = firebase.storage().ref('images');

    $(document).ready(function () {

        // Définir les onglets actifs dans le menu
        $('.setting_menu').addClass('active').attr('aria-expanded', true);
        $('.setting_payment_menu').addClass('active');
        $('.setting_sub_menu').addClass('in').attr('aria-expanded', true);

        jQuery("#overlay").show();

        // Charger les données FedaPay
        paymentRef.get().then(function (snapshot) {
            var data = snapshot.data();

            if (!data) return;

            if (data.enable) {
                $("#enable_fedapay").prop("checked", true);
                $(".fedapay_active_label span").addClass("badge-success").text("Active");
            }

            if (data.isSandbox) {
                $("#sand_box_mode").prop("checked", true);
            }

            $(".fedapay_publicKey").val(data.publicKey);
            $(".fedapay_secretKey").val(data.secretKey);
            $(".fedapay_cancelUrl").val(data.cancelUrl);
            $(".fedapay_returnUrl").val(data.returnUrl);

            // Image affichée
            if (data.image) {
                $(".payment_image").html(
                    `<span class="image-item">
                        <span class="remove-btn"><i class="fa fa-remove"></i></span>
                        <img class="rounded" style="width:50px" src="${data.image}" alt="image">
                    </span>`
                );
                photo = data.image;
                ImageFile = data.image;
            }

            jQuery("#overlay").hide();
        });

    });

    // Enregistrement
    $(".edit-setting-btn").click(function () {

        var isEnabled = $("#enable_fedapay").is(":checked");
        var isSandbox = $("#sand_box_mode").is(":checked");
        var publicKey = $(".fedapay_publicKey").val();
        var secretKey = $(".fedapay_secretKey").val();
        var cancelUrl = $(".fedapay_cancelUrl").val();
        var returnUrl = $(".fedapay_returnUrl").val();
        var callbackUrl = $(".fedapay_callbackUrl").val();

        storeImageData().then((IMG) => {

            paymentRef.update({
                "enable": isEnabled,
                "isSandbox": isSandbox,
                "publicKey": publicKey,
                "secretKey": secretKey,
                "callbackUrl": callbackUrl,
                "cancelUrl": cancelUrl,
                "returnUrl": returnUrl,
                "image": IMG
            }).then(() => {
                window.location.href = '{{ url("settings/payment/fedapay") }}';
            });

        });
    });

    async function storeImageData() {
        var newPhoto = "";
        try {
            if (ImageFile && photo !== ImageFile) {
                var OldRef = await firebase.storage().refFromURL(ImageFile);
                await OldRef.delete().catch(err => console.log(err));
            }

            if (photo && photo !== ImageFile) {
                var clean = photo.replace(/^data:image\/[a-z]+;base64,/, "");
                var upload = await storageRef.child(fileName).putString(clean, "base64", { contentType: "image/jpg" });
                newPhoto = await upload.ref.getDownloadURL();
                photo = newPhoto;
            } else {
                newPhoto = photo;
            }

        } catch (e) { console.log(e); }

        return newPhoto;
    }

    function handleFileSelect(evt) {
        var f = evt.target.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {

            var base64 = e.target.result;
            var ext = f.name.split('.').pop();
            var timestamp = Date.now();
            fileName = f.name.replace(/C:\\fakepath\\/i, '').split('.')[0] + "_" + timestamp + "." + ext;

            photo = base64;

            $(".payment_image").html(`
                <span class="image-item">
                    <span class="remove-btn"><i class="fa fa-remove"></i></span>
                    <img class="rounded" style="width:50px" src="${base64}" alt="image">
                </span>
            `);
        };

        reader.readAsDataURL(f);
    }

</script>
@endsection
