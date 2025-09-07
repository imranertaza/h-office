@extends('layouts.master')

@section('title', 'Ajo | h office')

@section('body-class', 'single single-ac_portfolio postid-191   footer-parallax   ac_sticky_sidebars  navtype-overlay ac-theme top-navbar wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    <style type="text/css">
        a.bbp-author-avatar { display: inline-block; }
        .bbp-reply-author img,
        .bbp-topic-started-by-avatar-avatar img,
        .bbp-topic-freshness-author img { border-radius: 50%; }
        .bbp-topic-freshness-author a { display: inline-block; }
        .bbp-topic-freshness-author a.bbp-author-name { display: none; }
        .bbp-topic-freshness-author p.bbp-topic-meta { display: inline-block; }
        #logo-slider-wraper { position: relative; }
        .slider-controls { position: absolute; width: 990px; top: 41px !important; }
        #logo-slider { position: relative; width: 990px; height: 120px; margin: 0; padding: 0; overflow: hidden; list-style: none; background: #FFFFFF; }
        .slide { list-style: none; margin: 0 !important; width: 990px !important; }
        .slider-controls a { height: 40px; width: 40px; display: inline-block; text-indent: -9000px; }
        #prev { background: url('{{ asset('/assets/wp-content/plugins/logo-slider/arrows/arrow1.png') }}') no-repeat center; float: right; margin-right: -50px; }
        #next { background: url('{{ asset('/assets/wp-content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center; float: left; margin-left: -50px; }
        @media screen and (max-width:320px) {
            #logo-slider-wraper { position: relative !important; width: 52% !important; left: 42px; }
            .slider-controls { position: absolute; top: 41px; left: 30px; width: 100% !important; }
            #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position: relative; width: 110% !important; }
            .slide { list-style: none; margin: 0 !important; width: 100% !important; }
            #next { background: url('{{ asset('/assets/wp-content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center; float: left; margin-left: -66px !important; }
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

@section('main-content')
    <article class="post-191 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry side-images ac-hide-until-ready ac-hidden-until-ready">
        <div class="entry-content row">
            <div class='col-sm-12 col-md-8 ac-page-left-side'>
                <div class='post-images'>
                    @foreach([
                        ['src' => '6-0011', 'width' => 768, 'height' => 512, 'full' => '1200x800'],
                        ['src' => '3-0011', 'width' => 768, 'height' => 512, 'full' => '1200x800'],
                        ['src' => '4-0011', 'width' => 768, 'height' => 512, 'full' => '1200x800'],
                        ['src' => '5-0011', 'width' => 768, 'height' => 1107, 'full' => '1200x1730'],
                        ['src' => '172816_10150109091892473_509672472_6591341_5029799_o', 'width' => 768, 'height' => 512, 'full' => '1200x800'],
                        ['src' => '8-001', 'width' => 768, 'height' => 1148, 'full' => '1200x1793'],
                        ['src' => '248757_10150273733506093_543591092_9524215_5739007_n', 'width' => 768, 'height' => 473, 'full' => '1200x740'],
                        ['src' => '309027_10150470194486093_543591092_10937057_1797544054_n', 'width' => 768, 'height' => 512, 'full' => '1200x800']
                    ] as $image)
                        <a class="prettyphoto" href="{{ asset('assets/wp-content/uploads/2015/01/' . $image['src'] . '-' . $image['full'] . '.jpg') }}" rel="prettyPhoto[rel-245096274]">
                            <div>
                                <img src="{{ asset('assets/wp-content/uploads/2015/01/' . $image['src'] . '-' . $image['width'] . 'x' . $image['height'] . '.jpg') }}"
                                     width="{{ $image['width'] }}" height="{{ $image['height'] }}"
                                     alt="{{ $image['src'] }}">
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class='article-footer'>
                    <div class="clearfix"></div>
                    <div class="btn-group social-share">
                        <button class="social-share-main btn btn-default btn-small">Share</button>
                        <a class="social-link btn btn-default btn-small" href="http://www.facebook.com/sharer.php?u={{ url()->current() }}&title=Ajo" target="_blank">
                            <i class="icon el-icon-facebook"></i>
                        </a>
                        <a class="social-link btn btn-default btn-small" href="http://twitter.com/home/?status=Ajo%20-%20{{ url()->current() }}%20via%20@headofficebd" target="_blank">
                            <i class="icon el-icon-twitter"></i>
                        </a>
                        <a class="social-link btn btn-default btn-small" href="http://linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title=Ajo" target="_blank">
                            <i class="icon el-icon-linkedin"></i>
                        </a>
                        <a class="social-link btn btn-default btn-small" href="https://plus.google.com/share?url={{ url()->current() }}" target="_blank">
                            <i class="icon el-icon-googleplus"></i>
                        </a>
                        <a class="social-link btn btn-default btn-small" href="http://pinterest.com/pin/create/button/?url={{ url()->current() }}" target="_blank">
                            <i class="icon el-icon-pinterest"></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>

                    <section class='related-projects'>
                        <h3 class='title uppercase margin-bottom-medium'><strong>Related Projects</strong></h3>
                        <div class='ac-grid-posts ac-filter-target row ac-grid-fit-rows'>
                            @foreach([
                                ['id' => 77, 'slug' => 'jatra', 'title' => 'Jatra', 'image' => 'product-display-07', 'width' => 768, 'height' => 528],
                                ['id' => 73, 'slug' => 'carefountain', 'title' => 'CARE FOUNTAIN', 'image' => 'n1', 'width' => 768, 'height' => 512],
                                ['id' => 187, 'slug' => 'jaago', 'title' => 'Jaago', 'image' => 'invitation_jaago', 'width' => 768, 'height' => 802]
                            ] as $project)
                                <div class='ac-grid-col post-{{ $project['id'] }} ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-lg-4 col-md-4 col-sm-6 col-xs-12 all ac-hide-until-ready ac-hidden-until-ready'>
                                    <div class='ac-grid-post'>
                                        <div class='image'>
                                            <a href="{{ route('portfolios', $project['slug']) }}">
                                                <img class="grid-image" src="{{ asset('assets/wp-content/uploads/2015/01/' . $project['image'] . '-' . $project['width'] . 'x' . $project['height'] . '.jpg') }}"
                                                     alt="{{ $project['image'] }}">
                                            </a>
                                        </div>
                                        <div class='text'>
                                            <a href="{{ route('portfolios', $project['slug']) }}"><h3 class='ac-grid-title'><strong>{{ $project['title'] }}</strong></h3></a>
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
                    <h3 class="entry-title"><strong>Ajo</strong></h3>
                    <p>Ajo is a café that is much more than only a café. It offers an experience of the fusion of eco-awareness, aesthetic value and modernity, served in the form of delectable fusion dishes, which are healthy, fresh and prepared with care. Head Office Communication planned, designed and executed the whole experience of Ajo.</p>
                </div>
                <ul class='meta-data'>
                    <li class='portolio-client'><span>Client: </span>Ajo</li>
                    <li class='portolio-agency'><span>Agency: </span>Head Office Communication</li>
                    <li><span>Type: </span><a href="{{ route('portfolios', 'branding') }}" rel="tag">Branding</a>, <a href="{{ route('portfolios', 'experience') }}" rel="tag">Experience</a></li>
                </ul>
            </section>

            <div class="clearfix"></div>
        </div>
    </article>
@endsection