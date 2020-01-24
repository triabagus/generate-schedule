<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Penjadwalan</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ URL::to('assets/img/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ URL::to('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{ URL::to('assets/img/favicon/manifest.json') }}">
    <link rel="mask-icon" href="{{ URL::to('assets/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon/favicon.ico') }}">
    <meta name="msapplication-config" content="{{ URL::to('assets/img/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('new_template/dist/css/style.min.css') }}">
</head>
<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('new_template/assets/images/background/login-register.jpg')}}) no-repeat center center;">
            <div class="auth-box on-sidebar">
                <div id="loginform">
                    <div class="logo mb-4">
                        <span class="db"><img src="{{ URL('images/Login-Logo-Portal.png') }}" alt="logo" /></span>
                        <h5 class="font-medium m-b-20 m-t-20"></h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            @include('admin-news._partials.notifications')
                            {!! Form::open(['route' => 'admin.login.submit', 'class' => "form-horizontal m-t-20"]) !!}
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    {!! Form::email('email', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Email or Username', 'required']) !!}
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    {!! Form::password('password', ['class' => 'form-control form-control-lg', 'placeholder' => 'Password', 'required']) !!}
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
                                    </div>
                                </div>
                            
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="logo mb-3">
                        <span class="db"><img src="{{ asset('new_template/assets/images/logo-andalus.png') }}" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Recover Password</h5>
                        <span>Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="index.html">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                                </div>
                                <div class="col-12 mt-2">
                                    <a href="javascript:void(0)" id="to-login" class="text-dark float-right"><i class="fa fa-back m-r-5"></i> Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('new_template/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('new_template/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('new_template/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').on("click", function() {
        $("#recoverform").fadeOut();
        $("#loginform").fadeIn();
    });
    </script>
</body>

</html>


