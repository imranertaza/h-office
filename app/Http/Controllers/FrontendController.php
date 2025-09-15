<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    /**
     * Display the home page with portfolios.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        $portfolios = Portfolio::with(['images', 'featuredImage', 'categories'])
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('home', compact('portfolios'));
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Display the blog listing page.
     *
     * @return \Illuminate\View\View
     */
    public function blogs($cat_id = null)
    {
        $query = Blog::with(['categories', 'featuredImage'])
            ->orderBy('sort_order', 'asc');

        if ($cat_id) {
            $query->whereHas('categories', function ($q) use ($cat_id) {
                $q->where('cat_id', $cat_id);
            });
        }

        $blogs = $query->get();

        $categories = BlogCategory::where('status', 1)->get();
        $latest_blog = Blog::select('blog_title', 'slug')
            ->latest('publish_date')
            ->take(5)
            ->get();

        return view('blog.index', compact('blogs', 'categories', 'latest_blog'));
    }

    /**
     * Display a single blog post.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function showBlog($slug)
    {
        $blog = Blog::with(['categories', 'sliderImages'])
            ->where('slug', $slug)
            ->where('status', '1')
            ->firstOrFail();

        $previousBlog = Blog::where('publish_date', '<', $blog->publish_date)
            ->where('status', '1')
            ->orderBy('publish_date', 'desc')
            ->first();

        $nextBlog = Blog::where('publish_date', '>', $blog->publish_date)
            ->where('status', '1')
            ->orderBy('publish_date', 'asc')
            ->first();

        $categories = BlogCategory::all();
        $latest_blog = Blog::select('blog_title', 'slug')
            ->latest('publish_date')
            ->take(5)
            ->get();

        return view('blog.single-blog', compact('blog', 'previousBlog', 'nextBlog', 'categories', 'latest_blog'));
    }

    public function blogsByCategory($slug)
    {
        $isUncategorised = $slug === 'uncategorised';
        $blogs = Blog::with(['featuredImage', 'categories'])
            ->when($isUncategorised, function ($query) {
                $query->whereDoesntHave('categories');
            })
            ->when(!$isUncategorised, function ($query) use (&$category, $slug) {
                $category = BlogCategory::where('slug', $slug)->where('status', 1)->firstOrFail();
                $query->whereHas('categories', function ($q) use ($category) {
                    $q->where('blog_category.cat_id', $category->cat_id);
                });
            })
            ->orderBy('sort_order', 'asc')
            ->get();
    
        // Fallback category object for uncategorised
        if ($isUncategorised) {
            $category = (object)[
                'cat_title' => 'Uncategorised',
                'slug' => 'uncategorised'
            ];
        }
    
        $categories = BlogCategory::where('status', 1)->get();
    
        $latest_blog = Blog::select('blog_title', 'slug')
            ->latest('publish_date')
            ->take(5)
            ->get();
    
        return view('blog.index', compact('blogs', 'categories', 'latest_blog', 'category'));
    }
    

    /**
     * Display the portfolio listing page.
     *
     * @return \Illuminate\View\View
     */
    public function portfolios()
    {
        $portfolios = Portfolio::with(['images', 'featuredImage', 'categories'])
            ->orderBy('sort_order', 'asc')
            ->get();
        $categories = PortfolioCategory::all();

        return view('portfolio.index', compact('portfolios', 'categories'));
    }

    /**
     * Display a single portfolio.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function showPortfolio($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)
            ->with(['images', 'sliderImages', 'categories'])
            ->firstOrFail();
        $related = $portfolio->relatedPortfolios();

        return view('portfolio.portfolios.details', compact('portfolio', 'related'));
    }
}
