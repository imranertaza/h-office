<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FrontendController extends Controller
{
    /**
     * Cache duration in minutes.
     */
    private const CACHE_TTL = 43200;

    /**
     * Display the home page with portfolios.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        try {
            $portfolios = Cache::remember('home_portfolios', self::CACHE_TTL, function () {
                return Portfolio::with(['images', 'featuredImage', 'categories'])
                    ->orderBy('sort_order', 'asc')
                    ->take(9)
                    ->get();
            });

            return view('home', compact('portfolios'));
        } catch (\Exception $e) {
            Log::error('Error fetching home portfolios: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'Unable to load portfolios. Please try again later.');
        }
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
     * Display the blog listing page with optional category filter.
     *
     * @param int|null $cat_id
     * @return \Illuminate\View\View
     */
    public function blogs(?int $cat_id = null)
    {
        try {
            $cacheKey = $cat_id ? "blogs_category_{$cat_id}" : 'blogs_all';

            $blogs = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($cat_id) {
                $query = Blog::with(['categories', 'featuredImage'])
                    ->orderBy('sort_order', 'asc');

                if ($cat_id) {
                    $query->whereHas('categories', fn($q) => $q->where('cat_id', $cat_id));
                }

                return $query->paginate(10); // Paginate for scalability
            });

            $categories = Cache::remember(
                'blog_categories',
                self::CACHE_TTL,
                fn() =>
                BlogCategory::where('status', 1)->get()
            );

            $latest_blog = $this->getLatestBlogs();

            return view('blog.index', compact('blogs', 'categories', 'latest_blog'));
        } catch (\Exception $e) {
            Log::error('Error fetching blogs: ' . $e->getMessage());
            return redirect()->route('blogs')->with('error', 'Unable to load blogs. Please try again later.');
        }
    }

    /**
     * Display a single blog post.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function showBlog(string $slug)
    {
        try {
            $blog = Cache::remember("blog_{$slug}", self::CACHE_TTL, function () use ($slug) {
                return Blog::with(['categories', 'sliderImages'])
                    ->where('slug', $slug)
                    ->where('status', '1')
                    ->firstOrFail();
            });

            $previousBlog = Cache::remember("blog_prev_{$blog->id}", self::CACHE_TTL, function () use ($blog) {
                return Blog::where('publish_date', '<', $blog->publish_date)
                    ->where('status', '1')
                    ->orderBy('publish_date', 'desc')
                    ->first();
            });

            $nextBlog = Cache::remember("blog_next_{$blog->id}", self::CACHE_TTL, function () use ($blog) {
                return Blog::where('publish_date', '>', $blog->publish_date)
                    ->where('status', '1')
                    ->orderBy('publish_date', 'asc')
                    ->first();
            });

            $categories = Cache::remember(
                'blog_categories',
                self::CACHE_TTL,
                fn() =>
                BlogCategory::where('status', 1)->get()
            );

            $latest_blog = $this->getLatestBlogs();

            // Add meta tags for SEO
            $meta = [
                'title' => $blog->meta_title ?? $blog->blog_title,
                'description' => $blog->short_des,
                'keywords' => $blog->meta_keyword,
                'og_url' => url()->current(),
                'og_title' => $blog->blog_title,
                'og_description' => $blog->short_des,
                'og_image' => $blog->featuredImage ? asset($blog->featuredImage->image_path) : null,
            ];

            return view('blog.single-blog', compact('blog', 'previousBlog', 'nextBlog', 'categories', 'latest_blog', 'meta'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('blogs')->with('error', 'Blog post not found.');
        } catch (\Exception $e) {
            Log::error('Error fetching blog: ' . $e->getMessage());
            return redirect()->route('blogs')->with('error', 'Unable to load blog post. Please try again later.');
        }
    }

    /**
     * Display blogs by category slug.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function blogsByCategory(string $slug)
    {
        try {
            $isUncategorised = $slug === 'uncategorised';
            $cacheKey = $isUncategorised ? 'blogs_uncategorised' : "blogs_category_{$slug}";

            $blogs = Cache::remember($cacheKey, self::CACHE_TTL, function () use ($isUncategorised, $slug) {
                return Blog::with(['featuredImage', 'categories'])
                    ->when($isUncategorised, fn($query) => $query->whereDoesntHave('categories'))
                    ->when(!$isUncategorised, function ($query) use ($slug) {
                        $category = BlogCategory::where('slug', $slug)->where('status', 1)->firstOrFail();
                        $query->whereHas('categories', fn($q) => $q->where('blog_category.cat_id', $category->cat_id));
                    })
                    ->orderBy('sort_order', 'asc')
                    ->paginate(10);
            });

            $category = $isUncategorised
                ? (object) ['cat_title' => 'Uncategorised', 'slug' => 'uncategorised']
                : BlogCategory::where('slug', $slug)->where('status', 1)->firstOrFail();

            $categories = Cache::remember(
                'blog_categories',
                self::CACHE_TTL,
                fn() =>
                BlogCategory::where('status', 1)->get()
            );

            $latest_blog = $this->getLatestBlogs();

            return view('blog.index', compact('blogs', 'categories', 'latest_blog', 'category'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('blogs')->with('error', 'Category not found.');
        } catch (\Exception $e) {
            Log::error('Error fetching blogs by category: ' . $e->getMessage());
            return redirect()->route('blogs')->with('error', 'Unable to load blogs. Please try again later.');
        }
    }

    /**
     * Display the portfolio listing page.
     *
     * @return \Illuminate\View\View
     */
    public function portfolios()
    {
        try {
            $portfolios = Cache::remember('portfolios_all', self::CACHE_TTL, function () {
                return Portfolio::with(['images', 'featuredImage', 'categories'])
                    ->orderBy('sort_order', 'asc')
                    ->paginate(12);
            });

            $categories = Cache::remember('portfolio_categories', self::CACHE_TTL, function () use ($portfolios) {
                return $portfolios->pluck('categories')
                    ->flatten()
                    ->unique('category_id')
                    ->values();
            });

            return view('portfolio.index', compact('portfolios', 'categories'));
        } catch (\Exception $e) {
            Log::error('Error fetching portfolios: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'Unable to load portfolios. Please try again later.');
        }
    }

    /**
     * Display a single portfolio.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function showPortfolio(string $slug)
    {
        try {
            $portfolio = Cache::remember("portfolio_{$slug}", self::CACHE_TTL, function () use ($slug) {
                return Portfolio::with(['images', 'sliderImages', 'categories'])
                    ->where('slug', $slug)
                    ->firstOrFail();
            });

            $related = Cache::remember("portfolio_related_{$portfolio->id}", self::CACHE_TTL, function () use ($portfolio) {
                return $portfolio->relatedPortfolios();
            });

            return view('portfolio.portfolios.details', compact('portfolio', 'related'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('portfolios')->with('error', 'Portfolio not found.');
        } catch (\Exception $e) {
            Log::error('Error fetching portfolio: ' . $e->getMessage());
            return redirect()->route('portfolios')->with('error', 'Unable to load portfolio. Please try again later.');
        }
    }

    /**
     * Get the latest blog posts for sidebar widget.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function getLatestBlogs()
    {
        return Cache::remember(
            'latest_blogs',
            self::CACHE_TTL,
            fn() =>
            Blog::select('blog_title', 'slug')
                ->latest('publish_date')
                ->take(5)
                ->get()
        );
    }
}
