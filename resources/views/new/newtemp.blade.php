<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-config" content="{{ URL::to('assets/img/favicon/browserconfig.xml') }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/browserconfig.xml">
    <title>SISTEM -@yield('title')</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('new_template/assets/libs/chartist/dist/chartist.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('new_template/assets/extra-libs/c3/c3.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('new_template/assets/libs/morris.js/morris.css')}}" >
    <!-- Custom CSS -->
    <link href="{{ asset('new_template/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <style>
        td.details-control {
        background: url('dist/js/pages/datatable/details_open.png') no-repeat center center;
        cursor: pointer;
        }
        tr.shown td.details-control {
        background: url('dist/js/pages/datatable/details_close.png') no-repeat center center;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
   
<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        @include('new._partials.header')
        <!-- ============================================================== -->
        
        @include('new._partials.sidebar')
        
        
        <!-- ============================================================== -->
        <!--============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content')
            {{-- @include('new.container.content') --}}
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    Powered by Al-Andalus Islamic International Boarding School
                    <b>
    
                    </b>
                </div>
                <strong>
                    Copyright &copy; <?php echo Date('Y'); ?>
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
    <!-- ============================================================== -->
    
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="new_template/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="new_template/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="new_template/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->     
    <script src="new_template/dist/js/app.min.js"></script>
    <script src="new_template/dist/js/app.init.light-sidebar.js"></script>
    <script src="new_template/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="new_template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="new_template/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects --> 
    <script src="new_template/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="new_template/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="new_template/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="new_template/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="new_template/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="new_template/assets/extra-libs/c3/d3.min.js"></script>
    <script src="new_template/assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="new_template/assets/libs/morris.js/morris.min.js"></script>
    <script src="new_template/assets/libs/raphael/raphael.min.js"></script>
    
    <script src="new_template/dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>