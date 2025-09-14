@extends('layouts.master')

@section('title', 'Ajo | h office')

@section('body-class', 'ingle single-ac_portfolio postid-66   footer-parallax   ac_sticky_sidebars  navtype-overlay ac-theme top-navbar  ac-transparent-navbar-body  wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
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
    background: url(../../content/plugins/logo-slider/arrows/arrow1.png) no-repeat center;
    float: right;
    margin-right: -50px;
    }

    #next {
    background: url(../../content/plugins/logo-slider/arrows/arrow1-prev.png) no-repeat center;
    float: left;
    margin-left: -50px
    }

    /*
    ===============================================================
    --------------------_ Responsive _--------------------
    ===============================================================
    */

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
    background: url(../../content/plugins/logo-slider/arrows/arrow1-prev.png) no-repeat center;
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
    .recentcomments a {
    display: inline !important;
    padding: 0 !important;
    margin: 0 !important;
    }
@endsection

@section('header-slider')
    <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'>
        <div class="ac-royalSlider sliderContainer fullWidth clearfix ac_easy_slider no-caption square" data-show-title="1"
            data-show-excerpt="1" data-slider-size="square" data-delay="6000" data-autoplay="true" data-transition="slide"
            data-split-nav="" data-auto-height="false">
            <div class="royalSlider heroSlider rsMinW full-width-slider">
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC7762-1600x900.jpg') }}"
                        alt="_DSC7762" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC7762</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC7323-1600x1062.jpg') }}"
                        alt="_DSC7323" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC7323</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC7711-1600x1062.jpg') }}"
                        alt="_DSC7711" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC7711</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC7762-1600x900.jpg') }}"
                        alt="_DSC7762" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC7762</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC7878-1600x1999.jpg') }}"
                        alt="_DSC7878" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC7878</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC79661-1600x1142.jpg') }}"
                        alt="_DSC7966" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC7966</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC8000-1600x1066.jpg') }}"
                        alt="_DSC8000" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC8000</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC8095-1600x1066.jpg') }}"
                        alt="_DSC8095" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC8095</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/DSC8243-1600x1600.jpg') }}"
                        alt="_DSC8243" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_DSC8243</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1862-1600x2401.jpg') }}"
                        alt="_MG_1862" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1862</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1864-1600x1066.jpg') }}"
                        alt="_MG_1864" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1864</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1867-1600x1066.jpg') }}"
                        alt="_MG_1867" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1867</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1868-1600x2401.jpg') }}"
                        alt="_MG_1868" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1868</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1873-1600x1066.jpg') }}"
                        alt="_MG_1873" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1873</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1883-1600x1066.jpg') }}"
                        alt="_MG_1883" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1883</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1889-1600x1066.jpg') }}"
                        alt="_MG_1889" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1889</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1891-1600x2401.jpg') }}"
                        alt="_MG_1891" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1891</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/MG_1899-1600x1066.jpg') }}"
                        alt="_MG_1899" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">_MG_1899</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
                <div class="rsContent">
                    <img class="rsImg" src="{{ asset('assets/content/uploads/2015/01/IMG_0737-1600x1066.jpg') }}"
                        alt="IMG_0737" />
                    <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                        data-move-effect="bottom" data-speed="200">
                        <div class="caption">IMG_0737</div>
                        <div class="description">
                            <div class='excerpt'></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Control Bar-->
            <div class='ac-rs-overlay'></div>
            <div class="ac-rs-controls-wrapper load-item">
                <!-- Caption -->
                <div class="slidecaption"></div>
                <!-- Description -->
                <div class="slidedescription"></div>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <article
        class="post-66 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry top-images ac-hide-until-ready ac-hidden-until-ready">
        <div class="entry-content row">
            <div class='col-sm-12 col-md-9 ac-page-left-side'>
                <div class='content top-images'>
                    <h3 class="entry-title">
                        <strong>GP-House</strong>
                    </h3>
                    <p class="entry-subtitle">This is the subtitle</p>
                    <p>The goal of the GP-House profiling project was to create a unique compilation of contemporary,
                        dynamic Bangladeshi art that reflects the identity of a nation, a nation that is looking towards a
                        new horizon of progress. By bringing together different pieces of art from around the country in
                        one iconic building, Head Office Communication has created a whole new dimension to the idea of
                        corporate workplace.</p>
                </div>
                <div class='article-footer'>
                    <div class="clearfix"></div>
                    <div class="btn-group social-share">
                        <button class="social-share-main btn btn-default btn-small">Share</button>
                        <a class="social-link btn btn-default btn-small"
                            href="http://www.facebook.com/sharer.php?u=http://h-office.com/portfolios/gp-house/&amp;title=GP-House"
                            target="_blank"><i class="icon el-icon-facebook"></i></a>
                        <a class="social-link btn btn-default btn-small"
                            href="http://twitter.com/home/?status=GP-House%20-%20http://h-office.com/portfolios/gp-house/%20via%20@headofficebd"
                            target="_blank"><i class="icon el-icon-twitter"></i></a>
                        <a class="social-link btn btn-default btn-small"
                            href="http://linkedin.com/shareArticle?mini=true&amp;url=http://h-office.com/portfolios/gp-house/&amp;title=GP-House"
                            target="_blank"><i class="icon el-icon-linkedin"></i></a>
                        <a class="social-link btn btn-default btn-small"
                            href="https://plus.google.com/share?url=http://h-office.com/portfolios/gp-house/"
                            target="_blank"><i class="icon el-icon-googleplus"></i></a>
                        <a class="social-link btn btn-default btn-small"
                            href="http://pinterest.com/pin/create/button/?url=http://h-office.com/portfolios/gp-house/"
                            target="_blank"><i class="icon el-icon-pinterest"></i></a>
                    </div>
                    <div class="clearfix"></div>
                    <section class='related-projects'>
                        <h3 class='title uppercase margin-bottom-medium'><strong>Related Projects</strong></h3>
                        <div class='ac-grid-posts ac-filter-target row ac-grid-fit-rows'>
                            <div
                                class='ac-grid-col post-172 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                                <div class='ac-grid-post'>
                                    <div class='image'>
                                        <a href='../google-bus-bangladesh/index.html'>
                                            <img class="grid-image"
                                                src="{{ asset('assets/content/uploads/2015/01/port_Gbus-17-768x511.jpg') }}"
                                                alt="port_Gbus (17)" />
                                        </a>
                                    </div>
                                    <div class='text'>
                                        <a href='../google-bus-bangladesh/index.html'>
                                            <h3 class='ac-grid-title'><strong>Google-Bus Bangladesh</strong></h3>
                                        </a>
                                        <div class='ac-grid-terms'></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class='ac-grid-col post-191 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                                <div class='ac-grid-post'>
                                    <div class='image'>
                                        <a href='../ajo/index.html'>
                                            <img class="grid-image"
                                                src="{{ asset('assets/content/uploads/2015/01/6-0011-768x512.jpg') }}"
                                                alt="6-0011" />
                                        </a>
                                    </div>
                                    <div class='text'>
                                        <a href='../ajo/index.html'>
                                            <h3 class='ac-grid-title'><strong>Ajo</strong></h3>
                                        </a>
                                        <div class='ac-grid-terms'></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class='ac-grid-col post-77 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                                <div class='ac-grid-post'>
                                    <div class='image'>
                                        <a href='../jatra/index.html'>
                                            <img class="grid-image"
                                                src="{{ asset('assets/content/uploads/2015/01/product-display-07-768x528.jpg') }}"
                                                alt="product-display-07" />
                                        </a>
                                    </div>
                                    <div class='text'>
                                        <a href='../jatra/index.html'>
                                            
                                            <h3 class='ac-grid-title'><strong>Jatra</strong></h3>
                                        </a>
                                        <div class='ac-grid-terms'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <section class='side-meta col-sm-12 col-md-3 ac-page-right-side'>
                <ul class='meta-data'>
                    <li class='portolio-client'><span>Client: </span>Grameen Phone</li>
                    <li class='portolio-agency'><span>Agency: </span>Head Office Communication</li>
                    <li><span>Type: </span><a href="../../portfolio-category/experience/index.html"
                            rel="tag">Experience</a></li>
                </ul>
            </section>
            <div class="clearfix"></div>
        </div>
    </article>
@endsection
