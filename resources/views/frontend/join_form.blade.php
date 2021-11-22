@extends('layouts.frontend.app')
@push('styles')
    <link href="{{ asset('assets/frontend/css/ResponsiveForms.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/inline.css') }}" rel="stylesheet">
    <style>
        body{
            background: #fff !important;
        }
        .form-group{
            margin-left: 0px !important;
        }
        .btn-submit::before {
            content: "Submit";
            font-size: 14px;
            letter-spacing: 2px;
        }
        .btn-submit{
            width: 100% !important;
            font-size: 0 !important;
            text-align: center !important;
            background-color: #FD8B04 !important;
            background: linear-gradient(270deg, #FD8B04 0%, #FB3D97 100%) !important;
            border-radius: 0 !important;
            border: 0 !important;
            padding: 14px 7px !important;
            font-weight: 700 !important;
            margin-top: 20px !important !important;
        }
        input[type="password"], select {
            color: #000 !important;
            border-radius: 0 !important;
            border: 1px solid #000 !important;
            width: 100% !important;
            height: 50px !important;
            font-size: 16px !important;
            text-align: left !important;
            padding: 10px !important;
        }
        .redio-input label{
            color: #000 !important;
            font-size: 16px !important;
            padding: 10px !important;
        }
        .redio-input > label{
            font-size: 20px !important;
            padding-left: 0px;
            font-family: "maax",sans-serif;
        }
        .redio-input > div > div{
            display: flex;
            display: inline-flex;

        }
        input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
            outline: none !important;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
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
    <form method="post" action="">
        <div id="divMain">
            <div id="pnlEpay">
                <span id="lblEpay"></span>
            </div>
            <div>
                <div id="pnlFields">
                    <fieldset id="section_Member Information" level="Section1" class="wSectionTableCSS">
                        <legend>Member Information</legend>
                        <div class="form-inline label-up" data-label="First Name">
                            <div level="Field_first_name" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>First Name *</label>
                                <div id="first_name_pnl">
                                    <input name="first_name" type="text" maxlength="30" id="first_name_ucTxtBox" class="form-control" placeholder="First Name *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Last Name">
                            <div level="Field_last_name" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>Last Name *</label>
                                <div id="last_name_pnl">
                                    <input name="last_name" type="text" maxlength="30" id="last_name_ucTxtBox" class="form-control" placeholder="Last Name *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Email">
                            <div level="Field_email" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>Email *</label>
                                <div id="email_pnlucEmailReq">
                                    <input name="email" type="text" maxlength="50" id="email_ucEmail" class="form-control" placeholder="Email *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Phone (optional)">
                            <div level="Field_home_phone" class="form-group" data-placeholder="true"><label>Phone </label>
                                <div id="home_phone_pnlPhone">
                                    <input name="home_phone:ucPhone" type="text" maxlength="15" id="home_phone_ucPhone"
                                        class="ucPhone form-control" placeholder="Phone ">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="">
                            <div level="" class="form-group redio-input" data-placeholder="false">
                                <label>Gender </label>
                                <div id="home_phone_pnlPhone" style="display: flex;justify-content: space-between;">
                                    <div>
                                        <input name="gender" type="radio" value="m" maxlength="15" class="form-control" placeholder="Phone ">
                                        <label>Male </label>
                                    </div>
                                    <div>
                                        <input name="gender" type="radio" value="f" maxlength="15" class="form-control" placeholder="Phone ">
                                        <label>Female </label>
                                    </div>
                                    <div>
                                        <input name="gender" type="radio" value="o" maxlength="15" class="form-control" placeholder="Phone ">
                                        <label>Other </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="">
                            <div level="" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>Password </label>
                                <div>
                                    <input name="password" type="password" maxlength="30" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="">
                            <div level="" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>Confirm Password </label>
                                <div>
                                    <input name="confirm_password" type="password" maxlength="30" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div id="div1" class="button-bar">
                        <button type="submit" value="submit" class="btn btn-default btn-submit"></button>
                    </div>
                </div>
            </div>
            <div id="pnlLinks"><a class="mopa-return-link" href="https://mopa.org/memberships" target="_top">Return to
                    Memberships</a>
                <div class="mopa_membership_banner">
                    <strong>Senior</strong>
                    <small>40</small>
                </div>
                <div class="mopa_more_info">
                    <base target="_parent">
                    <p>For one individual.</p>
                    <ul>
                        <li aria-level="1">Unlimited Free Admission</li>
                        <li aria-level="1">Member-only exhibition openings and receptions</li>
                        <li aria-level="1">FREE or discounted admission to MOPA film screenings</li>
                        <li aria-level="1">15% discount on purchases in the MOPA Shop, 20% holiday discount every
                            December</li>
                        <li aria-level="1">Subscription to Members Only eNews</li>
                        <li aria-level="1">Access to MOPA’s extensive research library, The Dubois Library, that
                            currently holds 23,000+ items</li>
                        <li aria-level="1">Reciprocal admission and/or discounts to 15+ photographic institutions</li>
                        <li aria-level="1">Discounts on programs and classes, including Spring and Summer Camps</li>
                        <li aria-level="1">Member-for-a-day passes (2)</li>
                    </ul>
                    <p><em>*100% tax-deductible&nbsp;</em></p>
                    <h3>Community partner benefits</h3>
                    <ul>
                        <li><strong>(1)</strong> $25 off coupon on scanning and printing services at <u><a
                                    href="http://www.clickscanshare.com/" target="_blank"
                                    rel="noopener noreferrer">ScanDiego</a></u></li>
                        <li><strong>(1)</strong> $25 off coupon on print or rental services at <u><a
                                    href="http://georgescamera.com/" target="_blank" rel="noopener noreferrer">George’s
                                    Camera</a></u></li>
                        <li>20% off all custom framing at <u><a href="http://theframemaker.com/" target="_blank"
                                    rel="noopener noreferrer">The Frame Maker</a></u></li>
                        <li>Flat any-time rate of&nbsp;$109&nbsp;at&nbsp;<a href="http://www.thesofiahotel.com/"
                                target="_blank" rel="noopener noreferrer">The Sofia Hotel</a></li>
                        <li>$25 Early Enrollment discount at any time throughout the quarter at <u><a
                                    href="http://extension.ucsd.edu/" target="_blank" rel="noopener noreferrer">UC San
                                    Diego Extension</a></u></li>
                        <li>2-for-1 tickets at all 4ARTS partner organizations (MOPA, <u><a
                                    href="http://malashockdance.org/" target="_blank"
                                    rel="noopener noreferrer">Malashock Dance</a></u>, <u><a
                                    href="http://www.cygnettheatre.com/" target="_blank"
                                    rel="noopener noreferrer">Cygnet Theatre</a></u> &amp; <u><a
                                    href="http://www.mainlymozart.org/" target="_blank" rel="noopener noreferrer">Mainly
                                    Mozart</a></u>)</li>
                    </ul>
                    <hr>
                    <p>
                        <em>Contact the Annual Giving &amp; Membership Manager Lucia Burrafato at 619-238-7559 x207</em>
                    </p>
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
    </form>
</div>
@endsection