<?php

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioCategoryMap;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $portfolios = Portfolio::with(['images', 'featuredImage', 'categories'])->orderBy('sort_order', 'asc')->get();

    return view('home', compact('portfolios'));
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/blogs', function () {

    $blogs = Blog::with(['categories', 'featuredImage'])->orderBy('sort_order', 'asc')->get();
    return view('blog.index', compact('blogs'));
})->name('blogs');
Route::get('/blogs/{slug}', function ($slug) {
    $blog = Blog::with(['categories', 'sliderImages'])->where('slug', $slug)->first();
    $previousBlog = Blog::where('publish_date', '<', $blog->publish_date)
        ->where('status', '1')
        ->orderBy('publish_date', 'desc')
        ->first();

    $nextBlog = Blog::where('publish_date', '>', $blog->publish_date)
        ->where('status', '1')
        ->orderBy('publish_date', 'asc')
        ->first();
    return view('blog.single-blog', compact('previousBlog', 'nextBlog', 'blog'));
})->name('blog.show');
Route::get('/portfolios', function () {
    $portfolios = Portfolio::with(['images', 'featuredImage', 'categories'])->orderBy('sort_order', 'asc')->get();
    $categories = PortfolioCategory::all();
    // dd($portfolios);
    return view('portfolio.index', compact('portfolios', 'categories'));
})->name('portfolios');

Route::get('/portfolios/{slug}', function ($slug) {
    $portfolio = Portfolio::where('slug', $slug)
        ->with(['images', 'sliderImages', 'categories'])
        ->firstOrFail();
    $related = $portfolio->relatedPortfolios();
    return view('portfolio.portfolios.details', compact('portfolio', 'related'));
})->name('portfolios-details');
