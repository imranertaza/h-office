<aside class="sidebar secondary sidebar-1 col-sm-3 ac-hide-until-ready ac-hidden-until-ready" role="complementary">
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
