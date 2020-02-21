<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>AdminBite admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/prism/prism.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="../html/ltr/dist/css/icons/font-awesome/css/fontawesome.min.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .plugin-details {
            display: none;
        }

        .plugin-details-active {
            display: block;
        }
    </style>
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
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#intro" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Introduction</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#installation" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Installation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#layout" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Layout options</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#colors" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Color Variations</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#folder" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Folder Structure</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#plugindir" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Plugins</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#page" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Page Structure</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#customjs" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Js Settings</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#fonts" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Font</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#scss" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">scss</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#ui-content" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Content</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#ui-card" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Card</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#ui-icons" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Icons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#ui-button" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Buttons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#ui-chart" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Charts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#ui-form" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Form</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#ui-table" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#js" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Js</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#credits" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Credits</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#support" aria-expanded="false">
                                <i class="far fa-circle"></i>
                                <span class="hide-menu">Supoort</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row p-t-30">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card" id="intro">
                            <div class="card-body">
                                <h3>Introduction</h3>
                                <hr>
                                <p>AdminBite admin is a popular open source WebApp template for admin dashboards and control
                                    panels. AdminBite admin is fully responsive HTML template, which is based on the CSS
                                    framework Bootstrap 4. It utilizes all of the Bootstrap components in its design and
                                    re-styles many commonly used plugins to create a consistent design that can be used as
                                    a user interface for backend applications. AdminBite admin is based on a modular design,
                                    which allows it to be easily customized and built upon. This documentation will guide
                                    you through installing the template and exploring the various components that are bundled
                                    with the template.</p>
                                <p>We put a lot of love and effort to make AdminBite admin a useful template for everyone and
                                    now It comes with 10 unique demos. We are keen to release continuous long term updates
                                    and lots of new features will be coming soon in the future releases. Once you purchased
                                    AdminBite admin, you will be entitled to free download of all future updates for the
                                    same license.</p>
                                <ul>
                                    <li> Author:
                                        <a href="https://wrappixel.com/" target="_blank"> Wrappixel / Nirav Joshi</a>
                                    </li>
                                    <li> Contact:
                                        <a href="https://wrappixel.com/support/"> http://wrappixel.com/support/</a>
                                    </li>
                                    <li> website:
                                        <a href="https://wrappixel.com/" target="_blank"> http://wrappixel.com/</a>
                                    </li>
                                </ul>
                                <hr>
                                <div class="alert alert-warning">NOTE: A single license can be used only for one domain or client. Each use of the template
                                    requires a separate license. We hope you will follow the rules as it will help us to
                                    continue supporting our template and providing a free future updates.</div>
                                <b>Support does include: </b>
                                <ul>
                                    <li>1) Answering your questions or problems regarding the template.</li>
                                    <li>2) Giving solution to the Bugs reported. </li>
                                </ul>
                                <p></p>
                                <b>Support does not include: </b>
                                <ul>
                                    <li>1) Custmaization Work</li>
                                    <li>2) Any Installation Work</li>
                                    <li>3) Support for any Third Party Plugins / Software</li>
                                    <li>4) Support or Guide for How to integrate with any technologies (like, PHP, .net, Java
                                        etc)
                                    </li>
                                    <li>5) Solve bug in your implemented template</li>
                                </ul>
                            </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="installation">
                            <div class="card-body">
                                <h3>Installation</h3>
                                <hr>
                                <p>This is the simple static HTML template so no need any headech to install it. just double
                                    click on any html (html/ltr/) file and you can access it.</p>
                                <br/>
                                <b>Just simple steps to follow if you are using npm for package manager:</b>
                                <p>
                                    <br/>1) Install Node.js and NPM : You can download Node.js from
                                    <a href="https://nodejs.org" target="_blank">https://nodejs.org</a>. NPM comes bundled with Node.js.</p>
                                <p>2)
                                    <strong>NPM Packages: </strong> You can do this by running
                                    <code>npm install</code> from the root of your project to install all the necessary dependencies.</p>
                                <div class="alert alert-info"> Note: we recomonded you to please make your one own css file &amp; one js files and add that
                                    in your page, so whenever the update of AdminBite admin comes it does not affect your
                                    code. </div>
                                <b>For compiling scss &amp; js:</b>
                                <p> We used gulp for compiling scss and js file so if you are also using scss then try our gulp
                                    task manager to compile scss</p>
                                <b>If you never work with gulp then you need to get starterd from here: https://github.com/gulpjs/gulp/blob/v3.9.1/docs/getting-started.md</b>
                                <b>
                                    <br/>
                                    <br/>1. Install gulp globally:</b>
                                <p class="">If you have previously installed a version of gulp globally, please run npm rm --global gulp
                                    to make sure your old version doesn't collide with gulp-cli.</p>
                                <p class="bg-light p-10">$ npm install --global gulp-cli</p>
                                <b> 2. Install gulp in your project devDependencies:</b>
                                <p class="bg-light p-10">$ npm install --save-dev gulp</p>
                                <b>3. We already created gulpfile.js at the root of the project:</b> if you want any other task
                                you can add that
                                <b>4. Run gulp:</b>
                                <p class="bg-light p-10">$ gulp</p>
                                <b>
                                    <br/>
                                    <br/>How to Install npm dependencies?</b>
                                <p>In your root folder enter the following command to install the project dependencies:
                                    <code>npm install</code>, this command will install all the template libraries inside the node_modules folder,
                                    after that you need to run this command
                                    <code>gulp copy</code> to include dependencies in assets/libs folder.</p>
                            </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="layout">
                            <div class="card-body">
                                <h3>Layout options </h3>
                                <hr>
                                <p>With the theme settings you can convert the theme into dark or light, you can change logo
                                    bg colors, sidebar bg color and also navbar bg colors, you can also make header and sidebar
                                    fixed, We have made Total 6 Color variation and you can create unlimited colors by changing
                                    variable colors from variable.scss. To modify settings you just need to open the
                                    <code>app.init.js</code> file and you can find the option like this:</p>
                                <p>You can find
                                    <code>app.init.js</code> file from here:</p>
                                <pre class="language-html">
                                    <code>
                                        dist/js/app.init.js
                                    </code>
                                </pre>
                                <pre class="language-js scrollable">
                                    <code class="language-js">
                                        Theme: false, // this can be true or false ( true means dark and false means light ),
                                        Layout: 'vertical',
                                        LogoBg: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6 
                                        NavbarBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                                        SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
                                        SidebarColor: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                                        SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                                        HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                                        BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid ) 
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Dark Theme ?</h5>
                                <p>For dark theme, you can change
                                    <code>Theme:true</code> in place of
                                    <code>Theme:false</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        Theme: true, // this can be true or false ( true means dark and false means light ),
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Minisidebar(Collapse) Sidebar ?</h5>
                                <p>For Collapse sidebar, you can change
                                    <code> SidebarType: 'mini-sidebar'</code> in place of
                                    <code>SidebarType: 'full'</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarType: 'mini-sidebar', // You can change it full / mini-sidebar / iconbar / overlay
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Full Sidebar ?</h5>
                                <p>For Full sidebar, you can change
                                    <code> SidebarType: 'full'</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Icon Sidebar ?</h5>
                                <p>For Icon sidebar, you can change
                                    <code> SidebarType: 'iconbar'</code> in place of
                                    <code>SidebarType: 'full'</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarType: 'iconbar', // You can change it full / mini-sidebar / iconbar / overlay
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Overlay Sidebar ?</h5>
                                <p>For Overlay sidebar, you can change
                                    <code> SidebarType: 'overlay'</code> in place of
                                    <code>SidebarType: 'full'</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarType: 'overlay', // You can change it full / mini-sidebar / iconbar / overlay
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Fixed Sidebar ?</h5>
                                <p>For Fixed sidebar, you can change
                                    <code> SidebarPosition: true,</code> in place of
                                    <code>SidebarPosition: false,</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Fixed Header ?</h5>
                                <p>For Fixed Header, you can change
                                    <code> HeaderPosition: true,</code> in place of
                                    <code>HeaderPosition: false</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Boxed Layout ?</h5>
                                <p>For Boxed Layout, you can change
                                    <code> BoxedLayout: true</code> in place of
                                    <code>BoxedLayout: false</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        BoxedLayout: true, // it can be true / false ( true means Boxed and false means Fluid ) 
                                    </code>
                                </pre>
                                <h3 class="m-t-20">For the Horizontal Demo Version</h3>
                                <hr>
                                <p>You can find
                                    <code>app.init.horizontal.js</code> file from here:</p>
                                <pre class="language-js">
                                    <code>
                                        dist/js/app.init.horizontal.js
                                    </code>
                                </pre>
                                <p>For Horizontal sidebar, you can change
                                    <code> Layout: 'horizontal'</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        Theme: false, // this can be true or false ( true means dark and false means light ),
                                        Layout: 'horizontal',
                                        LogoBg: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6 
                                        NavbarBg: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                                        SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
                                        SidebarColor: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                                        SidebarPosition: false, // it can be true / false ( true means Fixed and false means absolute )
                                        HeaderPosition: false, // it can be true / false ( true means Fixed and false means absolute )
                                        BoxedLayout: true, // it can be true / false ( true means Boxed and false means Fluid ) 
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card" id="colors">
                            <div class="card-body">
                                <h3>Color Variations</h3>
                                <p>With the theme settings you can convert the theme into dark or light, you can change logo
                                    bg colors, sidebar bg color and also navbar bg colors, you can also make header and sidebar
                                    fixed, We have made Total 6 Color variation and you can create unlimited colors by changing
                                    variable colors from variable.scss. To modify settings you just need to open the
                                    <code>app.init.js</code> file and you can find the option like this:</p>
                                <pre class="language-js scrollable">
                                    <code class="language-js">
                                        Theme: false, // this can be true or false ( true means dark and false means light ),
                                        Layout: 'vertical',
                                        LogoBg: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6 
                                        NavbarBg: 'skin6', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                                        SidebarType: 'full', // You can change it full / mini-sidebar / iconbar / overlay
                                        SidebarColor: 'skin1', // You can change the Value to be skin1/skin2/skin3/skin4/skin5/skin6
                                        SidebarPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                                        HeaderPosition: true, // it can be true / false ( true means Fixed and false means absolute )
                                        BoxedLayout: false, // it can be true / false ( true means Boxed and false means Fluid ) 
                                    </code>
                                </pre>
                                <h5 class="m-b-0 m-t-20">How to apply Dark Theme ?</h5>
                                <p>For dark theme, you can change
                                    <code>Theme:true</code> in place of
                                    <code>Theme:false</code>.</p>
                                <pre class="language-js">
                                    <code>
                                        Theme: true, // this can be true or false ( true means dark and false means light ),
                                    </code>
                                </pre>
                                <h5 class="m-t-20">How to Change Sidebar Color?</h5>
                                <h6 class="card-subtitle">To change a sidebar color, choose any of the following options.</h6>
                                <p class="m-b-0 m-t-20">To apply blue color of sidebar</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarColor: 'skin1' //To apply blue color of sidebar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply orange color of sidebar</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarColor: 'skin2' //To apply orange color of sidebar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply cyan color of sidebar</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarColor: 'skin3' //To apply cyan color of sidebar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply purple color of sidebar</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarColor: 'skin4' //To apply purple color of sidebar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply black color of sidebar</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarColor: 'skin5' //To apply black color of sidebar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply gray color of sidebar</p>
                                <pre class="language-js">
                                    <code>
                                        SidebarColor: 'skin6' //To apply gray color of sidebar
                                    </code>
                                </pre>
                                <h5 class="m-t-20">How to Change Navbar Color?</h5>
                                <h6 class="card-subtitle">To change a navbar color, choose any of the following options.</h6>
                                <p class="m-b-0 m-t-20">To apply blue color of navbar</p>
                                <pre class="language-js">
                                    <code>
                                        NavbarBg: 'skin1' //To apply blue color of navbar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply orange color of navbar</p>
                                <pre class="language-js">
                                    <code>
                                        NavbarBg: 'skin2' //To apply orange color of navbar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply cyan color of navbar</p>
                                <pre class="language-js">
                                    <code>
                                        NavbarBg: 'skin3' //To apply cyan color of navbar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply purple color of navbar</p>
                                <pre class="language-js">
                                    <code>
                                        NavbarBg: 'skin4' //To apply purple color of navbar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply black color of navbar</p>
                                <pre class="language-js">
                                    <code>
                                        NavbarBg: 'skin5' //To apply black color of navbar
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply gray color of navbar</p>
                                <pre class="language-js">
                                    <code>
                                        NavbarBg: 'skin6' //To apply gray color of navbar
                                    </code>
                                </pre>
                                <h5 class="m-t-20">How to Change Logo Background Color?</h5>
                                <h6 class="card-subtitle">To change a logo background color, choose any of the following options.</h6>
                                <p class="m-b-0 m-t-20">To apply blue background-color of logo</p>
                                <pre class="language-js">
                                    <code>
                                        LogoBg: 'skin1' //To apply blue background-color of logo
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply orange background-color of logo</p>
                                <pre class="language-js">
                                    <code>
                                        LogoBg: 'skin2' //To apply orange background-color of logo
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply cyan background-color of logo</p>
                                <pre class="language-js">
                                    <code>
                                        LogoBg: 'skin3' //To apply cyan background-color of logo
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply purple background-color of logo</p>
                                <pre class="language-js">
                                    <code>
                                        LogoBg: 'skin4' //To apply purple background-color of logo
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply black background-color of logo</p>
                                <pre class="language-js">
                                    <code>
                                        LogoBg: 'skin5' //To apply black background-color of logo
                                    </code>
                                </pre>
                                <p class="m-b-0 m-t-20">To apply gray background-color of logo</p>
                                <pre class="language-js">
                                    <code>
                                        LogoBg: 'skin6' //To apply gray background-color of logo
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card" id="folder">
                            <div class="card-body">
                                <h3>Folder Structure</h3>
                                <hr>
                                <p>we follow simple structure for the template</p>
                                <pre class="highlight scrollable">
                                    <code>
                                            AdminBite admin
                                              |
                                              |
                                              |
                                              |── html
                                              |     └── ltr/
                                              |         └── All HTML Files
                                              |
                                              |     └── rtl/
                                              |         └── All HTML Files      
                                              |
                                              |     └── horizontal/
                                              |         └── All HTML Files
                                              |
                                              |── assets
                                              |     └── extra-libs/
                                              |          └── plugins which is not available on npm
                                              |
                                              |     └── images/ 
                                              |         └── All Theme images
                                              |
                                              |     └── libs/
                                              |         └── All Required plugins files
                                              |
                                              |── dist
                                              |     └── css/
                                              |          └── All css files
                                              |
                                              |     └── js/ 
                                              |         └── All Js files  
                                              |
                                              |── src
                                              |     └── scss/
                                              |          └── All scss files
                                              |
                                              |── package.json
                                              |    
                                              |
                                              |── gulpfile.js
                                              |     
                                              |     
                                              |
                                              └
                
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card" id="plugindir">
                            <div class="card-body">
                                <h3 id="plugins">Plugins (Find Js and CSS Path)</h3>
                                <hr>
                                <p>You can find plugins from here as per page requirements</p>
                                <h5>Select Plugin</h5>
                                <select class="form-control" id="pluginslist" onchange="showPluginDetails();">
                                    <option value="blockui">blockUI</option>
                                    <option value="bt-colorpicker">bootstrap-colorpicker</option>
                                    <option value="bt-datepaginator">bootstrap-datepaginator</option>
                                    <option value="bt-datepicker">bootstrap-datepicker</option>
                                    <option value="bt-duallistbox">bootstrap-duallistbox</option>
                                    <option value="bt-material-datetimepicker">bootstrap-material-datetimepicker</option>
                                    <option value="bt-switch">bootstrap-switch</option>
                                    <option value="bt-touchspin">bootstrap-touchspin</option>
                                    <option value="chart-js">chart.js</option>
                                    <option value="chartist">chartist</option>
                                    <option value="chartist-plugin-tooltips">chartist-plugin-tooltips</option>
                                    <option value="ckeditor">ckeditor</option>
                                    <option value="clockpicker">clockpicker</option>
                                    <option value="cropper">cropper</option>
                                    <option value="datatables">datatables</option>
                                    <option value="daterangepicker">daterangepicker</option>
                                    <option value="dragula">dragula</option>
                                    <option value="dropzone">dropzone</option>
                                    <option value="echarts">echarts</option>
                                    <option value="flot">flot</option>
                                    <option value="footable">footable</option>
                                    <option value="fullcalendar">fullcalendar</option>
                                    <option value="gaugeJS">gaugeJS</option>
                                    <option value="gmaps">gmaps</option>
                                    <option value="inputmask">inputmask</option>
                                    <option value="jquery">jquery</option>
                                    <option value="jquery.flot.tooltip">jquery.flot.tooltip</option>
                                    <option value="jquery.repeater">jquery.repeater</option>
                                    <option value="jquery-asColor">jquery-asColor</option>
                                    <option value="jquery-asColorPicker">jquery-asColorPicker</option>
                                    <option value="jquery-asGradient">jquery-asGradient</option>
                                    <option value="jquery-sessiontimeout">jquery-sessiontimeout</option>
                                    <option value="jquery-steps">jquery-steps</option>
                                    <option value="jquery-validation">jquery-validation</option>
                                    <option value="jsgrid">jsgrid</option>
                                    <option value="jvectormap">jvectormap</option>
                                    <option value="magnific-popup">magnific-popup</option>
                                    <option value="masonry-layout">masonry-layout</option>
                                    <option value="moment">moment</option>
                                    <option value="morris.js">morris.js</option>
                                    <option value="nestable">nestable</option>
                                    <option value="perfect-scrollbar">perfect-scrollbar</option>
                                    <option value="pickadate">pickadate</option>
                                    <option value="popper.js">popper.js</option>
                                    <option value="prism">prism</option>
                                    <option value="taskboard">taskboard</option>
                                    <option value="treeview">treeview</option>
                                    <option value="quill">quill</option>
                                    <option value="raphael">raphael</option>
                                    <option value="select2">select2</option>
                                    <option value="summernote">summernote</option>
                                    <option value="sweetalert2">sweetalert2</option>
                                    <option value="tablesaw">tablesaw</option>
                                    <option value="tinymce">tinymce</option>
                                    <option value="typeahead.js">typeahead.js</option>
                                </select>
                                <script>
                                    function showPluginDetails() {
                                        var id = $('#pluginslist').val();
                                        $('.plugin-details').hide();
                                        $('#' + id).show();
                                        return;
                                    }
                                </script>
                                <div id="blockui" class="plugin-details plugin-details-active p-10 border m-t-20">
                                    <h5 class="card-title">jQuery Block-UI</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup">
                                        <code>
                                            No CSS available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/blockUI/jquery.blockUI.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="bt-colorpicker" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">Bootstrap Colorpicker</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="bt-datepaginator" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">Bootstrap datepaginator</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/bootstrap-datepaginator/dist/bootstrap-datepaginator.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/bootstrap-datepaginator/dist/bootstrap-datepaginator.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="bt-datepicker" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">Bootstrap datepicker</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="bt-duallistbox" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">Bootstrap duallistbox</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/bootstrap-duallistbox/dist/bootstrap-duallistbox.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/bootstrap-duallistbox/dist/jquery.bootstrap-duallistbox.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="bt-material-datetimepicker" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">Bootstrap material datetimepicker</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="bt-switch" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">Bootstrap switch</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/bootstrap-switch/dist/js/bootstrap-switch.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="bt-touchspin" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">Bootstrap touchspin</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="chart-js" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">chart-js</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/chart-js/dist/Chart.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="chartist" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">chartist</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/chartist/dist/chartist.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/chartist/dist/chartist.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="chartist-plugin-tooltips" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">chartist-plugin-tooltips</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="ckeditor" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">ckeditor</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css&quot; /&gt;
                                         &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/ckeditor/samples/css/samples.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/ckeditor/ckeditor.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                         &lt;script src=&quot; ../../assets/libs/ckeditor/samples/js/sample.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="clockpicker" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">clockpicker</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/clockpicker/dist/bootstrap-clockpicker.min.css&quot; /&gt;

                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/clockpicker/dist/jquery-clockpicker.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/clockpicker/dist/bootstrap-clockpicker.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;

                                        &lt;script src=&quot;../../assets/libs/clockpicker/dist/jquery-clockpicker.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="cropper" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">cropper</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/cropper/dist/cropper.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/cropper/dist/cropper.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="datatables" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">datatables</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/datatables/media/css/jquery.dataTables.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/datatables/media/js/jquery.dataTables.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="daterangepicker" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">daterangepicker</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/daterangepicker/daterangepicker.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/daterangepicker/daterangepicker.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="dragula" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">dragula</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/dragula/dist/dragula.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/dragula/dist/dragula.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="dropzone" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">dropzone</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/dropzone/dist/dropzone.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/dropzone/dist/dropzone.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="echarts" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">echarts</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/echarts/dist/echarts.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/echarts/dist/echarts.simple.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="flot" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">flot</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/flot/jquery.flot.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/flot/jquery.flot.pie.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/flot/jquery.flot.resize.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="footable" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">footable</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/footable/css/footable.core.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/footable/dist/footable.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="footable" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">footable</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/footable/css/footable.core.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/footable/dist/footable.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="fullcalendar" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">fullcalendar</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;../../assets/libs/fullcalendar/dist/fullcalendar.min.css&quot; /&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/fullcalendar/dist/fullcalendar.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="gaugeJS" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">gaugeJS</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/gaugeJS/dist/gauge.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="gmaps" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">gmaps</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/gmaps/dist/gmaps.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="inputmask" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">inputmask</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery/dist/jquery.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery.flot.tooltip" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery.flot.tooltip</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery.repeater" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery.repeater</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery.repeater/js/jquery.repeater.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery-asColor" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery-asColor</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery-asColor/js/jquery-asColor.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery-asColorPicker" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery-asColorPicker</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery-asColorPicker/dist/css/asColorPicker.min.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery-asGradient" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery-asGradient</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery-asGradient/dist/jquery-asGradient.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery-sessiontimeout" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery-sessiontimeout</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                       css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery-sessiontimeout/jquery.sessionTimeout.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery-steps" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery-steps</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery-steps/jquery.steps.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery-steps/build/jquery.steps.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jquery-validation" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jquery-validation</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jquery-validation/dist/jquery.validate.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jsgrid" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jsgrid</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jsgrid/dist/jsgrid.min.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jsgrid/dist/jsgrid.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="jvectormap" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">jvectormap</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jvectormap/jquery-jvectormap.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/jvectormap/jquery-jvectormap.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="magnific-popup" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">magnific-popup</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/magnific-popup/dist/magnific-popup.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="masonry-layout" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">masonry-layout</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/masonry-layout/dist/masonry.pkgd.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="moment" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">moment</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/moment/moment.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="morris.js" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">morris.js</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/morris.js/morris.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/morris.js/morris.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="nestable" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">nestable</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/nestable/jquery.nestable.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="perfect-scrollbar" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">perfect-scrollbar</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/perfect-scrollbar/js/perfect-scrollbar.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="pickadate" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">pickadate</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/pickadate/lib/themes/default.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/pickadate/lib/themes/default.date.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/pickadate/lib/themes/default.time.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/pickadate/lib/picker.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/pickadate/lib/picker.date.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/pickadate/lib/picker.time.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;

                                        </code>
                                    </pre>
                                </div>
                                <div id="popper.js" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">popper.js</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/popper.js/dist/popper.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="prism" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">prism</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/extra-libs/prism/prism.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/extra-libs/prism/prism.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="taskboard" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">taskboard</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/extra-libs/taskboard/css/lobilist.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/extra-libs/taskboard/css/jquery-ui.min.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/extra-libs/taskboard/js/lobilist.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/extra-libs/taskboard/js/lobibox.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/extra-libs/taskboard/js/task-init.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="treeview" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">treeview</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/extra-libs/treeview/dist/bootstrap-treeview.min.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/extra-libs/treeview/dist/bootstrap-treeview.init.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/extra-libs/treeview/dist/bootstrap-treeview.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="quill" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">quill</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/quill/dist/quill.snow.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/quill/dist/quill.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="raphael" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">raphael</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/raphael/raphael.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="select2" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">select2</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/select2/dist/css/select2.min.cssquot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/select2/dist/js/select2.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="summernote" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">summernote</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/summernote/dist/summernote.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/summernote/dist/summernote.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="sweetalert2" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">sweetalert2</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/sweetalert2/dist/sweetalert2.min.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/sweetalert2/sweet-alert.init.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/sweetalert2/dist/sweetalert2.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="tablesaw" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">tablesaw</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/tablesaw/dist/tablesaw.css&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/tablesaw/dist/tablesaw.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/tablesaw/dist/tablesaw-init.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="tinymce" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">tinymce</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/tinymce/tinymce.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;../../assets/libs/tinymce/jquery.tinymce.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                                <div id="typeahead.js" class="plugin-details p-10 border m-t-20">
                                    <h5 class="card-title">typeahead.js</h5>
                                    <h5>CSS Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        css not available
                                        </code>
                                    </pre>
                                    <h5>JavaScript Files</h5>
                                    <pre class="language-markup scrollable">
                                        <code>
                                        &lt;script src=&quot;../../assets/libs/typeahead.js/dist/typeahead.jquery.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card" id="page">
                            <div class="card-body">
                                <h3>Page Structure</h3>
                                <hr>
                                <p>Below code is used at the beginning of all HTML pages to detect Internet Explorer browser
                                    version and set a spesific class applied to Internet Explorer versions.</p>
                                <pre class="language-markup scrollable">
                                    <code  class="language-markup">
                                        &lt;!DOCTYPE html&gt;
                                        &lt;html lang=&quot;en&quot;&gt;

                                        &lt;head&gt;
                                            &lt;meta charset=&quot;utf-8&quot;&gt;
                                            &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt;
                                            &lt;!-- Tell the browser to be responsive to screen width --&gt;
                                            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
                                            &lt;meta name=&quot;description&quot; content=&quot;&quot;&gt;
                                            &lt;meta name=&quot;author&quot; content=&quot;&quot;&gt;
                                            &lt;!-- Favicon icon --&gt;
                                            &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; sizes=&quot;16x16&quot; href=&quot;../../assets/images/favicon.png&quot;&gt;
                                            &lt;title&gt;AdminBite admin Template - The Ultimate Multipurpose admin template&lt;/title&gt;
                                            &lt;!-- Custom CSS --&gt;
                                            &lt;link href=&quot;dist/css/style.css&quot; rel=&quot;stylesheet&quot;&gt;
                                            &lt;!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --&gt;
                                            &lt;!-- WARNING: Respond.js doesn't work if you view the page via file:// --&gt;
                                            &lt;!--[if lt IE 9]&gt;
                                            &lt;script src=&quot;https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js&quot;&gt;&lt;/script&gt;
                                            &lt;script src=&quot;https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js&quot;&gt;&lt;/script&gt;
                                        &lt;![endif]--&gt;
                                        &lt;/head&gt;
                                    </code>
                                </pre>
                                <hr>
                                <h4>Preloader (spinner)</h4>
                                <hr>
                                <p>This is for the loader when page load</p>
                                <pre class="language-markup scrollable">
                                    <code class="language-markup">
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- Preloader - style you can find in spinners.css --&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;div class=&quot;preloader&quot;&gt;
                                            &lt;div class=&quot;lds-ripple&quot;&gt;
                                                &lt;div class=&quot;lds-pos&quot;&gt;&lt;/div&gt;
                                                &lt;div class=&quot;lds-pos&quot;&gt;&lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- Preloader end --&gt;
                                        &lt;!-- ============================================================== --&gt;              
                                    </code>
                                </pre>
                                <hr>
                                <h4>Logo</h4>
                                <hr>
                                <p>This is for Brand identity means logo - we have separated logo icon and logo text both dark
                                    and light version you can upload </p>
                                <pre class="language-markup scrollable">
                                    <code class="language-markup">
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- Logo --&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;a class=&quot;navbar-brand&quot; href=&quot;index.html&quot;&gt;
                                            &lt;!-- Logo icon --&gt;
                                            &lt;b class=&quot;logo-icon&quot;&gt;
                                                &lt;!--You can put here icon as well // &lt;i class=&quot;wi wi-sunset&quot;&gt;&lt;/i&gt; //--&gt;
                                                &lt;!-- Dark Logo icon --&gt;
                                                &lt;img src=&quot;../../assets/images/logo-icon.png&quot; alt=&quot;homepage&quot; class=&quot;dark-logo&quot; /&gt;
                                                &lt;!-- Light Logo icon --&gt;
                                                &lt;img src=&quot;../../assets/images/logo-light-icon.png&quot; alt=&quot;homepage&quot; class=&quot;light-logo&quot; /&gt;
                                            &lt;/b&gt;
                                            &lt;!--End Logo icon --&gt;
                                            &lt;!-- Logo text --&gt;
                                            &lt;span class=&quot;logo-text&quot;&gt;
                                                 &lt;!-- dark Logo text --&gt;
                                                 &lt;img src=&quot;../../assets/images/logo-text.png&quot; alt=&quot;homepage&quot; class=&quot;dark-logo&quot; /&gt;
                                                 &lt;!-- Light Logo text --&gt;    
                                                 &lt;img src=&quot;../../assets/images/logo-light-text.png&quot; class=&quot;light-logo&quot; alt=&quot;homepage&quot; /&gt;
                                            &lt;/span&gt;
                                        &lt;/a&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- End Logo --&gt;
                                        &lt;!-- ============================================================== --&gt;                   
                                    </code>
                                </pre>
                                <hr>
                                <h4>Left Sidebar</h4>
                                <hr>
                                <p>We have created leftsidebar with the following code. </p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <pre class="language-markup scrollable">
                                            <code class="language-markup">
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;!-- Left Sidebar - style you can find in sidebar.scss  --&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;aside class=&quot;left-sidebar&quot;&gt;
                                                    &lt;!-- Sidebar scroll--&gt;
                                                    &lt;div class=&quot;scroll-sidebar&quot;&gt;
                                                        &lt;!-- Sidebar navigation--&gt;
                                                        &lt;nav class=&quot;sidebar-nav&quot;&gt;
                                                            &lt;ul id=&quot;sidebarnav&quot;&gt;
                                                                &lt;!-- User Profile--&gt;
                                                                &lt;li&gt;
                                                                    &lt;!-- User Profile--&gt;
                                                                    &lt;div class=&quot;user-profile d-flex no-block dropdown m-t-20&quot;&gt;
                                                                        &lt;div class=&quot;user-pic&quot;&gt;&lt;img src=&quot;../../assets/images/users/1.jpg&quot; alt=&quot;users&quot; class=&quot;rounded-circle&quot; width=&quot;40&quot; /&gt;&lt;/div&gt;
                                                                        &lt;div class=&quot;user-content hide-menu m-l-10&quot;&gt;
                                                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;&quot; id=&quot;Userdd&quot; role=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                                &lt;h5 class=&quot;m-b-0 user-name font-medium&quot;&gt;Steave Jobs &lt;i class=&quot;fa fa-angle-down&quot;&gt;&lt;/i&gt;&lt;/h5&gt;
                                                                                &lt;span class=&quot;op-5 user-email&quot;&gt;varun@gmail.com&lt;/span&gt;
                                                                            &lt;/a&gt;
                                                                            &lt;div class=&quot;dropdown-menu dropdown-menu-right&quot; aria-labelledby=&quot;Userdd&quot;&gt;
                                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;ti-user m-r-5 m-l-5&quot;&gt;&lt;/i&gt; My Profile&lt;/a&gt;
                                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;ti-wallet m-r-5 m-l-5&quot;&gt;&lt;/i&gt; My Balance&lt;/a&gt;
                                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;ti-email m-r-5 m-l-5&quot;&gt;&lt;/i&gt; Inbox&lt;/a&gt;
                                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;ti-settings m-r-5 m-l-5&quot;&gt;&lt;/i&gt; Account Setting&lt;/a&gt;
                                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;&lt;i class=&quot;fa fa-power-off m-r-5 m-l-5&quot;&gt;&lt;/i&gt; Logout&lt;/a&gt;
                                                                            &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;!-- End User Profile--&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;p-15 m-t-10&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;btn btn-block create-btn text-white no-block d-flex align-items-center&quot;&gt;&lt;i class=&quot;fa fa-plus-square&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu m-l-5&quot;&gt;Create New&lt;/span&gt; &lt;/a&gt;&lt;/li&gt;
                                                                &lt;!-- User Profile--&gt;
                                                                &lt;li class=&quot;nav-small-cap&quot;&gt;&lt;i class=&quot;ti-more-alt&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu&quot;&gt;Personal&lt;/span&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;icon-speedometer&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Dashboard &lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse  first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;index.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;far fa-circle&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Minimal &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-palette&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Ui Elements &lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-cards.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layers-alt&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Cards&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-buttons.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layout-menu&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Buttons&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-modals.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layout-slider-alt&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Modals&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-tab.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layout-tab-min&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Tab&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-tooltip-popover.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-pin2&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Tooltip &amp; Popover&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-notification.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-alert&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Notification&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-progressbar.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layout-list-post&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Progressbar&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-typography.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-more-alt&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Typography&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-bootstrap.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-rocket&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Bootstrap Ui&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-breadcrumb.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;icon-directions&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Breadcrumb&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-list-media.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;icon-grid&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; List Media&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-grid.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layout-grid3-alt&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Grid&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;ui-carousel.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layout-slider&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Carousel&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;nav-small-cap&quot;&gt;&lt;i class=&quot;ti-more-alt&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu&quot;&gt;Forms &amp; Tables&lt;/span&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-layout-media-right-alt&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Forms&lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;form-basic.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-file&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Basic Forms&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;form-layout.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-files&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Form Layouts&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;form-validation.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;icon-info&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Form Validation&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;form-elements.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layers&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Form Elements&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-layout-accordion-merged&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Tables&lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;table-basic.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-widgetized&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Basic Tables&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;nav-small-cap&quot;&gt;&lt;i class=&quot;ti-more-alt&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu&quot;&gt;Sample Pages&lt;/span&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-files&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Sample Pages &lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;starter-kit.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-layout-width-default&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu&quot;&gt;Starter Kit&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-id-badge&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Authentication&lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;pages-login.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-shift-left&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Login &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;pages-register.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-marker-alt&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Register&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;pages-lockscreen.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;icon-lock&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Lockscreen&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;pages-recover-password.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;icon-lock-open&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Recover password&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-pie-chart&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Charts&lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;chart-morris.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-stats-up&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Morris Chart&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;chart-chart-js.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;mdi mdi-chart-areaspline&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Chartjs&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;chart-sparkline.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;icon-graph&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Sparkline Chart&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;chart-chartist.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-stats-down&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Chartis Chart&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-light-bulb&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Icons&lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;icon-material.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;icon-social-reddit&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu&quot;&gt; Material Icons &lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;icon-fontawesome.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-github&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Fontawesome Icons&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;icon-themify.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-themify-logo&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Themify Icons&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;icon-weather.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-shine&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Weather Icons&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;icon-simple-lineicon.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;icon-emotsmile&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu&quot;&gt; Simple Line icons&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;icon-flag.html&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-flag&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; Flag Icons&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link has-arrow waves-effect waves-dark&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-align-left&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Multi level dd&lt;/span&gt;&lt;/a&gt;
                                                                    &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse first-level&quot;&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-align-left&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; item 1.1&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-align-left&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; item 1.2&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;has-arrow sidebar-link&quot; href=&quot;javascript:void(0)&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-align-left&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu&quot;&gt;Menu 1.3&lt;/span&gt;&lt;/a&gt;
                                                                            &lt;ul aria-expanded=&quot;false&quot; class=&quot;collapse second-level&quot;&gt;
                                                                                &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-list-ol&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; item 1.3.1&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-list-ol&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; item 1.3.2&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-list-ol&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; item 1.3.3&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                                &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-list-ol&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; item 1.3.4&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li class=&quot;sidebar-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-link&quot;&gt;&lt;i class=&quot;ti-align-left&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt; item 1.4&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;nav-small-cap&quot;&gt;&lt;i class=&quot;ti-more-alt&quot;&gt;&lt;/i&gt; &lt;span class=&quot;hide-menu&quot;&gt;Extra&lt;/span&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link waves-effect waves-dark sidebar-link&quot; href=&quot;../documentation/documentation.html&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;ti-pencil-alt&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Documentation&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;sidebar-item&quot;&gt; &lt;a class=&quot;sidebar-link waves-effect waves-dark sidebar-link&quot; href=&quot;pages-login.html&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;far fa-circle&quot;&gt;&lt;/i&gt;&lt;span class=&quot;hide-menu&quot;&gt;Log Out&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
                                                        &lt;!-- End Sidebar navigation --&gt;
                                                    &lt;/div&gt;
                                                    &lt;!-- End Sidebar scroll--&gt;
                                                &lt;/aside&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;!-- End Left Sidebar - style you can find in sidebar.scss  --&gt;
                                                &lt;!-- ============================================================== --&gt;
                                            </code>
                                        </pre> </div>
                                </div>
                                <hr>
                                <h4>Page Content, Right Sidebar and Footer</h4>
                                <hr>
                                <p>Below is the code for the page content wrapper, you can start your content here </p>
                                <pre class="language-markup scrollable" style="height:500px;">
                                    <code class="language-markup">
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- Page wrapper  --&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;div class=&quot;page-wrapper&quot;&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;!-- Bread crumb and right sidebar toggle --&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;div class=&quot;page-breadcrumb&quot;&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-5 align-self-center&quot;&gt;
                                                        &lt;h4 class=&quot;page-title&quot;&gt;Starter Page&lt;/h4&gt;
                                                        &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                                                            &lt;nav aria-label=&quot;breadcrumb&quot;&gt;
                                                                &lt;ol class=&quot;breadcrumb&quot;&gt;
                                                                    &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li class=&quot;breadcrumb-item active&quot; aria-current=&quot;page&quot;&gt;Library&lt;/li&gt;
                                                                &lt;/ol&gt;
                                                            &lt;/nav&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col-7 align-self-center&quot;&gt;
                                                        &lt;div class=&quot;d-flex no-block justify-content-end align-items-center&quot;&gt;
                                                            &lt;div class=&quot;m-r-10&quot;&gt;
                                                                &lt;div class=&quot;lastmonth&quot;&gt;&lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;&quot;&gt;&lt;small&gt;LAST MONTH&lt;/small&gt;
                                                                &lt;h4 class=&quot;text-info m-b-0 font-medium&quot;&gt;$58,256&lt;/h4&gt;&lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;!-- End Bread crumb and right sidebar toggle --&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;!-- Container fluid  --&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;div class=&quot;container-fluid&quot;&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;!-- Start Page Content --&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;div class=&quot;card&quot;&gt;
                                                            &lt;div class=&quot;card-body&quot;&gt;
                                                                This is some text within a card block.

                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;!-- End PAge Content --&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;!-- Right sidebar --&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;!-- .right-sidebar --&gt;
                                                &lt;!-- ============================================================== --&gt;
                                                &lt;!-- End Right sidebar --&gt;
                                                &lt;!-- ============================================================== --&gt;
                                            &lt;/div&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;!-- End Container fluid  --&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;!-- footer --&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;footer class=&quot;footer&quot;&gt;
                                                &copy; 2019 Eliteadmin by themedesigner.in
                                            &lt;/footer&gt;
                                            &lt;!-- ============================================================== --&gt;
                                            &lt;!-- End footer --&gt;
                                            &lt;!-- ============================================================== --&gt;
                                        &lt;/div&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- End Page wrapper  --&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- End Wrapper --&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;!-- customizer Panel --&gt;
                                        &lt;!-- ============================================================== --&gt;
                                        &lt;aside class=&quot;customizer&quot;&gt;
                                            &lt;a href=&quot;javascript:void(0)&quot; class=&quot;service-panel-toggle&quot;&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                            &lt;div class=&quot;customizer-body&quot;&gt;
                                                &lt;ul class=&quot;nav customizer-tab&quot; role=&quot;tablist&quot;&gt;
                                                    &lt;li class=&quot;nav-item&quot;&gt;
                                                        &lt;a class=&quot;nav-link active&quot; id=&quot;pills-home-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-home&quot; role=&quot;tab&quot; aria-controls=&quot;pills-home&quot; aria-selected=&quot;true&quot;&gt;&lt;i class=&quot;mdi mdi-wrench font-20&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li class=&quot;nav-item&quot;&gt;
                                                        &lt;a class=&quot;nav-link&quot; id=&quot;pills-profile-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-profile&quot; role=&quot;tab&quot; aria-controls=&quot;pills-profile&quot; aria-selected=&quot;false&quot;&gt;&lt;i class=&quot;mdi mdi-message-reply font-20&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li class=&quot;nav-item&quot;&gt;
                                                        &lt;a class=&quot;nav-link&quot; id=&quot;pills-contact-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-contact&quot; role=&quot;tab&quot; aria-controls=&quot;pills-contact&quot; aria-selected=&quot;false&quot;&gt;&lt;i class=&quot;mdi mdi-star-circle font-20&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                                &lt;div class=&quot;tab-content&quot; id=&quot;pills-tabContent&quot;&gt;
                                                    &lt;!-- Tab 1 --&gt;
                                                    &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;pills-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-home-tab&quot;&gt;
                                                        &lt;div class=&quot;p-15 border-bottom&quot;&gt;
                                                            &lt;!-- Sidebar --&gt;
                                                            &lt;h5 class=&quot;font-medium m-b-10 m-t-10&quot;&gt;Layout Settings&lt;/h5&gt;
                                                            &lt;div class=&quot;custom-control custom-checkbox m-t-10&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; name=&quot;theme-view&quot; id=&quot;theme-view&quot;&gt;
                                                                &lt;label class=&quot;custom-control-label&quot; for=&quot;theme-view&quot;&gt;Dark Theme&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;custom-control custom-checkbox m-t-10&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input sidebartoggler&quot; name=&quot;collapssidebar&quot; id=&quot;collapssidebar&quot;&gt;
                                                                &lt;label class=&quot;custom-control-label&quot; for=&quot;collapssidebar&quot;&gt;Collapse Sidebar&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;custom-control custom-checkbox m-t-10&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; name=&quot;sidebar-position&quot; id=&quot;sidebar-position&quot;&gt;
                                                                &lt;label class=&quot;custom-control-label&quot; for=&quot;sidebar-position&quot;&gt;Fixed Sidebar&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;custom-control custom-checkbox m-t-10&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; name=&quot;header-position&quot; id=&quot;header-position&quot;&gt;
                                                                &lt;label class=&quot;custom-control-label&quot; for=&quot;header-position&quot;&gt;Fixed Header&lt;/label&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;custom-control custom-checkbox m-t-10&quot;&gt;
                                                                &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; name=&quot;boxed-layout&quot; id=&quot;boxed-layout&quot;&gt;
                                                                &lt;label class=&quot;custom-control-label&quot; for=&quot;boxed-layout&quot;&gt;Boxed Layout&lt;/label&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;p-15 border-bottom&quot;&gt;
                                                            &lt;!-- Logo BG --&gt;
                                                            &lt;h5 class=&quot;font-medium m-b-10 m-t-10&quot;&gt;Logo Backgrounds&lt;/h5&gt;
                                                            &lt;ul class=&quot;theme-color&quot;&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-logobg=&quot;skin1&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-logobg=&quot;skin2&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-logobg=&quot;skin3&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-logobg=&quot;skin4&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-logobg=&quot;skin5&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-logobg=&quot;skin6&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                            &lt;!-- Logo BG --&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;p-15 border-bottom&quot;&gt;
                                                            &lt;!-- Navbar BG --&gt;
                                                            &lt;h5 class=&quot;font-medium m-b-10 m-t-10&quot;&gt;Navbar Backgrounds&lt;/h5&gt;
                                                            &lt;ul class=&quot;theme-color&quot;&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-navbarbg=&quot;skin1&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-navbarbg=&quot;skin2&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-navbarbg=&quot;skin3&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-navbarbg=&quot;skin4&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-navbarbg=&quot;skin5&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-navbarbg=&quot;skin6&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                            &lt;!-- Navbar BG --&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;p-15 border-bottom&quot;&gt;
                                                            &lt;!-- Logo BG --&gt;
                                                            &lt;h5 class=&quot;font-medium m-b-10 m-t-10&quot;&gt;Sidebar Backgrounds&lt;/h5&gt;
                                                            &lt;ul class=&quot;theme-color&quot;&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-sidebarbg=&quot;skin1&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-sidebarbg=&quot;skin2&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-sidebarbg=&quot;skin3&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-sidebarbg=&quot;skin4&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-sidebarbg=&quot;skin5&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;theme-item&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; class=&quot;theme-link&quot; data-sidebarbg=&quot;skin6&quot;&gt;&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                            &lt;!-- Logo BG --&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;!-- End Tab 1 --&gt;
                                                    &lt;!-- Tab 2 --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-profile-tab&quot;&gt;2&lt;/div&gt;
                                                    &lt;!-- End Tab 2 --&gt;
                                                    &lt;!-- Tab 3 --&gt;
                                                    &lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-contact&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-contact-tab&quot;&gt;3&lt;/div&gt;
                                                    &lt;!-- End Tab 3 --&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/aside&gt;             
                                    </code>
                                </pre> </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="customjs">
                            <div class="card-body">
                                <h3>Settings in custom js</h3>
                                <hr>
                                <p>Below js code is used for theme setting , fix header , toggle sidebar and right sidebar open
                                    close.
                                </p>
                                <pre class="language-javascript scrollable">
                                    <code class="language-javascript">
                                        // this is for close icon when navigation open in mobile view
                                        $(&quot;.nav-toggler&quot;).on('click', function() {
                                            $(&quot;#main-wrapper&quot;).toggleClass(&quot;show-sidebar&quot;);
                                            $(&quot;.nav-toggler i&quot;).toggleClass(&quot;ti-menu&quot;);
                                        });
                                        $(&quot;.nav-lock&quot;).on('click', function() {
                                            $(&quot;body&quot;).toggleClass(&quot;lock-nav&quot;);
                                            $(&quot;.nav-lock i&quot;).toggleClass(&quot;mdi-toggle-switch-off&quot;);
                                            $(&quot;body, .page-wrapper&quot;).trigger(&quot;resize&quot;);
                                        });
                                        $(&quot;.search-box a, .search-box .app-search .srh-btn&quot;).on('click', function() {
                                            $(&quot;.app-search&quot;).toggle(200);
                                            $(&quot;.app-search input&quot;).focus();
                                        });

                                        // ============================================================== 
                                        // Right sidebar options
                                        // ==============================================================
                                        $(function() {
                                            $(&quot;.service-panel-toggle&quot;).on('click', function() {
                                               $(&quot;.customizer&quot;).toggleClass('show-service-panel');

                                            });
                                            $('.page-wrapper').on('click', function() {
                                                $(&quot;.customizer&quot;).removeClass('show-service-panel');
                                            });
                                        });    
                                    </code>
                                </pre>
                                <hr> </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="fonts">
                            <div class="card-body">
                                <h3>How to change Font Family</h3>
                                <hr>
                                <p>You can change fonts globally as per your requirements, for that need to change in variable.scss
                                    file. you will find these file from here:</p>
                                <pre class="language-css">
                                    <code>
                                        src/scss/variable.scss
                                    </code>
                                </pre>
                                <p>We have used google fonts for the template you can change whatever font you wish</p>
                                <pre class="language-css scrollable">
                                    <code class="language-css">
                                        // Variables
                                        $font-family-sans-serif:      'Popins', sans-serif !default;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="scss">
                            <div class="card-body">
                                <h3>scss & css</h3>
                                <hr>
                                <p>Our Template is based on scss and we import all the file into style.css you can simply edit
                                    any scss and compile it</p>
                                <pre class="language-css scrollable">
                                    <code class="language-css">
                                        @import 'variable';

                                        //Theme colors

                                        @import 'theme-colors/dark-theme';

                                        // Import Bootstrap source files
                                        @import &quot;bootstrap/bootstrap&quot;;


                                        //This is for the components
                                        @import 'components'; 

                                        @import 'pages';   
                                        //This is for the widgets
                                        @import 'widgets/widgets';

                                        //This is for the responsive 
                                        @import 'responsive';   

                                        //In This scss you can write your scss
                                        @import 'custom'; 

                                        //This is for the icons

                                        @import 'icons/font-awesome/css/fontawesome-all.css';
                                        @import 'icons/simple-line-icons/css/simple-line-icons.css';
                                        @import 'icons/weather-icons/css/weather-icons.min.css';
                                        @import 'icons/themify-icons/themify-icons.css'; 
                                        @import 'icons/flag-icon-css/flag-icon.min.css';  
                                        @import &quot;icons/material-design-iconic-font/css/materialdesignicons.min.css&quot;;    

                                    </code>
                                </pre>
                                <div class="alert alert-info"> Note: we recomonded you to please make your one own css and one own js files and add that
                                    in your page, so whenever the update of AdminBite admin comes it does not affect your
                                    code. </div>
                            </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="ui-content">
                            <div class="card-body">
                                <h3>Grid Options </h3>
                                <hr>
                                <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.
                                    check the
                                    <a href="https://v4-alpha.getbootstrap.com/layout/grid/">official website grid page</a>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center"> Extra small
                                                    <br>
                                                    <small>&lt;576px</small>
                                                </th>
                                                <th class="text-center"> Small
                                                    <br>
                                                    <small>≥576px</small>
                                                </th>
                                                <th class="text-center"> Medium
                                                    <br>
                                                    <small>≥768px</small>
                                                </th>
                                                <th class="text-center"> Large
                                                    <br>
                                                    <small>≥992px</small>
                                                </th>
                                                <th class="text-center"> Extra large
                                                    <br>
                                                    <small>≥1200px</small>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Grid behavior</th>
                                                <td>Horizontal at all times</td>
                                                <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Max container width</th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td>
                                                    <code>.col-</code>
                                                </td>
                                                <td>
                                                    <code>.col-sm-</code>
                                                </td>
                                                <td>
                                                    <code>.col-md-</code>
                                                </td>
                                                <td>
                                                    <code>.col-lg-</code>
                                                </td>
                                                <td>
                                                    <code>.col-xl-</code>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="5">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="5">30px (15px on each side of a column)</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Nestable</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Offsets</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Column ordering</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint
                                    sizes, and override grid classes targeted at smaller devices. Therefore, applying any
                                    <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large
                                    devices if a
                                    <code>.col-lg-</code> class is not present.</p>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card" id="ui-card">
                            <div class="card-body">
                                <h3>Card</h3>
                                <hr>
                                <p>Below is the basic card structure.</p>
                                <pre class="language-markup scrollable" style="height:500px;">
                                    <code class="language-markup">
                                        &lt;div class="card"&gt;
                                            &lt;div class="card-header"&gt;
                                                Title
                                                &lt;div class="card-actions"&gt;
                                                    &lt;a class="" data-action="collapse"&gt;&lt;i class="ti-minus"&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;a class="btn-minimize" data-action="expand"&gt;&lt;i class="mdi mdi-arrow-expand"&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;a class="btn-close" data-action="close"&gt;&lt;i class="ti-close"&gt;&lt;/i&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class="card-body collapse show"&gt;
                                                &lt;h4 class="card-title"&gt;Special title treatment&lt;/h4&gt;
                                                &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                                &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                                &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                                &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                                &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                                &lt;p class="card-text"&gt;With supporting text below as a natural lead-in to additional content.&lt;/p&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> </div>
                        </div>
                        <div class="card" id="ui-icons">
                            <div class="card-body">
                                <h3>Icons</h3>
                                <hr>
                                <p>Below is the table of icon fonts used in this template.</p>
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">Icon Name</th>
                                            <th>Example</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Font-awesome</td>
                                            <td>
                                                <code>&lt;i class="fa fa-icon-name"&gt;&lt;/i&gt; </code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Material Icons</td>
                                            <td>
                                                <code>&lt;i class="mdi mdi-icon-name"&gt;&lt;/i&gt; </code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Simple Line Icons</td>
                                            <td>
                                                <code>&lt;i class="icon-name_of_icon"&gt;&lt;/i&gt; </code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Themify Icons</td>
                                            <td>
                                                <code>&lt;i class="ti-icon-name"&gt;&lt;/i&gt; </code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Weather Icons</td>
                                            <td>
                                                <code>&lt;i class="wi wi-icon-name"&gt;&lt;/i&gt; </code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flag Icons</td>
                                            <td>
                                                <code>&lt;i class="flag-icon flsg-icon-country-name"&gt;&lt;/i&gt; </code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card" id="ui-button">
                            <div class="card-body">
                                <h3>Buttons</h3>
                                <hr>
                                <p>Below is the general buttons.</p>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-primary">Primary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Secondary</button>
                                    <button type="button" class="btn waves-effect waves-light btn-success">Success</button>
                                    <button type="button" class="btn waves-effect waves-light btn-info">Info</button>
                                    <button type="button" class="btn waves-effect waves-light btn-warning">Warning</button>
                                    <button type="button" class="btn waves-effect waves-light btn-danger">Danger</button>
                                </div>
                                <pre class="language-markup scrollable">
                                    <code class="language-markup">
                                        &lt;div class="button-group"&gt;
                                            &lt;button type="button" class="btn waves-effect waves-light btn-primary"&gt;Primary&lt;/button&gt;
                                            &lt;button type="button" class="btn waves-effect waves-light btn-secondary"&gt;Secondary&lt;/button&gt;
                                            &lt;button type="button" class="btn waves-effect waves-light btn-success"&gt;Success&lt;/button&gt;
                                            &lt;button type="button" class="btn waves-effect waves-light btn-info"&gt;Info&lt;/button&gt;
                                            &lt;button type="button" class="btn waves-effect waves-light btn-warning"&gt;Warning&lt;/button&gt;
                                            &lt;button type="button" class="btn waves-effect waves-light btn-danger"&gt;Danger&lt;/button&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre> </div>
                        </div>
                        <div class="card" id="ui-chart">
                            <div class="card-body">
                                <h3>Charts</h3>
                                <hr>
                                <p>Below is the table of pages which includes charts and where you can find the script related
                                    to it.</p>
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">Page</th>
                                            <th>Where to find it's JS</th>
                                            <th>Where to find it's CSS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>chart-morris.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/libs/morris.js/morris.min.js</code>
                                            </td>
                                            <td>
                                                <code>../../assets/libs/morris.js/morris.css</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>chart-chart-js.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/libs/Chart.js/dist/Chart.min.js</code>
                                            </td>
                                            <td>
                                                <code>No CSS Available</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>chart-sparkline.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/sparkline/sparkline.js</code>
                                            </td>
                                            <td>
                                                <code>No CSS Available</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>chart-chartist.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/libs/chartist/dist/chartist.min.js</code>
                                            </td>
                                            <td>
                                                <code>../../assets/libs/chartist/dist/chartist.min.css</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>chart-knob.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/knob/jquery.knob.min.js</code>
                                            </td>
                                            <td>
                                                <code>No CSS Available</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>c3-chart-axis.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/c3/c3.min.js</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/c3/c3.min.css</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>c3-chart-bar.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/c3/c3.min.js</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/c3/c3.min.css</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>c3-chart-line.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/c3/c3.min.js</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/c3/c3.min.css</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>c3-chart-data.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/c3/c3.min.js</code>
                                            </td>
                                            <td>
                                                <code>../../assets/extra-libs/c3/c3.min.css</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>chart-echart-basic.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/libs/echarts/dist/echarts-en.min.js</code>
                                            </td>
                                            <td>
                                                <code>No CSS Available</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>chart-echart-bar.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/libs/echarts/dist/echarts-en.min.js</code>
                                            </td>
                                            <td>
                                                <code>No CSS Available</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>chart-echart-pie-doughnut.html</code>
                                            </td>
                                            <td>
                                                <code>../../assets/libs/echarts/dist/echarts-en.min.js</code>
                                            </td>
                                            <td>
                                                <code>No CSS Available</code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card" id="ui-form">
                            <div class="card-body">
                                <h3>Form</h3>
                                <hr>
                                <p>Below is the basic form structure.</p>
                                <pre class="language-markup scrollable" style="height:500px;">
                                    <code class="language-markup">
                                        &lt;form&gt;
                                            &lt;div class="form-group"&gt;
                                                &lt;label for="exampleInputEmail1"&gt;User Name&lt;/label&gt;
                                                &lt;input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username"&gt;
                                            &lt;/div&gt;
                                            &lt;div class="form-group"&gt;
                                                &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
                                                &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"&gt;
                                            &lt;/div&gt;
                                            &lt;div class="form-group"&gt;
                                                &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                                                &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
                                            &lt;/div&gt;
                                            &lt;div class="form-group"&gt;
                                                &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
                                                &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password"&gt;
                                            &lt;/div&gt;
                                            &lt;div class="form-group"&gt;
                                                &lt;div class="checkbox checkbox-success"&gt;
                                                    &lt;input id="checkbox1" type="checkbox"&gt;
                                                    &lt;label for="checkbox1"&gt; Remember me &lt;/label&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;button type="submit" class="btn btn-success waves-effect waves-light m-r-10"&gt;Submit&lt;/button&gt;
                                            &lt;button type="submit" class="btn btn-dark waves-effect waves-light"&gt;Cancel&lt;/button&gt;
                                        &lt;/form&gt;
                                    </code>
                                </pre> </div>
                        </div>
                        <!-- card -->
                        <div class="card" id="ui-table">
                            <div class="card-body">
                                <h3>Table</h3>
                                <hr>
                                <p>Below is the basic table structure.</p>
                                <pre class="language-markup scrollable" style="height:500px;">
                                    <code class="language-markup">
                                        &lt;table class="table"&gt;
                                            &lt;thead&gt;
                                                &lt;tr&gt;
                                                    &lt;th&gt;#&lt;/th&gt;
                                                    &lt;th&gt;First Name&lt;/th&gt;
                                                    &lt;th&gt;Last Name&lt;/th&gt;
                                                    &lt;th&gt;Username&lt;/th&gt;
                                                    &lt;th&gt;Role&lt;/th&gt;
                                                &lt;/tr&gt;
                                            &lt;/thead&gt;
                                            &lt;tbody&gt;
                                                &lt;tr&gt;
                                                    &lt;td&gt;1&lt;/td&gt;
                                                    &lt;td&gt;Deshmukh&lt;/td&gt;
                                                    &lt;td&gt;Prohaska&lt;/td&gt;
                                                    &lt;td&gt;@Genelia&lt;/td&gt;
                                                    &lt;td&gt;&lt;span class="label label-danger"&gt;admin&lt;/span&gt; &lt;/td&gt;
                                                &lt;/tr&gt;
                                                &lt;tr&gt;
                                                    &lt;td&gt;2&lt;/td&gt;
                                                    &lt;td&gt;Deshmukh&lt;/td&gt;
                                                    &lt;td&gt;Gaylord&lt;/td&gt;
                                                    &lt;td&gt;@Ritesh&lt;/td&gt;
                                                    &lt;td&gt;&lt;span class="label label-info"&gt;member&lt;/span&gt; &lt;/td&gt;
                                                &lt;/tr&gt;
                                                &lt;tr&gt;
                                                    &lt;td&gt;3&lt;/td&gt;
                                                    &lt;td&gt;Sanghani&lt;/td&gt;
                                                    &lt;td&gt;Gusikowski&lt;/td&gt;
                                                    &lt;td&gt;@Govinda&lt;/td&gt;
                                                    &lt;td&gt;&lt;span class="label label-warning"&gt;developer&lt;/span&gt; &lt;/td&gt;
                                                &lt;/tr&gt;
                                                &lt;tr&gt;
                                                    &lt;td&gt;4&lt;/td&gt;
                                                    &lt;td&gt;Roshan&lt;/td&gt;
                                                    &lt;td&gt;Rogahn&lt;/td&gt;
                                                    &lt;td&gt;@Hritik&lt;/td&gt;
                                                    &lt;td&gt;&lt;span class="label label-success"&gt;supporter&lt;/span&gt; &lt;/td&gt;
                                                &lt;/tr&gt;
                                                &lt;tr&gt;
                                                    &lt;td&gt;5&lt;/td&gt;
                                                    &lt;td&gt;Joshi&lt;/td&gt;
                                                    &lt;td&gt;Hickle&lt;/td&gt;
                                                    &lt;td&gt;@Maruti&lt;/td&gt;
                                                    &lt;td&gt;&lt;span class="label label-info"&gt;member&lt;/span&gt; &lt;/td&gt;
                                                &lt;/tr&gt;
                                                &lt;tr&gt;
                                                    &lt;td&gt;6&lt;/td&gt;
                                                    &lt;td&gt;Nigam&lt;/td&gt;
                                                    &lt;td&gt;Eichmann&lt;/td&gt;
                                                    &lt;td&gt;@Sonu&lt;/td&gt;
                                                    &lt;td&gt;&lt;span class="label label-success"&gt;supporter&lt;/span&gt; &lt;/td&gt;
                                                &lt;/tr&gt;
                                            &lt;/tbody&gt;
                                        &lt;/table&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card" id="js">
                            <div class="card-body">
                                <h3>Js Files</h3>
                                <hr>
                                <table class="table table-bordered m-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%;">File</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <code>custom.js, custom.min.js</code> </td>
                                            <td> This is a main function js file. it contain sidebar and other basic js</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>sidebarmenu.js</code> </td>
                                            <td> This file contains sidebarnavigation js</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>app.js</code> </td>
                                            <td>This is for setting plugin for the theme customizer.</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>app.init.js</code> </td>
                                            <td> You can modify the settings though this.</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>app-style-switcher.js</code> </td>
                                            <td> It contains the customizer functions apply to the theme by clicking on customizer
                                                panel.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>app.init.horizontal.js</code> </td>
                                            <td> You can modify the settings of horizontal demo.</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>app-style-switcher.horizontal.js</code> </td>
                                            <td> It contains the customizer functions apply to the horizontal theme by clicking
                                                on customizer panel.</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>waves.js</code> </td>
                                            <td> This is for wave effects on buttons and other elements</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>perfect-scrollbar.jquery.min.js</code> </td>
                                            <td> This is for scroll.</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <code>dashboard1.js</code> to
                                                <code>dashboard10.js</code> </td>
                                            <td> This is for all dashboards setting.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="credits">
                            <div class="card-body">
                                <h3>Credits to the third party Plugins</h3>
                                <hr>
                                <p>For more details (customizations) you can find third party app from here:</p>
                                <div class="row">
                                    <div class="col md-4">
                                        <ul class="common">
                                            <li>
                                                <a href="http://getbootstrap.com/">Bootstrap</a>
                                            </li>
                                            <li>
                                                <a href="https://jquery.com/">Jquery</a>
                                            </li>
                                            <li>
                                                <a href="http://fortawesome.github.io/Font-Awesome/">Font-Awesome</a>
                                            </li>
                                            <li>
                                                <a href="http://morrisjs.github.io/morris.js/">Morris</a>
                                            </li>
                                            <li>
                                                <a href="http://chartjs.org/">Chartjs</a>
                                            </li>
                                            <li>
                                                <a href="http://c3js.org/">C3 charts</a>
                                            </li>
                                            <li>
                                                <a href="http://omnipotent.net/jquery.sparkline/">Sparkline</a>
                                            </li>
                                            <li>
                                                <a href="https://themify.me/themify-icons">Themify-icons</a>
                                            </li>
                                            <li>
                                                <a href="https://erikflowers.github.io/weather-icons/"> Weather icons</a>
                                            </li>
                                            <li>
                                                <a href="https://gionkunz.github.io/chartist-js/"> Chartist chart</a>
                                            </li>
                                            <li>
                                                <a href="http://prismjs.com/"> Prism</a>
                                            </li>
                                            <li>
                                                <a href="http://tristanedwards.me/sweetalert">Sweet-Alert</a>
                                            </li>
                                            <li>
                                                <a href="http://dbushell.com/">Nestable</a>
                                            </li>
                                            <li>
                                                <a href="http://areaaperta.com/nicescroll/">Nicescroll</a>
                                            </li>
                                            <li>
                                                <a href="http://arshaw.com/fullcalendar/">Full Calendar</a>
                                            </li>
                                            <li>
                                                <a href="http://jqueryvalidation.org/">Form Validator</a>
                                            </li>
                                            <li>
                                                <a href="https://hpneo.github.io/gmaps/">Gmaps</a>
                                            </li>
                                            <li>
                                                <a href="http://jqvmap.com">Vector Maps</a>
                                            </li>
                                            <li>
                                                <a href="https://pexels.com/">Pexels (images)</a>
                                            </li>
                                            <li>
                                                <a href="https://erikflowers.github.io/weather-icons/"> Weather icons</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/abpetkov/switchery"> Switchery</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="common">
                                            <li>
                                                <a href="http://jdewit.github.com/bootstrap-timepicker">Bootstrap-timepicker</a>
                                            </li>
                                            <li>
                                                <a href="https://bootstrap-datepicker.readthedocs.io/en/stable/">Bootstrap-datepicker</a>
                                            </li>
                                            <li>
                                                <a href="http://www.daterangepicker.com/">Bootstrap-date-range-picker</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/T00rk/bootstrap-material-datetimepicker">Bootstrap-material-datetimepicker</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/jonmiles/bootstrap-datepaginator">Date-paginator</a>
                                            </li>
                                            <li>
                                                <a href="http://www.eyecon.ro/bootstrap-colorpicker">Bootstrap Colorpicker</a>
                                            </li>
                                            <li>
                                                <a href="http://loudev.com/">Multi-select</a>
                                            </li>
                                            <li>
                                                <a href="https://select2.github.io/">Select2</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/JeremyFagis/dropify">Dropify</a>
                                            </li>
                                            <li>
                                                <a href="http://www.dropzonejs.com">Dropzone</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/xing/wysihtml5">Wysihtml5</a>
                                            </li>
                                            <li>
                                                <a href="https://www.datatables.net">Datatables</a>
                                            </li>
                                            <li>
                                                <a href="http://morrisjs.github.io/morris.js/">Morris</a>
                                            </li>
                                            <li>
                                                <a href="http://chartjs.org/">Chartjs</a>
                                            </li>
                                            <li>
                                                <a href="http://c3js.org/">C3 charts</a>
                                            </li>
                                            <li>
                                                <a href="http://omnipotent.net/jquery.sparkline/">Sparkline</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/fengyuanchen/cropper">Image Cropper</a>
                                            </li>
                                            <li>
                                                <a href="http://www.flotcharts.org/">Flot-charts</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/dixso/custombox"> Custombox</a>
                                            </li>
                                            <li>
                                                <a href="http://owlgraphic.com/owlcarousel/"> Owl carousel</a>
                                            </li>
                                            <li>
                                                <a href="https://themify.me/themify-icons">Themify-icons</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="common">
                                            <li>
                                                <a href="https://github.com/silviomoreto/bootstrap-select"> Bootstrap select</a>
                                            </li>
                                            <li>
                                                <a href="http://bootstrapswitch.com/"> Bootstrap switch</a>
                                            </li>
                                            <li>
                                                <a href="https://www.virtuosoft.eu/code/bootstrap-touchspin/"> Bootstrap Touchspin</a>
                                            </li>
                                            <li>
                                                <a href="http://www.tinymce.com/">Wysiwig Editor</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/wenzhixin/bootstrap-table-examples"> Bootstrap tables</a>
                                            </li>
                                            <li>
                                                <a href="https://gionkunz.github.io/chartist-js/"> Chartist chart</a>
                                            </li>
                                            <li>
                                                <a href="http://malsup.com/jquery/block/"> Jquery Block UI</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/ashleydw/lightbox"> Fancybox</a>
                                            </li>
                                            <li>
                                                <a href="http://fooplugins.com/plugins/footable-jquery/"> Footable</a>
                                            </li>
                                            <li>
                                                <a href="https://isotope.metafizzy.co/"> Gallery</a>
                                            </li>
                                            <li>
                                                <a href="http://gridstackjs.com/"> Gridstack</a>
                                            </li>
                                            <li>
                                                <a href="http://imsky.github.io/holder"> Holderjs</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/xing/wysihtml5"> Html5 Editor</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/fronteed/iCheck/"> Icheck Control</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/IonDen/ion.rangeSlider"> Ion range slider</a>
                                            </li>
                                            <li>
                                                <a href="http://www.jquery-steps.com"> Jquery Steps</a>
                                            </li>
                                            <li>
                                                <a href="http://dimsemenov.com/plugins/magnific-popup/"> Magnific Popup</a>
                                            </li>
                                            <li>
                                                <a href="http://prismjs.com/"> Prism</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/filamentgroup/tablesaw"> Tablesaw</a>
                                            </li>
                                            <li>
                                                <a href="http://github.com/vitalets/x-editable"> X-editable</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/imakewebthings/waypoints/"> Waypoints</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/twitter/typeahead.js"> Typehead js</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="support">
                            <div class="card-body">
                                <h3>Free support</h3>
                                <hr>
                                <p>If you have any type of query or support needed, please open a support ticket here:
                                    <a href="https://wrappixel.com/support/">wrappixel.com/support/</a>
                                </p>
                            </div>
                        </div>
                        <!-- card -->
                        <!-- card -->
                        <div class="card" id="thanks">
                            <div class="card-body">
                                <div class="display-5 text-center text-success"> Thank you </div>
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2019 AdminBite admin by wrappixel.com </footer>
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../dist/js/app.js"></script>
    <script src="../dist/js/app.init.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../assets/extra-libs/prism/prism.js"></script>
    <script src="../dist/js/custom.min.js"></script>
    <script>
        $('#sidebarnav a').click(function () {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 85
            }, 500);
            return false;
        });
        var lastId, topMenu = $("#sidebarnav"),
            topMenuHeight = topMenu.outerHeight(),
            menuItems = topMenu.find("a"),
            scrollItems = menuItems.map(function () {
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });
        $(window).scroll(function () {
            var fromTop = $(this).scrollTop() + topMenuHeight - 85;
            var cur = scrollItems.map(function () {
                if ($(this).offset().top < fromTop) return this;
            });
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
            if (lastId !== id) {
                lastId = id;
                menuItems.removeClass("active").filter("[href='#" + id + "']").addClass("active");
            }
        });
    </script>
</body>

</html>