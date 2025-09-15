@extends('layouts.blog-detail')

@section('title', 'MIB Spirit MADE IN BANGLADESH | h office')

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
    @php
        $imagePath = '/assets/uploads/blogs/';
    @endphp
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
                            <img class="rsImg" src="{{ asset($imagePath . $image->image) }}"
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
        <div class='ac-page-hero-img ac-no-container-padding ac-hide-until-ready ac-hidden-until-ready'>
            <img class="featured-image" src="{{ asset($imagePath . $blog->sliderImages[0]->image) }}" alt="MIB Product" />
        </div>
    @endif

@endsection

@section('main-content')
    @php
        $imagePath = '/assets/uploads/blogs/';
    @endphp
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
                        {{-- @dd($blog->categories) --}}
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

            {!! $blog->description !!}


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
    </article>
@endsection
@section('sidebar')
    @php
        $imagePath = '/assets/uploads/blogs/';
    @endphp
    <aside class="sidebar secondary sidebar-1 col-sm-3 ac-hide-until-ready ac-hidden-until-ready" role="complementary">
        <section id="search-2" class="widget widget_search">
            <form role="search" method="get" id="searchform" class="form-inline" action="{{ route('blogs') }}">
                <input type="search" value="" name="s" id="s" class="form-control"
                    placeholder="Search h office">
                <label class="hide" for="s">Search for:</label>
                <button type="submit" id="searchsubmit" class="btn btn-default searchsubmit"><i
                        class="entypo-icon-search"></i></button>
            </form>
        </section>
        <section id="recent-posts-2" class="widget widget_recent_entries">
            <h3 class="widget-title">Recent Posts</h3>
            <ul>
                <li><a href="{{ route('blogs', 'the-savings-include-a-us140-a134-stateroom-credit-on') }}">THE
                        SAVINGS INCLUDE A $US140 ($A134) STATEROOM CREDIT ON</a></li>
                <li><a href="{{ route('blogs', 'googlebuslaunch') }}">FORMAL LAUNCH OF ‘GOOGLE BUS’ IN
                        BANGLADESH</a></li>
                <li><a href="{{ route('blogs', 'madeinbangladesh') }}">MIB SPIRIT MADE IN BANGLADESH</a>
                </li>
            </ul>
        </section>
        <section id="recent-comments-2" class="widget widget_recent_comments">
            <h3 class="widget-title">Recent Comments</h3>
            <ul id="recentcomments"></ul>
        </section>
        <section id="archives-2" class="widget widget_archive">
            <h3 class="widget-title">Archives</h3>
            <ul>
                <li><a href="{{ route('home', '2015/11') }}">November 2015</a></li>
                <li><a href="{{ route('home', '2015/10') }}">October 2015</a></li>
                <li><a href="{{ route('home', '2015/09') }}">September 2015</a></li>
                <li><a href="{{ route('home', '2015/08') }}">August 2015</a></li>
                <li><a href="{{ route('home', '2015/07') }}">July 2015</a></li>
                <li><a href="{{ route('home', '2015/06') }}">June 2015</a></li>
                <li><a href="{{ route('home', '2015/05') }}">May 2015</a></li>
                <li><a href="{{ route('home', '2015/04') }}">April 2015</a></li>
                <li><a href="{{ route('home', '2015/03') }}">March 2015</a></li>
                <li><a href="{{ route('home', '2015/02') }}">February 2015</a></li>
                <li><a href="{{ route('home', '2015/01') }}">January 2015</a></li>
                <li><a href="{{ route('home', '2014/12') }}">December 2014</a></li>
                <li><a href="{{ route('home', '2014/11') }}">November 2014</a></li>
                <li><a href="{{ route('home', '2014/10') }}">October 2014</a></li>
                <li><a href="{{ route('home', '2014/09') }}">September 2014</a></li>
                <li><a href="{{ route('home', '2014/08') }}">August 2014</a></li>
                <li><a href="{{ route('home', '2014/07') }}">July 2014</a></li>
            </ul>
        </section>
        <section id="categories-2" class="widget widget_categories">
            <h3 class="widget-title">Categories</h3>
            <ul>
                <li class="cat-item cat-item-18"><a href="{{ route('home', 'experience') }}">Experience</a></li>
                <li class="cat-item cat-item-2"><a href="{{ route('home', 'food') }}">Food</a></li>
                <li class="cat-item cat-item-12"><a href="{{ route('home', 'product') }}">Product</a>
                </li>
                <li class="cat-item cat-item-3"><a href="{{ route('home', 'studio') }}">Studio</a></li>
                <li class="cat-item cat-item-1"><a href="{{ route('home', 'uncategorized') }}">Uncategorized</a></li>
            </ul>
        </section>
        <section id="ac_latest_portfolio-1" class="widget ac-latest-portfolio">
            <h3 class="widget-title"></h3>
            <div
                class='ac-grid-col post-172 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry ac-hide-until-ready ac-hidden-until-ready col-log-3 all experience ac-hide-until-ready ac-hidden-until-ready'>
                <div class='ac-grid-post'>
                    <div class='image'>
                        <a href="{{ route('portfolios', 'google-bus-bangladesh') }}">
                            <img class="grid-image"
                                src="{{ asset('assets/content/uploads/2015/01/port_Gbus-17-768x511.jpg') }}"
                                alt="port_Gbus (17)" />
                        </a>
                    </div>
                    <div class='text'>
                        <a href="{{ route('portfolios', 'google-bus-bangladesh') }}">
                            <h3 class='ac-grid-title'><strong>Google-Bus Bangladesh</strong></h3>
                        </a>
                        <div class='ac-grid-terms'><a href="{{ route('portfolios', 'experience') }}"
                                rel="tag">Experience</a></div>
                        <p class='excerpt'>Google, one of biggest brand in the world, is with the mission
                            to organize the world's information and make it universally accessible and
                            useful.</p>
                        <div class='read-more'><a href="{{ route('portfolios', 'google-bus-bangladesh') }}">Continued</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
@endsection
