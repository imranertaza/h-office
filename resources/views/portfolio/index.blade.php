@extends('layouts.master')

@section('title', 'Portfolio | h office')

@section('body-class',
    'page page-id-139 page-template-default footer-parallax ac_sticky_sidebars navtype-overlay
    ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    .vc_custom_1421324479207 { padding-top: 0px !important; }
    @media screen and (max-width: 1200px) {
        .ac-category-filters .ac-category-filter {
          margin-bottom: 10px !important;
        }
      }
@endsection

@section('main-content')
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
                                                    data-filter=".{{ $cat->slug }}">{{ $cat->name }}</a></span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="ac-tile-posts ac-filter-target ac-tile-masonry" data-cols="3">
                                    @foreach ($portfolios as $item)
                                        <div
                                            class='
                                            @foreach ($item->categories as $cat) {{ $cat->slug . ' ' }} @endforeach
                                            @if (
                                                $item->sort_order == 2 ||
                                                    $item->sort_order == 3 ||
                                                    $item->sort_order == 8 ||
                                                    $item->sort_order == 9 ||
                                                    $item->sort_order == 13 ||
                                                    $item->sort_order == 14) ac-tile-col ac-tm-standard-3  ac-hide-until-ready ac-hidden-until-ready
                                        @elseif($item->sort_order == 4 || $item->sort_order == 6 || $item->sort_order == 10 || $item->sort_order == 12)
                                        ac-tile-col ac-tm-standard-3 ac-hide-until-ready ac-hidden-until-ready
                                        @else
                                        ac-tile-col ac-tm-large-3 ac-hide-until-ready ac-hidden-until-ready @endif all '>
                                            <a href='{{ route('portfolios-details', $item->slug) }}'>
                                                <div class='image'>
                                                    <img class="grid-image"
                                                        src="{{ asset_path('portfolio', $item->featuredImage->image) }}"
                                                        alt="{{ $item->title }} Image" />
                                                </div>
                                                <div class='text'>
                                                    <div class="text-inner">
                                                        <h3 class='ac-tile-title'>{{ $item->short_title }}</h3>
                                                        <div class='ac-tile-footer'>
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