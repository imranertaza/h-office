@extends('layouts.master')

@section('title', $portfolio->title . ' | h office')
@section('body-class',
    'single single-ac_portfolio postid-{{ $portfolio->portfolio_id }} footer-parallax ac_sticky_sidebars
    navtype-overlay ac-theme top-navbar wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    a.bbp-author-avatar { display: inline-block; }
    .bbp-reply-author img,
    .bbp-topic-started-by-avatar-avatar img,
    .bbp-topic-freshness-author img { border-radius: 50%; }
    .bbp-topic-freshness-author a { display: inline-block; }
    .bbp-topic-freshness-author a.bbp-author-name { display: none; }
    .bbp-topic-freshness-author p.bbp-topic-meta { display: inline-block; }
    #logo-slider-wraper { position: relative; }
    .slider-controls { position: absolute; width: 990px; top: 41px !important; }
    #logo-slider { position: relative; width: 990px; height: 120px; margin: 0; padding: 0; overflow: hidden; list-style:
    none; background: #FFFFFF; }
    .slide { list-style: none; margin: 0 !important; width: 990px !important; }
    .slider-controls a { height: 40px; width: 40px; display: inline-block; text-indent: -9000px; }
    #prev { background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1.png') }}') no-repeat center; float:
    right; margin-right: -50px; }
    #next { background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center;
    float: left; margin-left: -50px; }
    @media screen and (max-width:320px) {
    #logo-slider-wraper { position: relative !important; width: 52% !important; left: 42px; }
    .slider-controls { position: absolute; top: 41px; left: 30px; width: 100% !important; }
    #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position:
    relative; width: 110% !important; }
    .slide { list-style: none; margin: 0 !important; width: 100% !important; }
    #next { background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center;
    float: left; margin-left: -66px !important; }
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
@endsection

@php
    $imagePath = 'assets/uploads/portfolios/';
@endphp

