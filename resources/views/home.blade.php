@extends('layouts.master')


@section('styles')
    #logo-slider-wraper { position: relative; }
    .slider-controls { position: absolute; width: 990px; top: 41px !important; }
    #logo-slider { position: relative; width: 990px; height: 120px; margin: 0; padding: 0; overflow: hidden; list-style:
    none; background: #FFFFFF; }
    .slide { list-style: none; margin: 0 !important; width: 990px !important; }
    .slider-controls a { height: 40px; width: 40px; display: inline-block; text-indent: -9000px; }
    #prev { background: url('{{ asset('assets/content/plugins/logo-slider/arrows/arrow1.png') }}') no-repeat center;
    float: right;
    margin-right: -50px; }
    #next { background: url('{{ asset('assets/content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center;
    float: left;
    margin-left: -50px; }
    @media screen and (max-width:320px) {
    #logo-slider-wraper { position: relative !important; width: 52% !important; left: 42px; }
    .slider-controls { position: absolute; top: 41px; left: 30px; width: 100% !important; }
    #logo-slider { background: #FFFFFF; height: 120px; list-style: none; margin: 0; overflow: hidden; padding: 0; position:
    relative; width: 110% !important; }
    .slide { list-style: none; margin: 0 !important; width: 100% !important; }
    #next { background: url('{{ asset('assets/content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center;
    float: left;
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
    .main, .sidebar { margin-top: 0px !important; }
@endsection
@section('main-content')
@php
$imagePath = 'assets/uploads/portfolios/';
// $f="https://placehold.co/768x768";
$f=null;
@endphp
    <article class="post-439 page type-page status-publish hentry ac-hide-until-ready ac-hidden-until-ready">
        <div class="entry-content">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1421511914623">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-12 vc_hidden-sm vc_hidden-xs wpb_column vc_column_container vc_custom_1421511707675">
                    <div class="wpb_wrapper">
                        <div class="vc_empty_space" style="height: 100px"><span class="vc_empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1421512082437">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-12 ac_grid_alt wpb_column vc_column_container vc_custom_1421512134514">
                    <div class="wpb_wrapper">
                        <div class="ac_portfolio wpb_content_element vc_custom_1421350472278 ac-tile-masonry-wrapper">
                            <div class="wpb_wrapper">
                                <div class='ac-tile-posts ac-filter-target ac-tile-masonry' data-cols='3'>
                                    @foreach ($portfolios as $item)
                                        <div
                                            class='@foreach ($item->categories as $cat) {{ $cat->slug.' ' }} @endforeach all @if ($item->sort_order == 2 || $item->sort_order == 3 || $item->sort_order == 8 || $item->sort_order == 9) ac-tile-col ac-tm-standard-3 ac-hide-until-ready ac-hidden-until-ready
                                        @elseif($item->sort_order == 4 || $item->sort_order == 6)
                                        ac-tile-col ac-tm-standard-3 ac-hide-until-ready ac-hidden-until-ready
                                        @else
                                        ac-tile-col ac-tm-large-3 ac-hide-until-ready ac-hidden-until-ready @endif '>
                                            <a href='{{ route('portfolios-details', $item->slug) }}'>
                                                <div class='image'>
                                                    <img class="grid-image"
                                                        src="{{$f??asset_path('portfolio', $item->featuredImage->image) }}"
                                                        alt="{{ $item->title }} Image" />
                                                </div>
                                                <div class='text'>
                                                    <div class="text-inner">
                                                        <h3 class='ac-tile-title'>{{ $item->short_title }}</h3>
                                                        <div class='ac-tile-footer'>@foreach ($item->categories as $cat)
                                                            {{ $cat->name }}
                                                            @if (!$loop->last)
                                                                ,
                                                            @endif
                                                        @endforeach</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1421665387576">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-1 ac_grid_alt wpb_column vc_column_container">
                    <div class="wpb_wrapper"></div>
                </div>
                <div class="vc_col-sm-10 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element bloc-row-lg vc_custom_1423927800318">
                            <div class="wpb_wrapper">
                                <h5 style="text-align: center;">Who we are</h5>
                                <h3 style="text-align: center;"><strong>We’re an Experience Agency</strong></h3>
                                <p style="text-align: center;">We are a close team of talented creative, strategy and
                                    management professionals dedicated in delivering top quality <b>experiences</b> that are
                                    impactful and long lasting in nature. Together, we set our client’s dreams in motion and
                                    help their businesses to thrive. We are committed and enthusiastic about every project
                                    we take and deliver the best with passion and love.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_col-sm-1 wpb_column vc_column_container">
                    <div class="wpb_wrapper"></div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1421665387576">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-1 ac_grid_alt wpb_column vc_column_container">
                    <div class="wpb_wrapper"></div>
                </div>
                <div class="vc_col-sm-10 wpb_column vc_column_container">
                    <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element client_logo_area vc_custom_1424531679528">
                            <div class="wpb_wrapper">
                                <h5 style="text-align: center;">Some of the Brands</h5>
                                <h3 style="text-align: center;"><strong>WE’VE WORKED WITH</strong></h3>
                                <div id="logo-slider-wraper">
                                    <ul id="logo-slider" class="cycle-slideshow" data-cycle-fx="scrollHorz"
                                        data-cycle-timeout="0" data-cycle-next="#prev" data-cycle-prev="#next"
                                        data-cycle-speed="600" data-cycle-slides="> li">
                                        <li class="slide cycle-slide cycle-slide-active"
                                            style="position: absolute; top: 0px; left: 0px; z-index: 100; opacity: 1; display: block; visibility: visible;">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/british.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/citi.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/DHL.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/grameen.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/google.jpg') }}"
                                                class="logo-img" alt="">
                                        </li>
                                        <li class="slide cycle-slide"
                                            style="position: absolute; top: 0px; left: 0px; z-index: 99; visibility: hidden;">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/Grameen-Intel.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/Nuvista-pharma.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/Star-cineplex.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/EMK-center.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/Care-Bangladesh.jpg') }}"
                                                class="logo-img" alt="">
                                        </li>
                                        <li class="slide cycle-slide"
                                            style="position: absolute; top: 0px; left: 0px; z-index: 97; visibility: hidden;">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/Concern-Worldwide.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/Jaago.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/Gtz.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/aarong.jpg') }}"
                                                class="logo-img" alt="">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/HSBC.jpg') }}"
                                                class="logo-img" alt="">
                                        </li>
                                        <li class="slide cycle-slide"
                                            style="position: absolute; top: 0px; left: 0px; z-index: 96; visibility: hidden;">
                                            <img src="{{ asset('assets/client/h-office_latest/cms/content/uploads/2015/02/chevron.jpg') }}"
                                                class="logo-img" alt="">
                                        </li>
                                    </ul>
                                    <div class="slider-controls"><a href="#" id="prev">&lt;</a> <a
                                            href="#" id="next">&gt;</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_col-sm-1 wpb_column vc_column_container">
                    <div class="wpb_wrapper"></div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid text-center vc_custom_1421502190195 ac-full-width-row">
                <div class="jump-pos"></div>
                <div class="container">
                    <div class="vc_col-sm-12 ac_grid_alt wpb_column vc_column_container vc_custom_1421665478418">
                        <div class="wpb_wrapper">
                            <a href='{{ route('blogs') }}' title='Blog'><span
                                    class="ac_vc_button wpb_content_element vc_custom_1541417066060 text-center btn btn-default text-center">See
                                    more<i class="smicon-box-icon align" style="color:;"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1421350592477">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-12 wpb_column vc_column_container vc_custom_1418920482842">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_left">
                            <div class="wpb_wrapper">
                                <img width="1140" height="450"
                                    src="{{ asset('assets/content/uploads/2014/12/Address_HOC_01.jpg') }}"
                                    class="vc_box_border_grey attachment-full" alt="Address_HOC_01" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </article>
@endsection
