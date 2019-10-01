@extends('layout.authentication')

@section('title', 'Login')
@section('bodyClass', 'fixed-header menu-pin menu-behind')

@section('content')
    <div class="login-wrapper bg-white" style="margin-top: -30px;">
        <div class="login-container bg-white" style="width: 496px;display: block;position: relative;margin: 0px auto;float:unset;padding-top: 10%;">
            <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                <p class="p-t-35">Sign into ACC Partner</p>
                <!-- START Login Form -->
                <form id="loginForm" class="p-t-15" role="form">
                    <div class="form-group form-group-default">
                        <label>Login</label>
                        <div class="controls">
                            <input type="text" name="username" placeholder="User Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group form-group-default">
                        <label>Password</label>
                        <div class="controls">
                            <input type="password" class="form-control" name="password" placeholder="Credentials">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 no-padding sm-p-l-10">
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-end">
                            <a href="#" class="text-info small">Help? Contact Support</a>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-cons m-t-10" type="submit">Sign in</button>
                </form>
                <!--END Login Form-->
            </div>
        </div>
        <!-- END Login Right Container-->
    </div>
@endsection

@section('script')
    @include('app.authentication.login.scripts.index')
@endsection

@section('formValidationScript')
    @include('app.authentication.login.scripts.form')
@endsection