@if (count($portfolio->sliderImages) > 1)
    @section('header-slider')
        <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'>
            <div class="ac-royalSlider sliderContainer fullWidth clearfix ac_easy_slider no-caption square"
                data-show-title="1" data-show-excerpt="1" data-slider-size="square" data-delay="6000" data-autoplay="true"
                data-transition="slide" data-split-nav="" data-auto-height="false">
                <div class="royalSlider heroSlider rsMinW full-width-slider">
                    @foreach ($portfolio->sliderImages as $image)
                        <div class="rsContent">
                            <img class="rsImg" src="{{ asset($imagePath . $image->image) }}"
                                alt="{{ $image->caption ?? 'Portfolio Image' }}" />
                            <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                                data-move-effect="bottom" data-speed="200">
                                <div class="caption">{{ $image->caption ?? 'Portfolio Image' }}</div>
                                <div class="description">
                                    <div class='excerpt'>{{ $image->description ?? '' }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='ac-rs-overlay'></div>
                <div class="ac-rs-controls-wrapper load-item">
                    <div class="slidecaption"></div>
                    <div class="slidedescription"></div>
                </div>
            </div>
        </div>
    @endsection
@elseif (count($portfolio->sliderImages) == 1)
    @section('header-slider')
        <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'>
            <img class="featured-image" src="{{ asset($imagePath . $portfolio->sliderImages[0]->image) }}"
                alt='{{ $portfolio->sliderImages[0]->caption ?? 'portfolio-image' }}' />
        </div>
    @endsection
@endif

@section('main-content')

    <article
        class="post-77 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry side-images ac-hide-until-ready ac-hidden-until-ready">
        <div class="entry-content row">
            @if ($portfolio->slug == 'gp-house')
                <div class='col-sm-12 col-md-9 ac-page-left-side'>
                    <div class='content top-images'>
                        <h3 class="entry-title">
                            <strong>{{$portfolio->title}}</strong>
                        </h3>
                       {!! $portfolio->description !!}
                    </div>
                    <div class='article-footer'>
                        <div class="clearfix"></div>
                        <div class="btn-group social-share">
                            <button class="social-share-main btn btn-default btn-small">Share</button>

                            @php
                                $currentUrl = request()->fullUrl();
                                $encodedUrl = urlencode($currentUrl);
                                $encodedTitle = urlencode($portfolio->title);
                            @endphp

                            <a class="social-link btn btn-default btn-small"
                                href="http://www.facebook.com/sharer.php?u={{ $encodedUrl }}&title={{ $encodedTitle }}"
                                target="_blank"><i class="icon el-icon-facebook"></i></a>

                            <a class="social-link btn btn-default btn-small"
                                href="http://twitter.com/home/?status={{ $encodedTitle }}%20-%20{{ $encodedUrl }}%20via%20@headofficebd"
                                target="_blank"><i class="icon el-icon-twitter"></i></a>

                            <a class="social-link btn btn-default btn-small"
                                href="http://linkedin.com/shareArticle?mini=true&url={{ $encodedUrl }}&title={{ $encodedTitle }}"
                                target="_blank"><i class="icon el-icon-linkedin"></i></a>

                            <a class="social-link btn btn-default btn-small"
                                href="https://plus.google.com/share?url={{ $encodedUrl }}" target="_blank"><i
                                    class="icon el-icon-googleplus"></i></a>

                            <a class="social-link btn btn-default btn-small"
                                href="http://pinterest.com/pin/create/button/?url={{ $encodedUrl }}" target="_blank"><i
                                    class="icon el-icon-pinterest"></i></a>
                        </div>
                        <div class="clearfix"></div>

                        <section class='related-projects'>
                            <h3 class='title uppercase margin-bottom-medium'><strong>Related Projects</strong></h3>
                            <div class='ac-grid-posts ac-filter-target row ac-grid-fit-rows'>
                                @foreach ($related as $item)
                                    <div
                                        class='ac-grid-col post-172 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                                        <div class='ac-grid-post'>
                                            <div class='image'>
                                                <a href='{{ route('portfolios-details', $item->slug) }}'>
                                                    <img class="grid-image"
                                                        src="{{ asset($imagePath . $item->relatedImage->image) }}"
                                                        alt="port_Gbus (17)" />
                                                </a>
                                            </div>
                                            <div class='text'>
                                                <a href='{{ route('portfolios-details', $item->slug) }}'>
                                                    <h3 class='ac-grid-title'><strong>{{ $item->title }}</strong></h3>
                                                </a>
                                                <div class='ac-grid-terms'></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
                <section class='side-meta col-sm-12 col-md-3 ac-page-right-side'>
                    <ul class='meta-data'>
                        <li class='portolio-client'><span>Client: </span>{{ $portfolio->client }}</li>
                        <li class='portolio-agency'><span>Agency: </span>{{ $portfolio->agency }}</li>
                        @foreach ($portfolio->categories as $category)
                            <li><span>Type: </span><a href="#" rel="tag">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </section>
            @else
                <div class='col-sm-12 col-md-8 ac-page-left-side'>
                    <div class="post-images">
                        @foreach ($portfolio->images as $item)
                            @if ($item->image)
                                <img width="768" src="{{ asset($imagePath . $item->image) }}"
                                     alt="{{ $item->alt ?? 'portfolio-image' }}">
                            @elseif ($item->video)
                                <div class="video-container">
                                    <video width="768" controls>
                                        <source src="{{ asset_path('portfolio_video',$item->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    
                    <div class='article-footer'>
                        <div class="clearfix"></div>
                        <div class="btn-group social-share">
                            <button class="social-share-main btn btn-default btn-small">Share</button>
                            <a class="social-link btn btn-default btn-small"
                                href="http://www.facebook.com/sharer.php?u={{ urlencode(url('/portfolios/jatra')) }}&title=Jatra"
                                target="_blank"><i class="icon el-icon-facebook"></i></a>
                            <a class="social-link btn btn-default btn-small"
                                href="http://twitter.com/home/?status=Jatra%20-%20{{ urlencode(url('/portfolios/jatra')) }}%20via%20@headofficebd"
                                target="_blank"><i class="icon el-icon-twitter"></i></a>
                            <a class="social-link btn btn-default btn-small"
                                href="http://linkedin.com/shareArticle?mini=true&url={{ urlencode(url('/portfolios/jatra')) }}&title=Jatra"
                                target="_blank"><i class="icon el-icon-linkedin"></i></a>
                            <a class="social-link btn btn-default btn-small"
                                href="https://plus.google.com/share?url={{ urlencode(url('/portfolios/jatra')) }}"
                                target="_blank"><i class="icon el-icon-googleplus"></i></a>
                            <a class="social-link btn btn-default btn-small"
                                href="http://pinterest.com/pin/create/button/?url={{ urlencode(url('/portfolios/jatra')) }}"
                                target="_blank"><i class="icon el-icon-pinterest"></i></a>
                        </div>
                        <div class="clearfix"></div>

                        <section class='related-projects'>
                            <h3 class='title uppercase margin-bottom-medium'><strong>Related Projects</strong></h3>
                            <div class='ac-grid-posts ac-filter-target row ac-grid-fit-rows'>
                                @foreach ($related as $item)
                                    <div
                                        class='ac-grid-col post-172 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                                        <div class='ac-grid-post'>
                                            <div class='image'>
                                                <a href='{{ route('portfolios-details', $item->slug) }}'>
                                                    <img class="grid-image"
                                                        src="{{ asset($imagePath . $item->relatedImage->image) }}"
                                                        alt="port_Gbus (17)" />
                                                </a>
                                            </div>
                                            <div class='text'>
                                                <a href='{{ route('portfolios-details', $item->slug) }}'>
                                                    <h3 class='ac-grid-title'><strong>{{ $item->title }}</strong></h3>
                                                </a>
                                                <div class='ac-grid-terms'></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>

                <section class='side-meta col-sm-12 col-md-4 ac-page-right-side'>
                    <div class='content side-images'>
                        <h3 class="entry-title">
                            <strong>{{ $portfolio->title }}</strong>
                        </h3>
                        <p>{!! $portfolio->description !!}</p>
                        <p>&nbsp;</p>
                    </div>
                    <ul class='meta-data'>
                        <li class='portolio-client'><span>Client: </span>{{ $portfolio->client }}</li>
                        <li class='portolio-agency'><span>Agency: </span>{{ $portfolio->agency }}</li>
                        @foreach ($portfolio->categories as $category)
                            <li><span>Type: </span><a href="#" rel="tag">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </section>
            @endif
            <div class="clearfix"></div>
        </div>
    </article>
@endsection
