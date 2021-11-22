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
        #divMain{
            display: flex !important;
            justify-content: center;
            text-align: center
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
        .login-res{
            min-width: 100%;
        }
        @media only screen and (min-width: 892px) {
            .login-res{
            min-width: 600px;
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
    <form method="post" action="">
        <div id="divMain">    
            <div class="login-res">
                <div id="pnlFields">
                    <fieldset id="section_Member Information" level="Section1" class="wSectionTableCSS">
                        <legend>Log In</legend>
                        <div class="form-inline label-up" data-label="Phone (optional)">
                            <div level="Field_home_phone" class="form-group" data-placeholder="true">
                                <label>Email</label>
                                <div id="home_phone_pnlPhone">
                                    <input name="email" type="text" maxlength="30" class="ucPhone form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-inline label-up" data-label="Phone (optional)">
                            <div level="Field_home_phone" class="form-group" data-placeholder="true">
                                <label>Password</label>
                                <div id="home_phone_pnlPhone">
                                    <input name="password" type="password" maxlength="30" class="ucPhone form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div id="" class="button-bar">
                        <button class="btn btn-default btn-submit" type="submit"></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection