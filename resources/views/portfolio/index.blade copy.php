@extends('layouts.master')

@section('title', 'Portfolio | h office')

@section('body-class',
    'page page-id-139 page-template-default footer-parallax ac_sticky_sidebars navtype-overlay
    ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    .vc_custom_1421324479207 { padding-top: 0px !important; }
@endsection

@section('main-content')
    @php
        $imagePath = 'assets/uploads/portfolios/';
    @endphp
    {{-- @dd($portfolios) --}}
    <article class="post-139 page type-page status-publish hentry ac-hide-until-ready ac-hidden-until-ready">
        <div class="entry-content">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-12 wpb_column vc_column_container vc_custom_1421324479207">
                    <div class="wpb_wrapper">
                        <div class="ac_portfolio wpb_content_element home ac-tile-masonry-wrapper">
                            <div class="wpb_wrapper">
                                <div class="ac-category-filters-wrapper">
                                    <div class="ac-category-filters clearfix">
                                        <span class="ac-category-filter selected"><a href="#" class="all"
                                                data-filter=".all">All</a></span>
                                        @foreach ($categories as $cat)
                                            <span class="ac-category-filter"><a href="#" class="item"
                                                    data-filter=".{{ strtolower($cat->name) }}">{{ $cat->name }}</a></span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="ac-tile-posts ac-filter-target ac-tile-masonry" data-cols="3">
                                    @foreach ($portfolios as $item)
                                        @if ($item->sort_order == 1)
                                            <div
                                                class="ac-tile-col ac-tm-large-3 all experience ac-hide-until-ready ac-hidden-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset_path('portfolio',$item->featuredImage->image) }}"
                                                            alt="port_Gbus (17)">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($item->sort_order == 2)
                                            <div
                                                class="ac-tile-col ac-tm-standard-3 all branding experience ac-hide-until-ready ac-hidden-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset_path('portfolio',$item->featuredImage->image) }}"
                                                            alt="6-0011">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($item->sort_order == 3)
                                            <div
                                                class="ac-tile-col ac-tm-standard-3 all branding experience ac-hide-until-ready ac-hidden-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset('/assets/content/uploads/2015/01/product-display-07-768x768.jpg') }}"
                                                            alt="product-display-07">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($item->sort_order == 4)
                                            <div
                                                class="ac-tile-col ac-tm-standard-3 all branding social ac-hide-until-ready ac-hidden-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset_path('portfolio',$item->featuredImage->image) }}"
                                                            alt="n1">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif

                                        @if ($item->sort_order == 5)
                                            <div
                                                class="ac-tile-col ac-tm-standard-3 all  branding  social  ac-hide-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset_path('portfolio',$item->featuredImage->image) }}"
                                                            alt="invitation_jaago">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif

                                        @if ($item->sort_order == 6)
                                            <div
                                                class="ac-tile-col ac-tm-large-3 all experience ac-hide-until-ready ac-hidden-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset_path('portfolio',$item->featuredImage->image) }}"
                                                            alt="_DSC7762">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($item->sort_order == 7)
                                            <div
                                                class="ac-tile-col ac-tm-large-3 all experience ac-hide-until-ready ac-hidden-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset_path('portfolio',$item->featuredImage->image) }}"
                                                            alt="port_Gbus (17)">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($item->sort_order == 8)
                                            <div
                                                class="ac-tile-col ac-tm-standard-3 all branding experience ac-hide-until-ready ac-hidden-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset_path('portfolio',$item->featuredImage->image) }}"
                                                            alt="6-0011">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($item->sort_order == 9)
                                            <div
                                                class="ac-tile-col ac-tm-standard-3 all branding experience ac-hide-until-ready ac-hidden-until-ready">
                                                <a href="{{ route('portfolios-details', $item->slug) }}">
                                                    <div class="image">
                                                        <img class="grid-image"
                                                            src="{{ asset_path('portfolio',$item->featuredImage->image) }}"
                                                            alt="product-display-07">
                                                    </div>
                                                    <div class="text">
                                                        <div class="text-inner">
                                                            <h3 class="ac-tile-title">{{ $item->short_title }}</h3>
                                                            <div class="ac-tile-footer">
                                                                @foreach ($item->categories as $cat)
                                                                    {{ $cat->name }}
                                                                    @if (!$loop->last)
                                                                        ,
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
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
