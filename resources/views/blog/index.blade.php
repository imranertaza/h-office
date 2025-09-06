@extends('layouts.master')

@section('title', 'Blog | h office')

@section('body-class', 'page page-id-130 page-template-default footer-parallax ac_sticky_sidebars navtype-overlay ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1421503715751 { margin-top: 0px !important; }
        .vc_custom_1421336323902 { padding-top: 0px !important; }
    </style>
    <style type="text/css" media="screen">
        #logo-slider-wraper {
            position: relative;
        }
        .slider-controls {
            position: absolute;
            width: 990px;
            top: 41px !important;
        }
        #logo-slider {
            position: relative;
            width: 990px;
            height: 120px;
            margin: 0;
            padding: 0;
            overflow: hidden;
            list-style: none;
            background: #FFFFFF;
        }
        .slide {
            list-style: none;
            margin: 0 !important;
            width: 990px !important;
        }
        .slider-controls a {
            height: 40px;
            width: 40px;
            display: inline-block;
            text-indent: -9000px;
        }
        #prev {
            background: url({{ asset('/assets/wp-content/plugins/logo-slider/arrows/arrow1.png') }}) no-repeat center;
            float: right;
            margin-right: -50px;
        }
        #next {
            background: url({{ asset('/assets/wp-content/plugins/logo-slider/arrows/arrow1-prev.png') }}) no-repeat center;
            float: left;
            margin-left: -50px
        }
        @media screen and (max-width:320px) {
            #logo-slider-wraper {
                position: relative !important;
                width: 52% !important;
                left: 42px;
            }
            .slider-controls {
                position: absolute;
                top: 41px;
                left: 30px;
                width: 100% !important;
            }
            #logo-slider {
                background: #FFFFFF;
                height: 120px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 110% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
            #next {
                background: url({{ asset('/assets/wp-content/plugins/logo-slider/arrows/arrow1-prev.png') }}) no-repeat center;
                float: left;
                margin-left: -66px !important;
            }
            .logo-img {
                margin-left: 32px;
            }
        }
        @media screen and (min-width:321px) and (max-width:480px) {
            #logo-slider-wraper {
                position: relative;
                width: 35% !important;
                left: 55px !important;
            }
            .slider-controls {
                position: absolute;
                top: 41px;
                width: 100% !important;
            }
            #logo-slider {
                background: #FFFFFF;
                height: 120px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 102% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
        }
        @media screen and (min-width:321px) and (max-width:360px) {
            #logo-slider-wraper {
                position: relative;
                width: 50% !important;
            }
            .slider-controls {
                position: absolute;
                top: 41px;
                width: 100% !important;
            }
            #logo-slider {
                background: #FFFFFF;
                height: 120px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
        }
        @media screen and (min-width:481px) and (max-width:640px) {
            #logo-slider-wraper {
                position: relative;
                width: 28% !important;
                left: 34px !important
            }
            .slider-controls {
                position: absolute;
                top: 41px;
                width: 100% !important;
            }
            #logo-slider {
                background: #FFFFFF;
                height: 120px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
        }
        @media only screen and (min-width:641px) and (max-width:768px) {
            #logo-slider-wraper {
                position: relative;
                width: 78% !important;
                left: 34px !important
            }
            .slider-controls {
                position: absolute;
                top: 41px;
                width: 100% !important;
            }
            #logo-slider {
                background: #FFFFFF;
                height: 120px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
                left: -12px;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
        }
        @media only screen and (min-width:770px) {
            #logo-slider-wraper {
                position: relative;
                width: 990px !important;
                left: 34px !important
            }
            .slider-controls {
                position: absolute;
                top: 41px;
                width: 100% !important;
            }
            #logo-slider {
                background: #FFFFFF;
                height: 120px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 990px !important;
            }
        }
    </style>
@endsection

