@extends('layouts.blog-detail')
@section('title', $blog->blog_title . '| h office')
@section('meta')
    <meta name="description" content="{{ $blog->meta_description }}">
    <meta name="keywords" content="{{ $blog->meta_keyword }}">
    <meta name="author" content="{{ $blog->author->name ?? 'admin' }}">
    <meta property="og:title" content="{{ $blog->blog_title }}" />
    <meta property="og:description" content="{{ $blog->meta_description }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ route('blog.show', $blog->slug) }}" />
    @if ($blog->sliderImages && count($blog->sliderImages) > 0)
        <meta property="og:image" content="{{ asset_path('blog', $blog->sliderImages[0]->image) }}" />
    @else
        <meta property="og:image" content="{{ asset_path('blog', $blog->featuredImage->image) }}" />
    @endif
    <meta property="og:site_name" content="h office" />
    <meta property="article:published_time" content="{{ \Carbon\Carbon::parse($blog->publish_date)->toIso8601String() }}" />
    <meta property="article:author" content="{{ $blog->author->name ?? 'admin' }}" />
@endsection
@section('body-class',
    'single single-post postid-352 single-format-standard footer-parallax ac_sticky_sidebars
    navtype-overlay ac-theme top-navbar ac-transparent-navbar-body wpb-js-composer js-comp-ver-4.3.5 vc_responsive')

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
    background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1.png') }}') no-repeat center;
    float: right;
    margin-right: -50px;
    }

    #next {
    background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center;
    float: left;
    margin-left: -50px;
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
    list-style: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 110% !important;
    }

    .slide {
    list-style: none;
    margin: 0 !important;
    width: 100% !important;
    }

    #next {
    background: url('{{ asset('/assets/content/plugins/logo-slider/arrows/arrow1-prev.png') }}') no-repeat center;
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
    list-style: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 102% !important;
    }

    .slide {
    list-style: none;
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
    list-style: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 100% !important;
    }

    .slide {
    list-style: none;
    margin: 0 !important;
    width: 100% !important;
    }
    }

    @media screen and (min-width:481px) and (max-width:640px) {
    #logo-slider-wraper {
    position: relative;
    width: 28% !important;
    left: 34px !important;
    }

    .slider-controls {
    position: absolute;
    top: 41px;
    width: 100% !important;
    }

    #logo-slider {
    background: #FFFFFF;
    height: 120px;
    list-style: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 100% !important;
    }

    .slide {
    list-style: none;
    margin: 0 !important;
    width: 100% !important;
    }
    }

    @media only screen and (min-width:641px) and (max-width:768px) {
    #logo-slider-wraper {
    position: relative;
    width: 78% !important;
    left: 34px !important;
    }

    .slider-controls {
    position: absolute;
    top: 41px;
    width: 100% !important;
    }

    #logo-slider {
    background: #FFFFFF;
    height: 120px;
    list-style: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 100% !important;
    left: -12px;
    }

    .slide {
    list-style: none;
    margin: 0 !important;
    width: 100% !important;
    }
    }

    @media only screen and (min-width:770px) {
    #logo-slider-wraper {
    position: relative;
    width: 990px !important;
    left: 34px !important;
    }

    .slider-controls {
    position: absolute;
    top: 41px;
    width: 100% !important;
    }

    #logo-slider {
    background: #FFFFFF;
    height: 120px;
    list-style: none;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
    width: 100% !important;
    }

    .slide {
    list-style: none;
    margin: 0 !important;
    width: 990px !important;
    }
    }
@endsection

@section('header-slider')
    @if (@empty($blog->sliderImages))
        <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'></div>
    @elseif(@count($blog->sliderImages) > 1)
        <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'>
            <div class="ac-royalSlider sliderContainer fullWidth clearfix ac_easy_slider no-caption square"
                data-show-title="1" data-show-excerpt="1" data-slider-size="square" data-delay="6000" data-autoplay="true"
                data-transition="slide" data-split-nav="" data-auto-height="false">
                <div class="royalSlider heroSlider rsMinW full-width-slider">
                    @foreach ($blog->sliderImages as $image)
                        <div class="rsContent">
                            <img class="rsImg" src="{{ asset_path('blog',$image->image) }}"
                                alt="{{ $image->caption ?? 'Blog Image' }}" />
                            <div class="infoBlock infoBlockLeftBlack rsABlock" data-fade-effect="" data-move-offset="10"
                                data-move-effect="bottom" data-speed="200">
                                <div class="caption">{{ $image->caption ?? 'Untitled' }}</div>
                                <div class="description">
                                    <div class="excerpt">{{ $image->description ?? '' }}</div>
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
    @else
        <div class="ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready">
            @if (!empty($blog->sliderImages[0]->image))
                <img class="featured-image" src="{{ asset_path('blog', $blog->sliderImages[0]->image) }}"
                    alt="MIB Product" />
            @elseif (!empty($blog->sliderImages[0]->video))
                    <style>
                        .ac-page-hero-img, .ac-page-hero-img>video{
                            background-color:#f8f8f8 !important;
                        }
                        </style>
                    <video autoplay muted loop id="myVideo" width="100%">
                        <source src="{{ null ??asset_path('blog_video', $blog->sliderImages[0]->video) }}" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
            @endif
        </div>

    @endif

@endsection

