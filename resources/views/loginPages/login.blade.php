@extends('loginPages.templates.master-login')


@push('custome-css')
<style>
    .header {
        position: absolute;
        margin-top: -80px;
    }

    .header .lead {
        margin-top: -20px;
    }

    form {
        margin-top: 50px;
    }
</style>
@endpush

@section('content')
<div class="auth-box ">
    <div class="left">
        <div class="content">
            <div class="header">
                <div class="logo text-center"><img src="{{ asset('assets/img/logoMudahBelajar.png') }}" alt="Klorofil Logo" height="100"></div>
                <p class="lead">Login to your account</p>
            </div>
            <form class="form-auth-small" action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="signin-username" class="control-label sr-only">Email</label>
                    <input type="email" class="form-control" id="signin-username" name="email" placeholder="Email or Username">
                </div>
                <div class="form-group">
                    <label for="signin-password" class="control-label sr-only">Password</label>
                    <input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
                </div>
                <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox">
                        <span>Remember me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                <div class="bottom">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <span class="helper-text"><i class="fa fa-lock"></i> <a href="{{ route('register') }}">Register</a></span>
                        </div>
                        <div class="col-6 col-md-6">
                            <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="right">
        <div class="overlay"></div>
        <div class="content text">
            <h1 class="heading"><b>Create and Share</b> Your Expertise That is Needed</h1>
            <p>Developer : Agus Nindo</p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection