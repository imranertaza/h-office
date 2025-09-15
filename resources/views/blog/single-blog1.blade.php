@extends('layouts.master')

@section('title', $blog->blog_title)

@section('body-class', 'single single-post postid-360 single-format-standard has-post-thumbnail hentry category-experience footer-parallax ac_sticky_sidebars navtype-overlay ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
   
@endsection

@section('content')
    <div class="overlay-nav">
        <div class='inner'>
            <nav class="nav-main" role="navigation">
                <ul class='nav'>
                    <li class="menu-home"><a title="Home" href="{{ route('home') }}">Home</a></li>
                    <li class="menu-about"><a title="About" href="{{ route('about') }}">About</a></li>
                    <li class="menu-portfolio"><a title="Portfolio" href="{{ route('portfolios') }}">Portfolio</a></li>
                    <li class="menu-blog active"><a title="Blog" href="{{ route('blogs') }}">Blog</a></li>
                    <li class="menu-contact"><a title="Contact" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <a id="menu-closer" href="#" class="active">
        <svg class="menu-closer-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
            <g>
                <rect x="18" y="28" transform="matrix(0.7071 0.7071 -0.7071 0.7071 30.1464 -12.78)" width="25" height="4"></rect>
                <rect x="18" y="28" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.28 30.3536)" width="25" height="4"></rect>
            </g>
        </svg>
    </a>

    <div id="outer-wrap">
        <header class="banner navbar navbar-default topnavbar navbar navbar-fixed-top ac-transparent-navbar fluid" role="banner">
            <div class="container navbar-outer">
                <div class="navbar-header">
                    <button type="button" class="mobile navbar-toggle" data-toggle="collapse" data-target=".nav-main, .nav-extras">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="{{ route('home') }}">
                        <img id="site-logo-start" class="site-logo" src="{{ asset('assets/content/uploads/2018/04/logo_1-240x90.png') }}" alt="h office">
                        <img id="site-logo" class="site-logo trans-nav-logo" src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/HOC_logo_2_240x90.png') }}" alt="h office">
                    </a>
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

        <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'>
            <img class="featured-image" src="{{ asset('assets/content/uploads/2015/01/port_Gbus-17-1200x500.jpg') }}" alt="port_Gbus (17)" />
        </div>

        <div class="wrap main-section container" role="document">
            <div class="content">
                <div class="row bg">
                    <main class="main sidebar-1 col-sm-9" role="main">
                        <article class="post-360 post type-post status-publish format-standard has-post-thumbnail hentry category-experience ac-hide-until-ready ac-hidden-until-ready">
                            <div class="entry-content">
                                <header>
                                    <h1><strong>Formal Launch of ‘Google Bus’ in Bangladesh</strong></h1>
                                    <div class="row row-meta">
                                        <span class="date"><i class="el-icon-time icon"></i> <a href="{{ route('blogs') }}" title="Permalink to Formal Launch of ‘Google Bus’ in Bangladesh" rel="bookmark"><time class="entry-date" datetime="2015-01-17T14:03:33+00:00">January 17, 2015</time></a></span>
                                        <span class="author vcard"><i class="el-icon-user icon"></i> <a class="url fn n" href="{{ route('home', 'admin') }}" title="View all posts by admin" rel="author">admin</a></span>
                                        <span class="categories-links"><i class="el-icon-folder-open icon"></i> <a href="{{ route('home', 'experience') }}" rel="category tag">Experience</a></span>
                                    </div>
                                </header>

                                <p>Google bus project aims to educate half a million college and university students about the power of the internet, its utilities and introduce them to Google’s free applications. The project will hold in-class instructor led training and experience zone in the bus across six divisions in Bangladesh aiming to reach 480 colleges and universities.</p>
                                <p>Google Asia Pacific Country Manager, Emerging Markets, James McClure and state minister for ICT minister Junaid Ahmed Palak inaugurated the ceremony.</p>
                                <div class="clearfix"></div>
                                <div class="btn-group social-share">
                                    <button class="social-share-main btn btn-default btn-small">Share</button>
                                    <a class="social-link btn btn-default btn-small" href="http://www.facebook.com/sharer.php?u={{ url()->current() }}&title=Formal%20Launch%20of%20%e2%80%98Google%20Bus%e2%80%99%20in%20Bangladesh" target="_blank"><i class="icon el-icon-facebook"></i></a>
                                    <a class="social-link btn btn-default btn-small" href="http://twitter.com/home/?status=Formal%20Launch%20of%20%e2%80%98Google%20Bus%e2%80%99%20in%20Bangladesh%20-%20{{ url()->current() }}%20via%20@headofficebd" target="_blank"><i class="icon el-icon-twitter"></i></a>
                                    <a class="social-link btn btn-default btn-small" href="http://linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title=Formal%20Launch%20of%20%e2%80%98Google%20Bus%e2%80%99%20in%20Bangladesh" target="_blank"><i class="icon el-icon-linkedin"></i></a>
                                    <a class="social-link btn btn-default btn-small" href="https://plus.google.com/share?url={{ url()->current() }}" target="_blank"><i class="icon el-icon-googleplus"></i></a>
                                    <a class="social-link btn btn-default btn-small" href="http://pinterest.com/pin/create/button/?url={{ url()->current() }}" target="_blank"><i class="icon el-icon-pinterest"></i></a>
                                </div>
                                <div class="clearfix"></div>

                                <footer>
                                    <div class='post-bottom-nav'>
                                        <div class='prev'><a href="{{ route('blogs', 'the-savings-include-a-us140-a134-stateroom-credit-on') }}" rel="prev"><span class="entypo-icon-left-open"></span>Prev</a></div>
                                        <div class='next'><a href="{{ route('blogs', 'madeinbangladesh') }}" rel="next">Next<span class="entypo-icon-right-open"></span></a></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </footer>
                            </div>
                        </article>
                    </main><!-- /.main -->

                    <aside class="sidebar secondary sidebar-1 col-sm-3 ac-hide-until-ready ac-hidden-until-ready" role="complementary">
                        <section id="search-2" class="widget widget_search">
                            <form role="search" method="get" id="searchform" class="form-inline" action="{{ route('blogs') }}">
                                <input type="search" value="" name="s" id="s" class="form-control" placeholder="Search h office">
                                <label class="hide" for="s">Search for:</label>
                                <button type="submit" id="searchsubmit" class="btn btn-default searchsubmit"><i class="entypo-icon-search"></i></button>
                            </form>
                        </section>
                        <section id="recent-posts-2" class="widget widget_recent_entries">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul>
                                <li><a href="{{ route('blogs', 'the-savings-include-a-us140-a134-stateroom-credit-on') }}">THE SAVINGS INCLUDE A $US140 ($A134) STATEROOM CREDIT ON</a></li>
                                <li><a href="{{ route('blogs', 'googlebuslaunch') }}">FORMAL LAUNCH OF ‘GOOGLE BUS’ IN BANGLADESH</a></li>
                                <li><a href="{{ route('blogs', 'madeinbangladesh') }}">MIB SPIRIT MADE IN BANGLADESH</a></li>
                            </ul>
                        </section>
                        <section id="recent-comments-2" class="widget widget_recent_comments">
                            <h3 class="widget-title">Recent Comments</h3>
                            <ul id="recentcomments"></ul>
                        </section>
                        <section id="archives-2" class="widget widget_archive">
                            <h3 class="widget-title">Archives</h3>
                            <ul>
                                <li><a href="{{ route('home', '2015/11') }}">November 2015</a></li>
                                <li><a href="{{ route('home', '2015/10') }}">October 2015</a></li>
                                <li><a href="{{ route('home', '2015/09') }}">September 2015</a></li>
                                <li><a href="{{ route('home', '2015/08') }}">August 2015</a></li>
                                <li><a href="{{ route('home', '2015/07') }}">July 2015</a></li>
                                <li><a href="{{ route('home', '2015/06') }}">June 2015</a></li>
                                <li><a href="{{ route('home', '2015/05') }}">May 2015</a></li>
                                <li><a href="{{ route('home', '2015/04') }}">April 2015</a></li>
                                <li><a href="{{ route('home', '2015/03') }}">March 2015</a></li>
                                <li><a href="{{ route('home', '2015/02') }}">February 2015</a></li>
                                <li><a href="{{ route('home', '2015/01') }}">January 2015</a></li>
                                <li><a href="{{ route('home', '2014/12') }}">December 2014</a></li>
                                <li><a href="{{ route('home', '2014/11') }}">November 2014</a></li>
                                <li><a href="{{ route('home', '2014/10') }}">October 2014</a></li>
                                <li><a href="{{ route('home', '2014/09') }}">September 2014</a></li>
                                <li><a href="{{ route('home', '2014/08') }}">August 2014</a></li>
                                <li><a href="{{ route('home', '2014/07') }}">July 2014</a></li>
                            </ul>
                        </section>
                        <section id="categories-2" class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li class="cat-item cat-item-18"><a href="{{ route('home', 'experience') }}">Experience</a></li>
                                <li class="cat-item cat-item-2"><a href="{{ route('home', 'food') }}">Food</a></li>
                                <li class="cat-item cat-item-12"><a href="{{ route('home', 'product') }}">Product</a></li>
                                <li class="cat-item cat-item-3"><a href="{{ route('home', 'studio') }}">Studio</a></li>
                                <li class="cat-item cat-item-1"><a href="{{ route('home', 'uncategorized') }}">Uncategorized</a></li>
                            </ul>
                        </section>
                        <section id="ac_latest_portfolio-1" class="widget ac-latest-portfolio">
                            <h3 class="widget-title"></h3>
                            <div class='ac-grid-col post-172 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-log-3 all experience ac-hide-until-ready ac-hidden-until-ready'>
                                <div class='ac-grid-post'>
                                    <div class='image'>
                                        <a href="{{ route('portfolios', 'google-bus-bangladesh') }}">
                                            <img class="grid-image" src="{{ asset('assets/content/uploads/2015/01/port_Gbus-17-768x511.jpg') }}" alt="port_Gbus (17)" />
                                        </a>
                                    </div>
                                    <div class='text'>
                                        <a href="{{ route('portfolios', 'google-bus-bangladesh') }}"><h3 class='ac-grid-title'><strong>Google-Bus Bangladesh</strong></h3></a>
                                        <div class='ac-grid-terms'><a href="{{ route('portfolios', 'experience') }}" rel="tag">Experience</a></div>
                                        <p class='excerpt'>Google, one of biggest brand in the world, is with the mission to organize the world's information and make it universally accessible and useful.</p>
                                        <div class='read-more'><a href="{{ route('portfolios', 'google-bus-bangladesh') }}">Continued</a></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </aside><!-- /.sidebar -->
                </div>
            </div>
        </div>

        <a id="page-bottom"></a>
        <footer class="content-info fluid" role="contentinfo">
            <div class='container'>
                <div class="row">
                    <div class="col-md-12">
                        <section id="text-1" class="widget widget_text">
                            <div class="textwidget">
                                <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/HOC_logo_240x90.png') }}" style="opacity:0.6;">
                            </div>
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
                            <a href="https://www.linkedin.com/company/headoffice?trk=top_nav_home" target="_blank" title="linkedin">
                                <span class="icon el-icon-linkedin"></span>
                            </a>
                            <a href="https://twitter.com/headofficebd" target="_blank" title="twitter">
                                <span class="icon el-icon-twitter"></span>
                            </a>
                            <a href="https://www.youtube.com/channel/UCppgkUgt-2Ts1xV1BsLSsQA" target="_blank" title="youtube">
                                <span class="icon el-icon-youtube"></span>
                            </a>
                        </div>
                        <div id="copyright-bar" class="col-md-12 col-lg-12">
                            © 2019 h office. All rights reserved. Developed by <a href="https://www.dnationsoft.com/">DNationSoft</a>
                        </div>
                    </div>
                </article>
            </div>
        </footer>
    </div>
@endsection

@section('scripts')
    <script type='text/javascript' src='{{ asset('assets/content/plugins/contact-form-7/includes/js/jquery.form.min.js') }}'></script>
    <script type='text/javascript'>
        var _wpcf7 = {"loaderUrl":"{{ asset('assets/content/plugins/contact-form-7/images/ajax-loader.gif') }}","sending":"Sending ..."};
    </script>
    <script type='text/javascript' src='{{ asset('assets/content/plugins/contact-form-7/includes/js/scripts.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/content/themes/bloc/includes/royalslider/jquery.royalslider.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/content/themes/bloc/includes/theme-scripts.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/content/themes/bloc/assets/js/bootstrap.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/content/themes/bloc/assets/js/main.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/content/themes/bloc/assets/js/vendor/retina.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/content/themes/bloc/assets/js/vendor/jquery.fitvids.js') }}'></script>
    <script type='text/javascript' src='{{ asset('assets/content/plugins/logo-slider/lgs_jquery.cycle2.js') }}'></script>
@endsection