@section('main-content')
    <header class="ac-page-title fluid ac-hide-until-ready ac-hidden-until-ready" style="">
        <div class="container">
            <div class="row">
                <h1 class="entry-title"><strong>Blog</strong></h1>
                <p class="entry-subtitle">Hear our stories</p>
            </div>
        </div>
    </header>
    <div class="wrap main-section container" role="document">
        <div class="content">
            <div class="row bg">
                <main class="main sidebar-1 col-sm-9" role="main">
                    <article class="post-130 page type-page status-publish hentry ac-hide-until-ready ac-hidden-until-ready">
                        <div class="entry-content">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1421503715751">
                                <div class="jump-pos"></div>
                                <div class="vc_col-sm-12 wpb_column vc_column_container vc_custom_1421336323902">
                                    <div class="wpb_wrapper">
                                        <div class="ac_posts wpb_content_element ac-posts-wrapper">
                                            <div class="wpb_wrapper">
                                                <div class="list-posts">
                                                    <article class="post-1808 post type-post status-publish format-standard hentry category-uncategorized ac-hide-until-ready ac-hidden-until-ready"></article>
                                                    <article class="post-609 post type-post status-publish format-standard has-post-thumbnail hentry category-experience category-food ac-hide-until-ready ac-hidden-until-ready">
                                                        <a href="../ajo-a-cafe-for-all/index.html">
                                                            <img class="featured-image" src="{{ asset('/assets/wp-content/uploads/2015/03/172816_10150109091892473_509672472_6591341_5029799_o-870x500.jpg') }}" alt="172816_10150109091892473_509672472_6591341_5029799_o">
                                                        </a>
                                                        <header>
                                                            <h2 class="entry-title"><strong><a href="../the-savings-include-a-us140-a134-stateroom-credit-on/index.html">The savings include a $US140 ($A134) stateroom credit on</a></strong></h2>
                                                            <div class="row row-meta">
                                                                <span class="date"><i class="el-icon-time icon"></i> <a href="../the-savings-include-a-us140-a134-stateroom-credit-on/index.html" title="Permalink to The savings include a $US140 ($A134) stateroom credit on" rel="bookmark"><time class="entry-date" datetime="2015-01-18T06:59:06+00:00">January 18, 2015</time></a></span>
                                                                <span class="author vcard"><i class="el-icon-user icon"></i> <a class="url fn n" href="../author/admin/index.html" title="View all posts by admin" rel="author">admin</a></span>
                                                                <span class="categories-links"><i class="el-icon-folder-open icon"></i> <a href="../category/uncategorized/index.html" rel="category tag">Uncategorized</a></span>
                                                            </div>
                                                        </header>
                                                        <div class="entry-summary">
                                                            <p class="excerpt">I am concerned amid all the smoke of war and war of words we are missing a piece. Did the Georgians attempted to exterminate a portion of their population? Europe has had a long history of genocide.</p>
                                                            <div class="read-more"><a href="../the-savings-include-a-us140-a134-stateroom-credit-on/index.html">Continued</a></div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </article>
                                                    <article class="post-360 post type-post status-publish format-standard has-post-thumbnail hentry category-experience ac-hide-until-ready ac-hidden-until-ready">
                                                        <a href="../googlebuslaunch/index.html">
                                                            <img class="featured-image" src="{{ asset('/assets/wp-content/uploads/2015/01/port_Gbus-17-870x500.jpg') }}" alt="port_Gbus (17)">
                                                        </a>
                                                        <header>
                                                            <h2 class="entry-title"><strong><a href="../googlebuslaunch/index.html">Formal Launch of ‘Google Bus’ in Bangladesh</a></strong></h2>
                                                            <div class="row row-meta">
                                                                <span class="date"><i class="el-icon-time icon"></i> <a href="../googlebuslaunch/index.html" title="Permalink to Formal Launch of ‘Google Bus’ in Bangladesh" rel="bookmark"><time class="entry-date" datetime="2015-01-17T14:03:33+00:00">January 17, 2015</time></a></span>
                                                                <span class="author vcard"><i class="el-icon-user icon"></i> <a class="url fn n" href="../author/admin/index.html" title="View all posts by admin" rel="author">admin</a></span>
                                                                <span class="categories-links"><i class="el-icon-folder-open icon"></i> <a href="../category/experience/index.html" rel="category tag">Experience</a></span>
                                                            </div>
                                                        </header>
                                                        <div class="entry-summary">
                                                            <p class="excerpt">Google bus project aims to educate half a million college and university students about the power of the internet, its utilities and introduce them to Google’s free applications.</p>
                                                            <div class="read-more"><a href="../googlebuslaunch/index.html">Continued</a></div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </article>
                                                    <article class="post-352 post type-post status-publish format-standard has-post-thumbnail hentry category-product category-studio tag-bangladesh-accessories tag-bangladesh-products tag-bangladeshi-products tag-fine-products tag-made-in-bangladesh ac-hide-until-ready ac-hidden-until-ready">
                                                        <a href="../madeinbangladesh/index.html">
                                                            <img class="featured-image" src="{{ asset('/assets/wp-content/uploads/2015/01/MIB_product-870x500.jpg') }}" alt="MIB_product">
                                                        </a>
                                                        <header>
                                                            <h2 class="entry-title"><strong><a href="../madeinbangladesh/index.html">MIB Spirit MADE IN BANGLADESH</a></strong></h2>
                                                            <div class="row row-meta">
                                                                <span class="date"><i class="el-icon-time icon"></i> <a href="../madeinbangladesh/index.html" title="Permalink to MIB Spirit MADE IN BANGLADESH" rel="bookmark"><time class="entry-date" datetime="2015-01-17T13:52:43+00:00">January 17, 2015</time></a></span>
                                                                <span class="author vcard"><i class="el-icon-user icon"></i> <a class="url fn n" href="../author/admin/index.html" title="View all posts by admin" rel="author">admin</a></span>
                                                                <span class="categories-links"><i class="el-icon-folder-open icon"></i> <a href="../category/product/index.html" rel="category tag">Product</a>, <a href="../category/studio/index.html" rel="category tag">Studio</a></span>
                                                                <span class="tags-links"><i class="el-icon-tags icon"></i> <a href="../tag/bangladesh-accessories/index.html" rel="tag">Bangladesh Accessories</a>, <a href="../tag/bangladesh-products/index.html" rel="tag">Bangladesh Products</a>, <a href="../tag/bangladeshi-products/index.html" rel="tag">Bangladeshi Products</a>, <a href="../tag/fine-products/index.html" rel="tag">Fine Products</a>, <a href="../tag/made-in-bangladesh/index.html" rel="tag">Made in Bangladesh</a></span>
                                                            </div>
                                                        </header>
                                                        <div class="entry-summary">
                                                            <p class="excerpt">Made in Bangladesh is life style and accessories brand that ignites the feeling of patriotism and local wisdom. We are small group of people trying to change how consumers perceive lifestyle goods made in Bangladesh worldwide.</p>
                                                            <div class="read-more"><a href="../madeinbangladesh/index.html">Continued</a></div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </article>
                                                    <article class="post-810 post type-post status-publish format-standard hentry category-uncategorized ac-hide-until-ready ac-hidden-until-ready"></article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="btn-group social-share">
                                <button class="social-share-main btn btn-default btn-small">Share</button>
                                <a class="social-link btn btn-default btn-small" href="http://www.facebook.com/sharer.php?u=http://h-office.com/blog/&amp;title=Blog" target="_blank"><i class="icon el-icon-facebook"></i></a>
                                <a class="social-link btn btn-default btn-small" href="http://twitter.com/home/?status=Blog%20-%20http://h-office.com/blog/%20via%20@headofficebd" target="_blank"><i class="icon el-icon-twitter"></i></a>
                                <a class="social-link btn btn-default btn-small" href="http://linkedin.com/shareArticle?mini=true&amp;url=http://h-office.com/blog/&amp;title=Blog" target="_blank"><i class="icon el-icon-linkedin"></i></a>
                                <a class="social-link btn btn-default btn-small" href="https://plus.google.com/share?url=http://h-office.com/blog/" target="_blank"><i class="icon el-icon-googleplus"></i></a>
                                <a class="social-link btn btn-default btn-small" href="http://pinterest.com/pin/create/button/?url=http://h-office.com/blog/" target="_blank"><i class="icon el-icon-pinterest"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                    </main>
                    @include('layouts.includes.sidebar')
                </div>
            </div>
        </div>
@endsection