<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VP.Mojokerto</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/nalika/img/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('assets/nalika/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/nalika-icon.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/owl.carousel.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/owl.theme.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/owl.transitions.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/animate.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/normalize.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/meanmenu.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/main.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/morrisjs/morris.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/scrollbar/jquery.mCustomScrollbar.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/metisMenu/metisMenu.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/metisMenu/metisMenu-vertical.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/calendar/fullcalendar.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/calendar/fullcalendar.print.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('assets/nalika/css/responsive.css') }}>
    @yield('style')
</head>
<body>
    {{-- Left Sidebar --}}
    <div class="left-sidebar-pro" id="app">
        <nav id="sidebar" class="">
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="#"><img src={{ asset('assets/image/logo.jpg') }} alt="" /></a>
                    <h2>Admin Villa <span class="min-dtn">Pacet</span></h2>
                </div>
                {{-- <div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li><a href="#"><span class="mini-sub-pro">Dashboard</span></a></li>
                        <li><a href="{{ route('villa') }}"><span class="mini-sub-pro">Villa</span></a></li>
                        {{-- <li class="active">
                            <a class="has-arrow" href="index.html">
                                <span class="mini-click-non"></span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    {{-- End Left Sidebar --}}

    <div class="all-content-wrapper">
        {{-- Logo --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="{{ asset('assets/nalika/image/logo.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Logo --}}

        {{-- Header --}}
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="icon nalika-menu-task"></i>
                                            </button>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-13 col-md-10 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name">{{ Auth::user()->name }}</span>
                                                        <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        @guest
                                                            <li>
                                                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                                            </li>
                                                            @if (Route::has('register'))
                                                                <li>
                                                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                </li>
                                                            @endif
                                                        @else
                                                            <li>
                                                                <a href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </li>
                                                        @endguest
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="index-1.html">Villa</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Dashboard Villa Pacet</h2>
                                                <p>Selamat Datang <span class="bread-ntd">Admin Villa Pacet</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Header --}}

        {{-- Main Content --}}
        @yield('content')
        {{-- <div class="section-admin container-fluid res-mg-t-15">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Script --}}
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src={{ asset('assets/bootstrap/js/bootstrap-toggle.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/vendor/modernizr-2.8.3.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/vendor/jquery-1.12.4.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/wow.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/jquery-price-slider.js') }}></script>
    <script src={{ asset('assets/nalika/js/jquery.meanmenu.js') }}></script>
    <script src={{ asset('assets/nalika/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/jquery.sticky.js') }}></script>
    <script src={{ asset('assets/nalika/js/jquery.scrollUp.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/scrollbar/mCustomScrollbar-active.js') }}></script>
    <script src={{ asset('assets/nalika/js/metisMenu/metisMenu.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/metisMenu/metisMenu-active.js') }}></script>
    <script src={{ asset('assets/nalika/js/sparkline/jquery.sparkline.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/sparkline/jquery.charts-sparkline.js') }}></script>
    <script src={{ asset('assets/nalika/js/calendar/moment.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/calendar/fullcalendar.min.js') }}></script>
    <script src={{ asset('assets/nalika/js/calendar/fullcalendar-active.js') }}></script>
    <script src={{ asset('assets/nalika/js/flot/jquery.flot.js') }}></script>
    <script src={{ asset('assets/nalika/js/flot/jquery.flot.resize.js') }}></script>
    <script src={{ asset('assets/nalika/js/flot/curvedLines.js') }}></script>
    <script src={{ asset('assets/nalika/js/flot/flot-active.js') }}></script>
    <script src={{ asset('assets/nalika/js/plugins.js') }}></script>
    <script src={{ asset('assets/nalika/js/main.js') }}></script>
    @yield('script')
</body>
</html>
