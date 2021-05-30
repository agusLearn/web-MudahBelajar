<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chartist/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/klorofil-css/main.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">

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
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
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
                                <form class="form-auth-small" action="index.php">
                                    <div class="form-group">
                                        <label for="signin-username" class="control-label sr-only">Email</label>
                                        <input type="text" class="form-control" id="signin-username" name="username" placeholder="Email or Username">
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
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>