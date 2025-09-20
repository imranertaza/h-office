@extends('layouts.app')


@section('body-class',
    'home page page-id-439 page-template-default footer-parallax ac_sticky_sidebars navtype-overlay
    ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    #logo-slider-wraper { position: relative; }
    .slider-controls { position: absolute; width: 990px; top: 41px !important; }
    #logo-slider { position: relative; width: 990px; height: 120px; margin: 0; padding: 0; overflow: hidden; list-style:
    none; background: #FFFFFF; }
    .slide { list-style: none; margin: 0 !important; width: 990px !important; }
    .slider-controls a { height: 40px; width: 40px; display: inline-block; text-indent: -9000px; }
    #prev { background: url('assets/content/plugins/logo-slider/arrows/arrow1.png') no-repeat center; float: right;
    margin-right: -50px; }
    #next { background: url('assets/content/plugins/logo-slider/arrows/arrow1-prev.png') no-repeat center; float: left;
    margin-left: -50px; }
    @media screen and (max-width:320px) {
    #logo-slider-wraper { position: relative !important; width: 52% !important; left: 42px; }
    .slider-controls { position: absolute; top: 41px; left: 30px; width: 100% !important; }
    #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position:
    relative; width: 110% !important; }
    .slide { list-style: none; margin: 0 !important; width: 100% !important; }
    #next { background: url('assets/content/plugins/logo-slider/arrows/arrow1-prev.png') no-repeat center; float: left;
    margin-left: -66px !important; }
    .logo-img { margin-left: 32px; }
    }
    @media screen and (min-width:321px) and (max-width:480px) {
    #logo-slider-wraper { position: relative; width: 35% !important; left: 55px !important; }
    .slider-controls { position: absolute; top: 41px; width: 100% !important; }
    #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position:
    relative; width: 102% !important; }
    .slide { list-style: none; margin: 0 !important; width: 100% !important; }
    }
    @media screen and (min-width:321px) and (max-width:360px) {
    #logo-slider-wraper { position: relative; width: 50% !important; }
    .slider-controls { position: absolute; top: 41px; width: 100% !important; }
    #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position:
    relative; width: 100% !important; }
    .slide { list-style: none; margin: 0 !important; width: 100% !important; }
    }
    @media screen and (min-width:481px) and (max-width:640px) {
    #logo-slider-wraper { position: relative; width: 28% !important; left: 34px !important; }
    .slider-controls { position: absolute; top: 41px; width: 100% !important; }
    #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position:
    relative; width: 100% !important; }
    .slide { list-style: none; margin: 0 !important; width: 100% !important; }
    }
    @media only screen and (min-width:641px) and (max-width:768px) {
    #logo-slider-wraper { position: relative; width: 78% !important; left: 34px !important; }
    .slider-controls { position: absolute; top: 41px; width: 100% !important; }
    #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position:
    relative; width: 100% !important; left: -12px; }
    .slide { list-style: none; margin: 0 !important; width: 100% !important; }
    }
    @media only screen and (min-width:770px) {
    #logo-slider-wraper { position: relative; width: 990px !important; left: 34px !important; }
    .slider-controls { position: absolute; top: 41px; width: 100% !important; }
    #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position:
    relative; width: 100% !important; }
    .slide { list-style: none; margin: 0 !important; width: 990px !important; }
    }
    .vc_custom_1421511914623 { margin-top: 0px !important; }
    .vc_custom_1421512082437 { margin-top: 0px !important; margin-bottom: 15px !important; }
    .vc_custom_1421665387576 { margin-top: 15px !important; margin-right: 15px !important; margin-left: 15px !important;
    background-color: #ffffff !important; }
    .vc_custom_1421502190195 { margin-bottom: 0px !important; }
    .vc_custom_1421350592477 { margin-top: 0px !important; padding-top: 0px !important; }
    .vc_custom_1421511707675 { padding-top: 0px !important; padding-bottom: 0px !important; }
    .vc_custom_1421512134514 { padding-top: 0px !important; }
    .vc_custom_1421350472278 { padding-bottom: 0px !important; }
    .vc_custom_1423927800318 { background-color: #ffffff !important; }
    .vc_custom_1424531679528 { background-color: #ffffff !important; }
    .vc_custom_1421665478418 { padding-bottom: 100px !important; }
    .vc_custom_1541417066060 { margin-top: 0px !important; }
    .vc_custom_1418920482842 { margin-top: 0px !important; padding-top: 0px !important; }
@endsection

@section('content')
    <div class="overlay-nav">
        <div class='inner'>
            <nav class="nav-main" role="navigation">
                <ul class='nav'>
                    <li class="menu-home"><a title="Home" href="{{ route('home') }}">Home</a></li>
                    <li class="active menu-about active"><a title="About" href="{{ route('about') }}">About</a></li>
                    <li class="menu-portfolio"><a title="Portfolio" href="{{ route('portfolios') }}">Portfolio</a></li>
                    <li class="menu-blog"><a title="Blog" href="{{ route('blogs') }}">Blog</a></li>
                    <li class="menu-contact"><a title="Contact" href="{{ route('contact') }}">Contact</a></li>

                </ul>
            </nav>

        </div>
    </div>

    <a id="menu-closer" href="#" class="active">
        <svg class="menu-closer-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" width="60px" height="60px" viewBox="0 0 60 60" enable-background="new 0 0 60 60"
            xml:space="preserve">
            <g>
                <rect x="18" y="28" transform="matrix(0.7071 0.7071 -0.7071 0.7071 30.1464 -12.78)" width="25"
                    height="4"></rect>
                <rect x="18" y="28" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.28 30.3536)" width="25"
                    height="4"></rect>
            </g>
        </svg>
    </a>

    <div id="outer-wrap">


        <header class="banner navbar navbar-default topnavbar navbar navbar-fixed-top ac-transparent-navbar   fluid"
            role="banner">
            <div class="container navbar-outer">
                <div class="navbar-header">
                    <button type="button" class="mobile navbar-toggle" data-toggle="collapse"
                        data-target=".nav-main, .nav-extras">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="{{ route('home') }}"><img id="site-logo-start" class="site-logo"
                            src="{{ asset('assets/content/uploads/2018/04/logo_1-240x90.png') }}" alt="h office"><img
                            id="site-logo" class="site-logo  trans-nav-logo "
                            src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/HOC_logo_2_240x90.png') }}"
                            alt="h office"></a>
                </div>


                <nav class="nav-main navbar-collapse collapse" role="navigation">


                    <button type="button" class="desktop navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>





                </nav>
            </div>
        </header>
        <a id="page-top" class='jump-pos'></a>



        @yield('header-slider')

        <div class="wrap main-section container" role="document">
            <div class="content">
                <div class="row bg">
                    <main class="main sidebar-1 col-md-9" role="main">
                        @yield('main-content')
                    </main>
                    @yield('sidebar')
                </div>
            </div>
        </div>
    </div>

    <a id="page-bottom"></a>
    <footer class="content-info fluid" role="contentinfo">

        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <section id="text-1" class=" widget widget_text">
                        <div class="textwidget"><img
                                src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/HOC_logo_240x90.png') }}"
                                style="opacity:0.6;"></div>
                    </section>
                </div>
            </div>
        </div>


        <div id="footer-copyright">
            <article class="container">
                <div class='row'>
                    <div id="footer_social_bar" class="col-md-12 col-lg-12">
                        <a href="https://www.facebook.com/headofficecommunication" target="_blank" title="facebook">
                            <span class="icon el-icon-facebook"></span>
                        </a>
                        <a href="https://www.linkedin.com/company/headoffice?trk=top_nav_home" target="_blank"
                            title="linkedin">
                            <span class="icon el-icon-linkedin"></span>
                        </a>
                        <a href="https://twitter.com/headofficebd" target="_blank" title="twitter">
                            <span class="icon el-icon-twitter"></span>
                        </a>
                        <a href="https://www.youtube.com/channel/UCppgkUgt-2Ts1xV1BsLSsQA" target="_blank"
                            title="youtube">
                            <span class="icon el-icon-youtube"></span>
                        </a>
                    </div>
                    <div id="copyright-bar" class="col-md-12 col-lg-12">
                        © 2019 h office. All rights reserved. Developed by <a
                            href="https://www.dnationsoft.com/">DNationSoft</a> </div>
                </div>
            </article>
        </div>
    </footer>
@endsection
