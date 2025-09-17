<aside class="sidebar secondary sidebar-1 col-md-3 ac-hide-until-ready ac-hidden-until-ready" role="complementary">
    {{-- <section id="search-2" class=" widget widget_search">
        <form role="search" method="get" id="searchform" class="form-inline"
            action="http://h-office.com/">
            <input type="search" value="" name="s" id="s" class="form-control"
                placeholder="Search h office">
            <label class="hide" for="s">Search for:</label>
            <button type="submit" id="searchsubmit" class="btn btn-default searchsubmit"><i
                    class="entypo-icon-search"></i></button>
        </form>
    </section> --}}
    <section id="recent-posts-2" class="widget widget_recent_entries">
        <h3 class="widget-title">Recent Posts</h3>
        <ul>
            @foreach ($latest_blog as $item)
                <li>
                    <a href="{{ route('blog.show', $item->slug) }}">{{ $item->blog_title }}</a>
                </li>
            @endforeach
        </ul>
    </section>
    {{-- <section id="recent-comments-2" class=" widget widget_recent_comments">
        <h3 class="widget-title">Recent Comments</h3>
        <ul id="recentcomments"></ul>
    </section>
    <section id="archives-2" class=" widget widget_archive">
        <h3 class="widget-title">Archives</h3>
        <ul>
            <li><a href='../2015/11/index.html'>November 2015</a></li>
            <li><a href='../2015/10/index.html'>October 2015</a></li>
            <li><a href='../2015/09/index.html'>September 2015</a></li>
            <li><a href='../2015/08/index.html'>August 2015</a></li>
            <li><a href='../2015/07/index.html'>July 2015</a></li>
            <li><a href='../2015/06/index.html'>June 2015</a></li>
            <li><a href='../2015/05/index.html'>May 2015</a></li>
            <li><a href='../2015/04/index.html'>April 2015</a></li>
            <li><a href='../2015/03/index.html'>March 2015</a></li>
            <li><a href='../2015/02/index.html'>February 2015</a></li>
            <li><a href='../2015/01/index.html'>January 2015</a></li>
            <li><a href='../2014/12/index.html'>December 2014</a></li>
            <li><a href='../2014/11/index.html'>November 2014</a></li>
            <li><a href='../2014/10/index.html'>October 2014</a></li>
            <li><a href='../2014/09/index.html'>September 2014</a></li>
            <li><a href='../2014/08/index.html'>August 2014</a></li>
            <li><a href='../2014/07/index.html'>July 2014</a></li>
        </ul>
    </section> --}}
    <section id="categories-2" class="widget widget_categories">
        <h3 class="widget-title">Categories</h3>
        <ul>
            @foreach ($categories as $key => $cat)
                <li class="cat-item cat-item-{{ $key }}"><a
                        href="{{ route('blogs.byCategory', $cat->slug) }}">{{ $cat->category_name }}</a></li>
            @endforeach
            <li class="cat-item cat-item-1"><a href="{{ route('blogs.byCategory', 'uncategorised') }}">Uncategorized</a>
            </li>
        </ul>
    </section>
    <section id="ac_latest_portfolio-1" class="widget ac-latest-portfolio">
        @php
            $portfolio = \App\Models\Portfolio::with(['relatedImage', 'categories'])
                ->where('slug', 'google-bus-bangladesh')
                ->first();
        @endphp
        <h3 class="widget-title"></h3>
        <div
            class="ac-grid-col post-172 ac_portfolio type-ac_portfolio status-publish has-post-thumbnail hentry col-log-3 all experience ac-hide-until-ready ac-hidden-until-ready">
            <div class="ac-grid-post">
                <div class="image">
                    <a href="{{ route('portfolios-details', $portfolio->slug) }}">

                        <img class="grid-image" src="{{ asset_path('portfolio', $portfolio->relatedImage->image) }}"
                            alt="port_Gbus (17)">
                    </a>
                </div>
                <div class="text">
                    <a href="{{ route('portfolios-details', $portfolio->slug) }}">
                        <h3 class="ac-grid-title"><strong>{{ $portfolio->title }}</strong></h3>
                    </a>

                    <div class="ac-grid-terms">
                        @foreach ($portfolio->categories as $category)
                            <a href="" rel="tag">{{ $category->name }}</a>

                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach

                    </div>
                    <p class="excerpt">{{ $portfolio->short_description }}</p>
                    <div class="read-more"><a href="{{ route('portfolios-details', $portfolio->slug) }}">Continued</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