@section('main-content')
    <article
        class="post-352 post type-post status-publish format-standard has-post-thumbnail hentry category-product category-studio tag-bangladesh-accessories tag-bangladesh-products tag-bangladeshi-products tag-fine-products tag-made-in-bangladesh ac-hide-until-ready ac-hidden-until-ready">
        <div class="entry-content">
            <header>
                <h1><strong>{{ $blog->blog_title }}</strong></h1>
                <div class="row row-meta">
                    <span class="date">
                        <i class="el-icon-time icon"></i>
                        <a href="{{ route('blog.show', $blog->slug) }}" title="Permalink to {{ $blog->blog_title }}"
                            rel="bookmark">
                            <time class="entry-date"
                                datetime="{{ \Carbon\Carbon::parse($blog->publish_date)->toIso8601String() }}">
                                {{ \Carbon\Carbon::parse($blog->publish_date)->format('F j, Y') }}
                            </time>
                        </a>
                    </span>
                    <span class="author vcard">
                        <i class="el-icon-user icon"></i>
                        <a class="url fn n" href="{{ route('blogs', $blog->createdBy) }}"
                            title="View all posts by {{ $blog->author->name ?? 'admin' }}" rel="author">
                            {{ $blog->author->name ?? 'admin' }}
                        </a>
                    </span>
                    <span class="categories-links">
                        <i class="el-icon-folder-open icon"></i>
                        @forelse ($blog->categories as $category)
                            <a href="{{ route('blogs', $category->slug) }}" rel="category tag">
                                {{ $category->category_name }}
                            </a>
                            @if (!$loop->last)
                                ,
                            @endif
                        @empty
                            <a href="{{ route('blogs', 'uncategorized') }}" rel="category tag">
                                Uncategorized
                            </a>
                        @endforelse
                    </span>
                    @if ($blog->meta_keyword)
                        <span class="tags-links">
                            <i class="el-icon-tags icon"></i>
                            @foreach (explode(',', $blog->meta_keyword) as $keyword)
                                <a href="{{ url('tag/' . \Illuminate\Support\Str::slug(trim($keyword))) }}" rel="tag">
                                    {{ trim($keyword) }}
                                </a>
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </span>
                    @endif
                </div>
            </header>
            @php
                $shareUrl = urlencode(url()->full()); // current full URL
                $shareTitle = urlencode($portfolio->title ?? ($blog->blog_title ?? 'Share')); // fallback title
            @endphp
            {!! $blog->description !!}
            <div class="clearfix"></div>

            <div class="btn-group social-share">
                <button class="social-share-main btn btn-default btn-small">Share</button>

                <a class="social-link btn btn-default btn-small"
                    href="http://www.facebook.com/sharer.php?u={{ $shareUrl }}&title={{ $shareTitle }}"
                    target="_blank"><i class="icon el-icon-facebook"></i></a>

                <a class="social-link btn btn-default btn-small"
                    href="http://twitter.com/home/?status={{ $shareTitle }}%20-%20{{ $shareUrl }}%20via%20@headofficebd"
                    target="_blank"><i class="icon el-icon-twitter"></i></a>

                <a class="social-link btn btn-default btn-small"
                    href="http://linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}"
                    target="_blank"><i class="icon el-icon-linkedin"></i></a>

                <a class="social-link btn btn-default btn-small"
                    href="https://plus.google.com/share?url={{ $shareUrl }}" target="_blank"><i
                        class="icon el-icon-googleplus"></i></a>

                <a class="social-link btn btn-default btn-small"
                    href="http://pinterest.com/pin/create/button/?url={{ $shareUrl }}" target="_blank"><i
                        class="icon el-icon-pinterest"></i></a>
            </div>

            <div class="clearfix"></div>

            <footer>
                <div class="post-bottom-nav">
                    @if ($previousBlog)
                        <div class="prev">
                            <a href="{{ route('blog.show', $previousBlog->slug) }}" rel="prev">
                                <span class="entypo-icon-left-open"></span>Prev
                            </a>
                        </div>
                    @endif
                    @if ($nextBlog)
                        <div class="next">
                            <a href="{{ route('blog.show', $nextBlog->slug) }}" rel="next">
                                Next<span class="entypo-icon-right-open"></span>
                            </a>
                        </div>
                    @endif
                    <div class="clearfix"></div>
                </div>
            </footer>
        </div>

							<!-- comment form start -->
							{{-- <div id="respond" class="comment-respond">
								<h3 id="reply-title" class="comment-reply-title">Something to Say? <small><a
											rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond"
											style="display:none;">Cancel Reply</a></small></h3>
								<form action="#" method="get" id="commentform"
									class="comment-form">
									<p class="comment-notes">Your email address will not be published.</p>
									<div class="row">
										<div class="form-group col-sm-4">
											<input type="text" class="form-control" name="author" id="author" value=""
												size="22" aria-required='true' placeholder="Name">
										</div>
										<div class="form-group col-sm-4">
											<input type="email" class="form-control" name="email" id="email" value=""
												size="22" aria-required='true' placeholder="Email">
										</div>
										<div class="form-group col-sm-4">
											<input type="url" class="form-control" name="url" id="url" value=""
												size="22" placeholder="Website">
										</div>
									</div>

									<div class="form-group">
										<textarea name="comment" id="comment" class="form-control" rows="5"
											aria-required="true" placeholder="Comment"></textarea>
									</div>
									<p class="form-submit">
										<input name="submit" type="submit" id="submit" class="submit"
											value="Post Comment" />
										<input type='hidden' name='comment_post_ID' value='609' id='comment_post_ID'>
										<input type='hidden' name='comment_parent' id='comment_parent' value='0'>
									</p>
								</form>
							</div><!-- #respond --> --}}

							<!-- comment form end -->
    </article>
@endsection
@section('sidebar')
    @include('layouts.includes.sidebar')
@endsection
