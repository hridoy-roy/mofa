@extends('layouts.frontend.app')
@push('styles')
    <link href="{{ asset('assets/frontend/css/ResponsiveForms.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/frontend/css/inline.css') }}" rel="stylesheet">
    <style>
        body{
            background: #fff !important;
        }
        .form-group{
            margin-left: 0px !important;
        }
        .mopa_membership_banner > img{
            border-radius: 50%;
        }
        .mopa_membership_banner > strong{
            font-size: 20px !important;
            padding-top: 20px; 
            line-height: 14px;
        }
        #divMain {
        display: grid;
        grid-template-columns: .5fr 1fr !important;
        }
        #security{
            margin-top: 20px !important;
        }
        .biography{
            padding-top: 20px;
        }
        .biography h2{
            color: #000;
            font-size: 18px;
            text-transform: uppercase;
        }
        .biography p {
            padding: 0;
            font-size: 14px;
            text-align: center;
            line-height: 18px;
        }
        [data-label="First Name"] {
        width: 48%;
        /* margin-right: 2.5%; */
        display: inline-block;
        }
        [data-label="Last Name"] {
        width: 48.5%;
        margin-right: 2.5%;
        display: inline-block;
        }
        [data-label="Email"]{
            width: 97%;
        }
        [data-label="Mobile"]{
            width: 97%;
        }
        
        [type="password"]{
            width: 97% !important;
        }
        
        input {
            color: #000 !important;
            border-radius: 0 !important;
            border: 1px solid #000 !important;
            width: 100% !important;
            height: 50px !important;
            font-size: 16px !important;
            text-align: left !important;
            padding: 10px !important;
        }
        .btn-submit::before {
            content: "Submit";
            font-size: 14px;
            letter-spacing: 2px;
        }
        @media only screen and (max-width: 490px) {
            [data-label="First Name"] {
            width: 100%;
            /* margin-right: 2.5%; */
            display: inline-block;
            }
            [data-label="Last Name"] {
            width: 100%;
            /* margin-right: 2.5%; */
            display: inline-block;
            }
        }
    </style>
@endpush
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush
@section('nev_sub')
@endsection

@section('main-section')
<div id="container" class="contentbg col-xs-12" style="margin-top: 126px;background: #fff !important;">
        <div id="divMain">
            <div id="pnlEpay">
                <span id="lblEpay"></span>
            </div>
            <div>
                <div id="pnlFields">
                <form method="post" action="">
                    <fieldset id="section_Member Information" level="Section1" class="wSectionTableCSS">
                        <legend>Member Information</legend>
                        <div class="form-inline label-up" data-label="First Name">
                            <div class="form-group" >
                                    <input name="first_name" type="text" maxlength="10" id="" class="form-control" placeholder="First Name ">
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Last Name">
                            <div class="form-group" >
                                    <input name="first_name" type="text" maxlength="10" id="" class="form-control" placeholder="Last Name ">
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Email">
                            <div class="form-group" >
                                    <input name="email" type="Email" maxlength="30" class="form-control" placeholder="Email ">
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Mobile">
                            <div class="form-group" >
                                    <input name="mobile" type="text" maxlength="20" class="form-control" placeholder="Mobile ">
                            </div>
                        </div>
                        <div id="div1" class="button-bar">
                            <button class="btn btn-default btn-next" type="submit"></button>
                        </div>
                    </fieldset>
                </form>
                <form method="post" action="">
                    <fieldset id="security" level="Section1" class="wSectionTableCSS">
                        <legend>Security</legend>
                        <div class="form-inline label-up" data-label="Password">
                            <div class="form-group" >
                                    <input name="first_name" type="password" maxlength="10" id="" class="form-control" placeholder="Password ">
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Confirm Password">
                            <div class="form-group" >
                                    <input name="first_name" type="password" maxlength="10" id="" class="form-control" placeholder="Confirm Password ">
                            </div>
                        </div>
                        <div id="div1" class="button-bar">
                            <button class="btn btn-default btn-next" type="submit"></button>
                        </div>
                    </fieldset>
                </form>
                </div>
            </div>
            <div id="pnlLinks">
                {{-- <a class="mopa-return-link" href="https://mopa.org/memberships" target="_top">Return to
                    Memberships</a> --}}
                <div class="mopa_membership_banner text-center">
                    <img src="{{ asset('assets/frontend/img/user/profile.jpg') }}" height="150" width="150" alt="" srcset="">
                    <strong>Full Name</strong>
                    <p>Developer</p>

                    <div class="biography">
                        <h2>Biography</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat asperiores eos autem laborum aperiam similique, aut maxime omnis nobis repellendus?</p>
                    </div>
                </div>
                
            </div>

            <div id="pnlShare" class="pnlShare" style="text-align:center;">
            </div>
            <div id="pnlFooter">
                <fieldset class="wSectionTableCSS baseLoaded">
                    <div class="fr-view">
                        <div class="footer_text">
                            <div>
                                <h6>Privacy Policy</h6>
                                <p>We take every precaution to protect your information. We collect credit card or bank
                                    account information, names, addresses, and other data related to your transaction
                                    when you make a payment through our site. We use this information to process your
                                    payment.</p>
                            </div>
                            <div>
                                <h6>Terms &amp; Conditions</h6>
                                <p>By submitting your payment, you authorize us to charge the account above for the
                                    amount specified in the Transaction Amount field. Account information for Recurring
                                    Pledges/Monthly Giving is encrypted and stored securely via SafeSave™ for automatic
                                    processing of your future payments. Notify us at anytime if you wish to discontinue
                                    your pledge.</p>
                            </div>
                            <div>
                                <h6>Questions?</h6>
                                <p>Please share any questions with MOPA's Development Team at 619-238-7559 x207 or email
                                    <a href="mailto:development@mopa.org">development@mopa.org</a>
                                </p>
                                <p><strong>Tax ID: 95-2889390</strong></p>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
</div>
@endsection