@extends('layouts.blog-detail')

@section('title', 'Blog | h office')

@section('body-class',
    'page page-id-130 page-template-default footer-parallax ac_sticky_sidebars navtype-overlay
    ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

@section('styles')
    .vc_custom_1421503715751 {
    margin-top: 0px !important;
    }

    .vc_custom_1421336323902 {
    padding-top: 0px !important;
    }
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
    background: url({{ asset('/assets/images/arrow1.png') }}) no-repeat center;
    float: right;
    margin-right: -50px;
    }

    #next {
    background: url({{ asset('/assets/images/arrow1-prev.png') }}) no-repeat center;
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
    background: url({{ asset('/assets/images/arrow1-prev.png') }}) no-repeat center;
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
    .main, .sidebar {
    padding-top:0px !important;
    margin-top:0px !important;
    }
@endsection
@section('header-slider')
    <header class="ac-page-title fluid ac-hide-until-ready ac-hidden-until-ready" style="">
        <div class="container">
            <div class="row">
                <h1 class="entry-title"><strong>Blog</strong></h1>
                <p class="entry-subtitle">Hear our stories</p>
            </div>
        </div>
    </header>
@endsection

@section('main-content')
    <article class="post-130 page type-page status-publish hentry ac-hide-until-ready ac-hidden-until-ready">
        <div class="entry-content">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1421503715751">
                <div class="jump-pos"></div>
                <div class="vc_col-sm-12 wpb_column vc_column_container vc_custom_1421336323902">
                    <div class="wpb_wrapper">
                        <div class="ac_posts wpb_content_element ac-posts-wrapper">
                            <div class="wpb_wrapper">
                                <div class="list-posts">
                                    @foreach ($blogs as $blog)
                                        @php
                                            // Determine if the post has a featured image
                                            $hasThumbnail = !empty($blog->featured_image) ? 'has-post-thumbnail' : '';

                                            // Get category slugs for CSS classes

                                            // Get tag slugs for CSS classes (if tags are used)
                                            // $tagClasses = $blog->tags ? $blog->tags->pluck('slug')->implode(' ') : '';

                                        @endphp
                                        <article
                                            class="post-{{ $blog->blog_id }} post type-post status-{{ $blog->status == '1' ? 'publish' : 'draft' }} format-standard {{ $hasThumbnail }} hentry  ac-hide-until-ready ac-hidden-until-ready">
                                            @if (!empty($blog->featured_image))
                                                <a href="{{ route('blog.show', $blog->slug) }}">
                                                    <img class="featured-image"
                                                        src="{{ asset_path('blog', $blog->featuredImage->image) }}"
                                                        alt="{{ $blog->blog_title }}">
                                                </a>
                                            @endif
                                            <header>
                                                <h2 class="entry-title">
                                                    <strong>
                                                        <a
                                                            href="{{ route('blog.show', $blog->slug) }}">{{ $blog->blog_title }}</a>
                                                    </strong>
                                                </h2>
                                                <div class="row row-meta">
                                                    <span class="date">
                                                        <i class="el-icon-time icon"></i>
                                                        <a href="{{ route('blog.show', $blog->slug) }}"
                                                            title="Permalink to {{ $blog->blog_title }}" rel="bookmark">
                                                            <time class="entry-date"
                                                                datetime="{{ \Carbon\Carbon::parse($blog->publish_date)->toIso8601String() }}">
                                                                {{ \Carbon\Carbon::parse($blog->publish_date)->format('F j, Y') }}
                                                            </time>
                                                        </a>
                                                    </span>
                                                    <span class="author vcard">
                                                        <i class="el-icon-user icon"></i>
                                                        <a class="url fn n" href="{{ route('blogs', $blog->createdBy) }}"
                                                            title="View all posts by {{ $blog->author->name ?? 'admin' }}"
                                                            rel="author">
                                                            {{ $blog->author->name ?? 'admin' }}
                                                        </a>
                                                    </span>
                                                    <span class="categories-links">
                                                        <i class="el-icon-folder-open icon"></i>

                                                        @forelse ($blog->categories as $category)
                                                            <a href="{{ route('blogs.byCategory', $category->category_name) }}"
                                                                rel="category tag">
                                                                {{ $category->category_name }}
                                                            </a>
                                                            @if (!$loop->last)
                                                                ,
                                                            @endif
                                                        @empty

                                                            <a href="{{ route('blogs.byCategory', 'uncategorised') }}"
                                                                rel="category tag">
                                                                Uncategories
                                                            </a>
                                                        @endforelse
                                                    </span>
                                                    @if ($blog->meta_keyword)
                                                        <span class="tags-links">
                                                            <i class="el-icon-tags icon"></i>
                                                            @foreach (explode(',', $blog->meta_keyword) as $keyword)
                                                                <a href="{{ url('tag/' . Str::slug(trim($keyword))) }}"
                                                                    rel="tag">{{ trim($keyword) }}</a>
                                                                @if (!$loop->last)
                                                                    ,
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                    @endif
                                                </div>
                                            </header>
                                            <div class="entry-summary">
                                                <p class="excerpt">{{ $blog->short_des }}</p>
                                                <div class="read-more">
                                                    <a href="{{ route('blog.show', $blog->slug) }}">Continued</a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

            @php
                $currentUrl = urlencode(url()->current());
                $pageTitle = urlencode($blog->title ?? 'Blog');
            @endphp

            <div class="btn-group social-share">
                <button class="social-share-main btn btn-default btn-small">Share</button>

                <a class="social-link btn btn-default btn-small"
                    href="https://www.facebook.com/sharer.php?u={{ $currentUrl }}&title={{ $pageTitle }}"
                    target="_blank">
                    <i class="icon el-icon-facebook"></i>
                </a>

                <a class="social-link btn btn-default btn-small"
                    href="https://twitter.com/intent/tweet?text={{ $pageTitle }}&url={{ $currentUrl }}&via=headofficebd"
                    target="_blank">
                    <i class="icon el-icon-twitter"></i>
                </a>

                <a class="social-link btn btn-default btn-small"
                    href="https://www.linkedin.com/shareArticle?mini=true&url={{ $currentUrl }}&title={{ $pageTitle }}"
                    target="_blank">
                    <i class="icon el-icon-linkedin"></i>
                </a>

                <a class="social-link btn btn-default btn-small"
                    href="https://pinterest.com/pin/create/button/?url={{ $currentUrl }}&description={{ $pageTitle }}"
                    target="_blank">
                    <i class="icon el-icon-pinterest"></i>
                </a>
            </div>

            <div class="clearfix"></div>
    </article>
@endsection
@section('sidebar')
    @include('layouts.includes.sidebar')
@endsection
