<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="msapplication-config" content="{{ URL::to('assets/img/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('images/logo-andalus.png') }}">
    <link rel="icon" type="image/png" href="{{ URL::to('images/logo-andalus.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ URL::to('images/logo-andalus.png') }}" sizes="16x16">
    <link rel="mask-icon" href="{{ URL::to('images/logo-andalus.png') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ URL::to('images/logo-andalus.png') }}">

    <title>Al- Andalus | Halaman Tidak Bisa Ditemukan</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('new_template/dist/css/style.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
        <div class="error-box">
            <div class="error-body text-center">
                <h1 class="error-title text-danger">404</h1>
                <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
                <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">Back to home</a> </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
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
    </script>
</body>

</html>
