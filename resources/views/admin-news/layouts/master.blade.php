<!DOCTYPE html>
<html dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="msapplication-config" content="{{ URL::to('assets/img/favicon/browserconfig.xml') }}">
        <meta name="theme-color" content="#ffffff">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
        <title>
            Al-Andalus - @yield('title')
        </title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('images/logo-andalus.png') }}">
        <link rel="icon" type="image/png" href="{{ URL::to('images/logo-andalus.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ URL::to('images/logo-andalus.png') }}" sizes="16x16">
        <link rel="mask-icon" href="{{ URL::to('images/logo-andalus.png') }}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ URL::to('images/logo-andalus.png') }}">

        <!-- Custom CSS -->
        
        <link href="{{ asset('new_template/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ asset('new_template/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
        <link href="{{ asset('new_template/assets/libs/morris.js/morris.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('new_template/dist/css/style.min.css') }}">
        @yield('style')
    </head>
    <body>
        @include('admin-news._partials.loading')
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            @include('admin-news._partials.navbar')
            @include('admin-news._partials.sidebar')
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                @yield('content')
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Designed and Developed by
                <a href="#">Pesantren Al-Andalus </a>&copy; <?php echo Date('Y'); ?>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        @include('admin-news._partials.customizer')
    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('new_template/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('new_template/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('new_template/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('new_template/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('new_template/dist/js/app.init.dark.js') }}"></script>
    <script src="{{ asset('new_template/dist/js/app-style-switcher.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('new_template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('new_template/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('new_template/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('new_template/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('new_template/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('new_template/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('new_template/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!--c3 charts -->
    <script src="{{ asset('new_template/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('new_template/assets/extra-libs/c3/c3.min.js') }}"></script>
    <!--chartjs -->
    <script src="{{ asset('new_template/assets/libs/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('new_template/assets/libs/morris.js/morris.min.js') }}"></script>

    <script src="{{ asset('new_template/dist/js/pages/dashboards/dashboard1.js') }}"></script>
        @include('admin-news._partials.js')
        @yield('script')
    </body>
</html>  

