@extends('layouts.master')

@section('title', 'MIB Spirit MADE IN BANGLADESH | h office')

@section('body-class', 'single single-post postid-352 single-format-standard footer-parallax ac_sticky_sidebars navtype-overlay ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    <style type="text/css">
        #logo-slider-wraper { position: relative; }
        .slider-controls { position: absolute; width: 990px; top: 41px !important; }
        #logo-slider { position: relative; width: 990px; height: 120px; margin: 0; padding: 0; overflow: hidden; list-style: none; background: #FFFFFF; }
        .slide { list-style: none; margin: 0 !important; width: 990px !important; }
        .slider-controls a { height: 40px; width: 40px; display: inline-block; text-indent: -9000px; }
        #prev { background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1.png') }}') no-repeat center; float: right; margin-right: -50px; }
        #next { background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center; float: left; margin-left: -50px; }
        @media screen and (max-width:320px) {
            #logo-slider-wraper { position: relative !important; width: 52% !important; left: 42px; }
            .slider-controls { position: absolute; top: 41px; left: 30px; width: 100% !important; }
            #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position: relative; width: 110% !important; }
            .slide { list-style: none; margin: 0 !important; width: 100% !important; }
            #next { background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center; float: left; margin-left: -66px !important; }
            .logo-img { margin-left: 32px; }
        }
        @media screen and (min-width:321px) and (max-width:480px) {
            #logo-slider-wraper { position: relative; width: 35% !important; left: 55px !important; }
            .slider-controls { position: absolute; top: 41px; width: 100% !important; }
            #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position: relative; width: 102% !important; }
            .slide { list-style: none; margin: 0 !important; width: 100% !important; }
        }
        @media screen and (min-width:321px) and (max-width:360px) {
            #logo-slider-wraper { position: relative; width: 50% !important; }
            .slider-controls { position: absolute; top: 41px; width: 100% !important; }
            #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position: relative; width: 100% !important; }
            .slide { list-style: none; margin: 0 !important; width: 100% !important; }
        }
        @media screen and (min-width:481px) and (max-width:640px) {
            #logo-slider-wraper { position: relative; width: 28% !important; left: 34px !important; }
            .slider-controls { position: absolute; top: 41px; width: 100% !important; }
            #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position: relative; width: 100% !important; }
            .slide { list-style: none; margin: 0 !important; width: 100% !important; }
        }
        @media only screen and (min-width:641px) and (max-width:768px) {
            #logo-slider-wraper { position: relative; width: 78% !important; left: 34px !important; }
            .slider-controls { position: absolute; top: 41px; width: 100% !important; }
            #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position: relative; width: 100% !important; left: -12px; }
            .slide { list-style: none; margin: 0 !important; width: 100% !important; }
        }
        @media only screen and (min-width:770px) {
            #logo-slider-wraper { position: relative; width: 990px !important; left: 34px !important; }
            .slider-controls { position: absolute; top: 41px; width: 100% !important; }
            #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position: relative; width: 100% !important; }
            .slide { list-style: none; margin: 0 !important; width: 990px !important; }
        }
    </style>
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

        @if(0)
            <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'></div>
        @elseif(true)
            <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'>
                <div class="ac-royalSlider sliderContainer fullWidth clearfix ac_easy_slider no-caption square"
                     data-show-title="1" data-show-excerpt="1" data-slider-size="square"
                     data-delay="6000" data-autoplay="true" data-transition="slide"
                     data-split-nav="" data-auto-height="false">
                    <div class="royalSlider heroSlider rsMinW full-width-slider">
                        <div class="rsContent">
                            <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MIB_product-1600x1066.jpg') }}" alt="MIB_product" />
                            <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
                                <div class="caption">MIB Product</div>
                                <div class="description"><div class='excerpt'></div></div>
                            </div>
                        </div>
                        <div class="rsContent">
                            <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/1781766_753408081400127_8047884723732741814_o-1600x2400.jpg') }}" alt="MIB Image 1" />
                            <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
                                <div class="caption">MIB Image 1</div>
                                <div class="description"><div class='excerpt'></div></div>
                            </div>
                        </div>
                        <div class="rsContent">
                            <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/10806207_767310316676570_7487871458005622165_n-1600x1067.jpg') }}" alt="MIB Image 2" />
                            <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
                                <div class="caption">MIB Image 2</div>
                                <div class="description"><div class='excerpt'></div></div>
                            </div>
                        </div>
                        <div class="rsContent">
                            <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/10846236_754985957909006_1180230344411627776_n-1600x1066.jpg') }}" alt="MIB Image 3" />
                            <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
                                <div class="caption">MIB Image 3</div>
                                <div class="description"><div class='excerpt'></div></div>
                            </div>
                        </div>
                        <div class="rsContent">
                            <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MIB_product-1600x1066.jpg') }}" alt="MIB_product" />
                            <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
                                <div class="caption">MIB Product</div>
                                <div class="description"><div class='excerpt'></div></div>
                            </div>
                        </div>
                    </div>
                    <div class='ac-rs-overlay'></div>
                    <div class="ac-rs-controls-wrapper load-item">
                        <div class="slidecaption"></div>
                        <div class="slidedescription"></div>
                    </div>
                </div>
            </div>
        @else
            <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'>
                <img class="featured-image" src="{{ asset('assets/content/uploads/2015/01/MIB_product-1600x1066.jpg') }}" alt="MIB Product" />
            </div>
        @endif

        <div class="wrap main-section container" role="document">
            <div class="content">
                <div class="row bg">
                    <main class="main sidebar-1 col-sm-9" role="main">
                        <article class="post-352 post type-post status-publish format-standard has-post-thumbnail hentry category-product category-studio tag-bangladesh-accessories tag-bangladesh-products tag-bangladeshi-products tag-fine-products tag-made-in-bangladesh ac-hide-until-ready ac-hidden-until-ready">
                            <div class="entry-content">
                                <header>
                                    <h1><strong>MIB Spirit MADE IN BANGLADESH</strong></h1>
                                    <div class="row row-meta">
                                        <span class="date"><i class="el-icon-time icon"></i> <a href="{{ route('blogs') }}" title="Permalink to MIB Spirit MADE IN BANGLADESH" rel="bookmark"><time class="entry-date" datetime="2015-01-17T13:52:43+00:00">January 17, 2015</time></a></span>
                                        <span class="author vcard"><i class="el-icon-user icon"></i> <a class="url fn n" href="{{ route('home', 'admin') }}" title="View all posts by admin" rel="author">admin</a></span>
                                        <span class="categories-links"><i class="el-icon-folder-open icon"></i> <a href="{{ route('home', 'product') }}" rel="category tag">Product</a>, <a href="{{ route('home', 'studio') }}" rel="category tag">Studio</a></span>
                                        <span class="tags-links"><i class="el-icon-tags icon"></i> <a href="{{ route('home', 'bangladesh-accessories') }}" rel="tag">Bangladesh Accessories</a>, <a href="{{ route('home', 'bangladesh-products') }}" rel="tag">Bangladesh Products</a>, <a href="{{ route('home', 'bangladeshi-products') }}" rel="tag">Bangladeshi Products</a>, <a href="{{ route('home', 'fine-products') }}" rel="tag">Fine Products</a>, <a href="{{ route('home', 'made-in-bangladesh') }}" rel="tag">Made in Bangladesh</a></span>
                                    </div>
                                </header>

                                <p>Made in Bangladesh is life style and accessories brand that ignites the feeling of patriotism and local wisdom. We are small group of people trying to change how consumers perceive lifestyle goods made in Bangladesh worldwide. We think that all material used in the process of making can be locally sourced, be green and stylish while still holding to top-notch quality to meet global standards. If you&#8217;re in line with our beliefs, stay with us.</p>
                                <p>We&#8217;re the crazy ones who think they can change the world, one small item at a time.</p>
                                <p>&nbsp;</p>

                                <div class="btn-group social-share">
                                    <button class="social-share-main btn btn-default btn-small">Share</button>
                                    <a class="social-link btn btn-default btn-small" href="http://www.facebook.com/sharer.php?u={{ url()->current() }}&title=MIB%20Spirit%20%20MADE%20IN%20BANGLADESH" target="_blank"><i class="icon el-icon-facebook"></i></a>
                                    <a class="social-link btn btn-default btn-small" href="http://twitter.com/home/?status=MIB%20Spirit%20%20MADE%20IN%20BANGLADESH%20-%20{{ url()->current() }}%20via%20@headofficebd" target="_blank"><i class="icon el-icon-twitter"></i></a>
                                    <a class="social-link btn btn-default btn-small" href="http://linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title=MIB%20Spirit%20%20MADE%20IN%20BANGLADESH" target="_blank"><i class="icon el-icon-linkedin"></i></a>
                                    <a class="social-link btn btn-default btn-small" href="https://plus.google.com/share?url={{ url()->current() }}" target="_blank"><i class="icon el-icon-googleplus"></i></a>
                                    <a class="social-link btn btn-default btn-small" href="http://pinterest.com/pin/create/button/?url={{ url()->current() }}" target="_blank"><i class="icon el-icon-pinterest"></i></a>
                                </div>
                                <div class="clearfix"></div>

                                <footer>
                                    <div class='post-bottom-nav'>
                                        <div class='prev'><a href="{{ route('blogs', 'googlebuslaunch') }}" rel="prev"><span class="entypo-icon-left-open"></span>Prev</a></div>
                                        <div class='next'><a href="{{ route('blogs', 'the-savings-include-a-us140-a134-stateroom-credit-on') }}" rel="next">Next<span class="entypo-icon-right-open"></span></a></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </footer>
                            </div>
                        </article>
                    </main>

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
                    </aside>
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
