@extends('layouts.frontend.app')
@push('styles')
    <link href="{{ asset('assets/frontend/css/ResponsiveForms.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/inline.css') }}" rel="stylesheet">
    <style>
        body{
            background: #fff !important;
        }
        .form-group{
            margin-left: 0px !important;
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
                                <label>First Name</label>
                                <div id="first_name_pnl">
                                    <input name="first_name:ucTxtBox" type="text" maxlength="30"
                                        id="first_name_ucTxtBox" onblur="SetCCName();" class="form-control"
                                        placeholder="First Name *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Last Name">
                            <div level="Field_last_name" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>Last Name</label>
                                <div id="last_name_pnl">
                                    <input name="last_name:ucTxtBox" type="text" maxlength="30" id="last_name_ucTxtBox"
                                        onblur="SetCCName();" class="form-control" placeholder="Last Name *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Address">
                            <div level="Field_address" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>Address</label>
                                <div id="address_pnl">
                                    <input name="address:ucTxtBox" type="text" maxlength="30" id="address_ucTxtBox"
                                        class="form-control" placeholder="Address *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="City">
                            <div level="Field_city" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>City</label>
                                <div id="city_pnl">
                                    <input name="city:ucTxtBox" type="text" maxlength="30" id="city_ucTxtBox"
                                        class="form-control" placeholder="City *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="State">
                            <div level="Field_state" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>State</label>
                                <div id="state_pnl">
                                    <select name="state:ucDDL" id="state_ucDDL" class="form-control">
                                        <option selected="selected" value="">State *</option>
                                        <option value="AL|Alabama|Y">Alabama</option>
                                        <option value="AK|Alaska|Y">Alaska</option>
                                        <option value="AB|Alberta|Y">Alberta</option>
                                        <option value="AZ|Arizona|Y">Arizona</option>
                                        <option value="AR|Arkansas|Y">Arkansas</option>
                                        <option value="AA|Armed Forces Americas|Y">Armed Forces Americas</option>
                                        <option value="AE|Armed Forces Other|Y">Armed Forces Other</option>
                                        <option value="AP|Armed Forces Pacific|Y">Armed Forces Pacific</option>
                                        <option value="BC|British Columbia|Y">British Columbia</option>
                                        <option value="CA|California|Y">California</option>
                                        <option value="CO|Colorado|Y">Colorado</option>
                                        <option value="CT|Connecticut|Y">Connecticut</option>
                                        <option value="DE|Delaware|Y">Delaware</option>
                                        <option value="FL|Florida|Y">Florida</option>
                                        <option value="GA|Georgia|Y">Georgia</option>
                                        <option value="HI|Hawaii|Y">Hawaii</option>
                                        <option value="ID|Idaho|Y">Idaho</option>
                                        <option value="IL|Illinois|Y">Illinois</option>
                                        <option value="IN|Indiana|Y">Indiana</option>
                                        <option value="IA|Iowa|Y">Iowa</option>
                                        <option value="KS|Kansas|Y">Kansas</option>
                                        <option value="KY|Kentucky|Y">Kentucky</option>
                                        <option value="LA|Louisiana|Y">Louisiana</option>
                                        <option value="ME|Maine|Y">Maine</option>
                                        <option value="MB|Manitoba|Y">Manitoba</option>
                                        <option value="MD|Maryland|Y">Maryland</option>
                                        <option value="MA|Massachusetts|Y">Massachusetts</option>
                                        <option value="MI|Michigan|Y">Michigan</option>
                                        <option value="MN|Minnesota|Y">Minnesota</option>
                                        <option value="MS|Mississippi|Y">Mississippi</option>
                                        <option value="MO|Missouri|Y">Missouri</option>
                                        <option value="MT|Montana|Y">Montana</option>
                                        <option value="NE|Nebraska|Y">Nebraska</option>
                                        <option value="NV|Nevada|Y">Nevada</option>
                                        <option value="NB|New Brunswick|Y">New Brunswick</option>
                                        <option value="NH|New Hampshire|Y">New Hampshire</option>
                                        <option value="NJ|New Jersey|Y">New Jersey</option>
                                        <option value="NM|New Mexico|Y">New Mexico</option>
                                        <option value="NY|New York|Y">New York</option>
                                        <option value="NL|Newfoundland and Labrador|Y">Newfoundland and Labrador</option>
                                        <option value="NC|North Carolina|Y">North Carolina</option>
                                        <option value="ND|North Dakota|Y">North Dakota</option>
                                        <option value="NT|Northwest Territories|Y">Northwest Territories</option>
                                        <option value="NS|Nova Scotia|Y">Nova Scotia</option>
                                        <option value="NU|Nunavut|Y">Nunavut</option>
                                        <option value="OH|Ohio|Y">Ohio</option>
                                        <option value="OK|Oklahoma|Y">Oklahoma</option>
                                        <option value="ON|Ontario|Y">Ontario</option>
                                        <option value="OR|Oregon|Y">Oregon</option>
                                        <option value="PA|Pennsylvania|Y">Pennsylvania</option>
                                        <option value="PE|Prince Edward Island|Y">Prince Edward Island</option>
                                        <option value="PR|Puerto Rico|Y">Puerto Rico</option>
                                        <option value="QC|Quebec|Y">Quebec</option>
                                        <option value="RI|Rhode Island|Y">Rhode Island</option>
                                        <option value="SK|Saskatchewan|Y">Saskatchewan</option>
                                        <option value="SC|South Carolina|Y">South Carolina</option>
                                        <option value="SD|South Dakota|Y">South Dakota</option>
                                        <option value="TN|Tennessee|Y">Tennessee</option>
                                        <option value="TX|Texas|Y">Texas</option>
                                        <option value="UT|Utah|Y">Utah</option>
                                        <option value="VT|Vermont|Y">Vermont</option>
                                        <option value="VA|Virginia|Y">Virginia</option>
                                        <option value="WA|Washington|Y">Washington</option>
                                        <option value="DC|Washington DC|Y">Washington DC</option>
                                        <option value="WV|West Virginia|Y">West Virginia</option>
                                        <option value="WI|Wisconsin|Y">Wisconsin</option>
                                        <option value="WY|Wyoming|Y">Wyoming</option>
                                        <option value="YT|Yukon|Y">Yukon</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Zip" style="margin-left: 0px;">
                            <div level="Field_zip" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div><label>Zip</label>
                                <div id="zip_pnl">
                                    <input name="zip:ucTxtBox" type="text" maxlength="10" id="zip_ucTxtBox"
                                        class="form-control" placeholder="Zip *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Phone (optional)">
                            <div level="Field_home_phone" class="form-group" data-placeholder="true"><label>Phone
                                    (optional)</label>
                                <div id="home_phone_pnlPhone">
                                    <input name="home_phone:ucPhone" type="text" maxlength="15" id="home_phone_ucPhone"
                                        class="ucPhone form-control" placeholder="Phone (optional)">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Email">
                            <div level="Field_email" class="form-group" data-placeholder="true">
                                <div class="glyphicon glyphicon-asterisk form-control-feedback"></div>
                                <label>Email</label>
                                <meta name="vs_snapToGrid" content="False">
                                <meta name="vs_showGrid" content="True">
                                <div id="email_pnlucEmailReq">
                                    <span controltovalidate="email_ucEmail"
                                        errormessage="Your entry is not a valid email address!" display="Dynamic"
                                        id="email_valEmail"
                                        evaluationfunction="RegularExpressionValidatorEvaluateIsValid"
                                        validationexpression="^\s*[\w-\.]+@([\w-]+\.)+[\w-]{2,}\s*$"
                                        style="color:Red;font-size:XX-Small;font-weight:bold;display:none;">Your entry
                                        is not a valid email address!</span>
                                    <input name="email:ucEmail" type="text" maxlength="50" id="email_ucEmail"
                                        class="form-control" placeholder="Email *">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Second Member First Name" style="display: none;">
                            <div level="Field_spouse_first" class="form-group" data-placeholder="true"><label>Second
                                    Member First Name</label><input name="spouse_first" type="text" maxlength="15"
                                    id="spouse_first" class="form-control" fieldprompt="Second Member First Name"
                                    placeholder="Second Member First Name"></div>
                        </div>
                        <div class="form-inline label-up" data-label="Second Member Last Name" style="display: none;">
                            <div level="Field_spouse_last" class="form-group" data-placeholder="true"><label>Second
                                    Member Last Name</label><input name="spouse_last" type="text" maxlength="200"
                                    id="spouse_last" class="form-control" fieldprompt="Second Member Last Name"
                                    placeholder="Second Member Last Name"></div>
                        </div>
                    </fieldset>
                    <div id="div1" class="button-bar"><a id="btnConfirm12345" class="btn btn-default btn-next"
                            href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnConfirm12345&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Next
                            <i class="fa fa-arrow-right"></i></a></div>
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