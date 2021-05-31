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


    .box-register {
        box-shadow: 1px 2px 10px 0 rgb(0 0 0 / 10%);
        border-radius: 5px;
        width: 70%;
        height: 450px;
        margin: 0 auto;
        background-color: #fff;
    }

    .wrapper-text-register {
        width: 100%;
        height: 450px;
        background-color: rgb(99 156 185 / 92%);
        padding: 10%;
    }

    .wrapper-text-register .center-text-register {
        margin-top: 20%;
    }

    .wrapper-text-register h2 {
        margin-top: 0 !important;
        color: white;
        text-align: center;
    }

    .wrapper-text-register p {
        color: white;
        text-align: right;
        font-size: 15px;
    }

    .form-register {
        margin: auto;
        padding: 20px;
        width: 80%;
        /* margin-top: 15%; */
    }

    .form-register .header {
        width: 70%;
        margin-top: 10px;
    }

    .form-register .lead {
        text-align: center;
    }

    .form-register form {
        margin-top: 35%;
    }

    @media (max-width: 1000px) {

        .box-register {
            width: 90%;
        }

        .block-mobile {
            display: none;
        }

        .form-register img {
            width: 300px;
        }

        .form-register .header {
            width: 70%;
            margin-top: 10px;
        }

        .form-register .form-auth-small {
            margin-top: 30%;
        }

    }

    @media (max-width: 576px) {
        .form-register .form-auth-small {
            margin-top: 50%;
        }

    }
</style>
@endpush


@section('content')
<div class="box-register">
    <div class="row">
        <div class="col-md-5 block-mobile">
            <div class="wrapper-text-register bg-sendiri">
                <div class="center-text-register">
                    <h2>We Welcome You To Join</h2>
                    <p>Sharing knowledge will not give ignorance to you <br> -- AgusNindo</p>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-12">
            <div class="form-register">
                <div class="header">
                    <a href="{{ route('beranda') }}">
                        <div class="logo text-center"><img src="{{ asset('assets/img/logoMudahBelajar.png') }}" alt="Klorofil Logo" height="100"></div>
                        <p class="lead text-muted">Login to your account</p>
                    </a>
                </div>

                <!-- form registration -->
                <form class="form-auth-small" action="{{ route('registration') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="signin-username" class="control-label sr-only">Name</label>
                        <input type="text" class="form-control" id="signin-username" name="username" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Email</label>
                        <input type="email" class="form-control" id="signin-email" name="email" placeholder="Your Email">
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
                    <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                    <!-- <div class="bottom">
                        <div class="row">
                            <div class="col-6 col-md-6">
                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="{{ route('register') }}">Register</a></span>
                            </div>
                            <div class="col-6 col-md-6">
                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                            </div>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection