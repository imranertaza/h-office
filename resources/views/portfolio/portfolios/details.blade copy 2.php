@extends('layouts.master')

@section('title', 'Ajo | h office')

@section('body-class', 'single single-ac_portfolio postid-77   footer-parallax   ac_sticky_sidebars  navtype-overlay ac-theme top-navbar wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
#logo-slider-wraper{
    position:relative;

}
.slider-controls{
    position:absolute;
    width:990px;
    top: 41px !important;
}
#logo-slider {
    position: relative;
    width: 990px;
    height: 120px;
    margin: 0; padding: 0;
    overflow: hidden;
    list-style:none;
    background:#FFFFFF;
}
.slide{
    list-style:none;
    margin:0 !important;
    width:990px !important;
}
.slider-controls a{
    height:40px;
    width:40px;
    display:inline-block;
    text-indent:-9000px;
}
#prev{
    background:url(../../content/plugins/logo-slider/arrows/arrow1.png) no-repeat center;
    float:right;
    margin-right:-50px;
}
#next{
    background:url(../../content/plugins/logo-slider/arrows/arrow1-prev.png) no-repeat center;
    float:left;
    margin-left:-50px
}

/*
===============================================================
--------------------_ Responsive _--------------------
===============================================================
*/

@media screen and (max-width:320px){
    #logo-slider-wraper{
        position:relative !important;
        width:52% !important;
        left:42px;
    }
    .slider-controls {
        position: absolute;
        top: 41px;
        left:30px;
        width: 100% !important;
    }
    #logo-slider {
        background:#FFFFFF;
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
    #next{
        background:url(../../content/plugins/logo-slider/arrows/arrow1-prev.png) no-repeat center;
        float:left;
        margin-left:-66px !important;
    }
    .logo-img {
        margin-left:32px;
    }
}
@media screen and (min-width:321px) and (max-width:480px){
    #logo-slider-wraper{
        position:relative;
        width:35% !important;
        left:55px !important;
    }
    .slider-controls {
        position: absolute;
        top: 41px;
        width: 100% !important;
    }
    #logo-slider {
        background:#FFFFFF;
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
@media screen and (min-width:321px) and (max-width:360px){
    #logo-slider-wraper{
        position:relative;
        width:50% !important;
    }
    .slider-controls {
        position: absolute;
        top: 41px;
        width: 100% !important;
    }
    #logo-slider {
        background:#FFFFFF;
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
@media screen and (min-width:481px) and (max-width:640px){
    #logo-slider-wraper{
        position:relative;
        width:28% !important;
        left:34px !important
    }
    .slider-controls {
        position: absolute;
        top: 41px;
        width: 100% !important;
    }
    #logo-slider {
        background:#FFFFFF;
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
@media only screen and (min-width:641px) and (max-width:768px){
    #logo-slider-wraper{
        position:relative;
        width:78% !important;
        left:34px !important
    }
    .slider-controls {
        position: absolute;
        top: 41px;
        width: 100% !important;
    }
    #logo-slider {
        background:#FFFFFF;
        height: 120px;
        list-style: none outside none;
        margin: 0;
        overflow: hidden;
        padding: 0;
        position: relative;
        width: 100% !important;
        left:-12px;
    }
    .slide {
        list-style: none outside none;
        margin: 0 !important;
        width: 100% !important;
    }
}
@media only screen and (min-width:770px){
    #logo-slider-wraper{
        position:relative;
        width:990px !important;
        left:34px !important
    }
    .slider-controls {
        position: absolute;
        top: 41px;
        width: 100% !important;
    }
    #logo-slider {
        background:#FFFFFF;
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
@endsection
@section('header-slider')
<div class='ac-page-hero-img ac-no-container-padding    ac-hide-until-ready ac-hidden-until-ready '><img class="featured-image" src="{{asset('assets/content/uploads/2015/01/product-display-07-1200x500.jpg')}}" alt='product-display-07' /></div>

@endsection
@section('main-content')
<article class="post-77 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry side-images ac-hide-until-ready ac-hidden-until-ready">
    <div class="entry-content row">
        <div class='col-sm-12 col-md-8 ac-page-left-side'>
            <div class='post-images'>
                <img src="{{ asset('assets/content/uploads/2015/01/product-display-768x1184.jpg') }}" width='768' height='1184' alt='product-display'>
                <img src="{{ asset('assets/content/uploads/2015/01/product-display-02-768x1152.jpg') }}" width='768' height='1152' alt='product-display-02'>
                <img src="{{ asset('assets/content/uploads/2015/01/product-display-03-768x1141.jpg') }}" width='768' height='1141' alt='product-display-03'>
                <img src="{{ asset('assets/content/uploads/2015/01/product-display-04-768x511.jpg') }}" width='768' height='511' alt='product-display-04'>
                <img src="{{ asset('assets/content/uploads/2015/01/product-display-05-768x511.jpg') }}" width='768' height='511' alt='product-display-05'>
                <img src="{{ asset('assets/content/uploads/2015/01/product-display-06-768x511.jpg') }}" width='768' height='511' alt='product-display-06'>
                <img src="{{ asset('assets/content/uploads/2015/01/product-display-07-768x528.jpg') }}" width='768' height='528' alt='product-display-07'>
                <img src="{{ asset('assets/content/uploads/2015/01/product-display-08-768x511.jpg') }}" width='768' height='511' alt='product-display-08'>
                <img src="{{ asset('assets/content/uploads/2015/01/signage-768x1195.jpg') }}" width='768' height='1195' alt='signage'>
            </div>
            <div class='article-footer'>
                <div class="clearfix"></div>
                <div class="btn-group social-share">
                    <button class="social-share-main btn btn-default btn-small">Share</button>
                    <a class="social-link btn btn-default btn-small" href="http://www.facebook.com/sharer.php?u={{ urlencode(url('/portfolios/jatra')) }}&title=Jatra" target="_blank"><i class="icon el-icon-facebook"></i></a>
                    <a class="social-link btn btn-default btn-small" href="http://twitter.com/home/?status=Jatra%20-%20{{ urlencode(url('/portfolios/jatra')) }}%20via%20@headofficebd" target="_blank"><i class="icon el-icon-twitter"></i></a>
                    <a class="social-link btn btn-default btn-small" href="http://linkedin.com/shareArticle?mini=true&url={{ urlencode(url('/portfolios/jatra')) }}&title=Jatra" target="_blank"><i class="icon el-icon-linkedin"></i></a>
                    <a class="social-link btn btn-default btn-small" href="https://plus.google.com/share?url={{ urlencode(url('/portfolios/jatra')) }}" target="_blank"><i class="icon el-icon-googleplus"></i></a>
                    <a class="social-link btn btn-default btn-small" href="http://pinterest.com/pin/create/button/?url={{ urlencode(url('/portfolios/jatra')) }}" target="_blank"><i class="icon el-icon-pinterest"></i></a>
                </div>
                <div class="clearfix"></div>

                <section class='related-projects'>
                    <h3 class='title uppercase margin-bottom-medium'><strong>Related Projects</strong></h3>
                    <div class='ac-grid-posts ac-filter-target row ac-grid-fit-rows'>
                        <div class='ac-grid-col post-191 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                            <div class='ac-grid-post'>
                                <div class='image'>
                                    <a href="">
                                        <img class="grid-image" src="{{ asset('assets/content/uploads/2015/01/6-0011-768x512.jpg') }}" alt="6-0011" />
                                    </a>
                                </div>
                                <div class='text'>
                                    <a href="">
                                        <h3 class='ac-grid-title'><strong>Ajo</strong></h3>
                                    </a>
                                    <div class='ac-grid-terms'></div>
                                </div>
                            </div>
                        </div>
                        <div class='ac-grid-col post-73 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                            <div class='ac-grid-post'>
                                <div class='image'>
                                    <a href="">
                                        <img class="grid-image" src="{{ asset('assets/content/uploads/2015/01/n1-768x512.jpg') }}" alt="n1" />
                                    </a>
                                </div>
                                <div class='text'>
                                    <a href="">
                                        <h3 class='ac-grid-title'><strong>CARE FOUNTAIN</strong></h3>
                                    </a>
                                    <div class='ac-grid-terms'></div>
                                </div>
                            </div>
                        </div>
                        <div class='ac-grid-col post-187 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                            <div class='ac-grid-post'>
                                <div class='image'>
                                    <a href="">
                                        <img class="grid-image" src="{{ asset('assets/content/uploads/2015/01/invitation_jaago-768x802.jpg') }}" alt="invitation_jaago" />
                                    </a>
                                </div>
                                <div class='text'>
                                    <a href="">
                                        <h3 class='ac-grid-title'><strong>Jaago</strong></h3>
                                    </a>
                                    <div class='ac-grid-terms'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <section class='side-meta col-sm-12 col-md-4 ac-page-right-side'>
            <div class='content side-images'>
                <h3 class="entry-title">
                    <strong>Jatra</strong>
                </h3>
                <p>Jatra, the renowned local handicraft brand has a name, fame and character of its own. Head Office Communication reflected the distinct character of this handicraft brand in its outlet in Banani by being playful in its interior design, while promoting local heritage and yet giving it a global approach.</p>
                <p>&nbsp;</p>
            </div>
            <ul class='meta-data'>
                <li class='portolio-client'><span>Client: </span>Jatra</li>
                <li class='portolio-agency'><span>Agency: </span>Head Office Communication</li>
                <li><span>Type: </span>
                    <a href="" rel="tag">Branding</a>,
                    <a href="" rel="tag">Experience</a>
                </li>
            </ul>
        </section>

        <div class="clearfix"></div>
    </div>
</article>
@endsection
