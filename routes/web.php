<?php

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioCategoryMap;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/blogs', function () {
    return view('blog.index');
})->name('blogs');
Route::get('/blogs/{slug}', function ($slug) {
    $blog = Blog::where('slug', $slug)->first();
    // dd($blog);
    return view('blog.single-blog', ['blog' => $blog]);
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
    return view('portfolio.portfolios.details', compact('portfolio','related'));
})->name('portfolios-details');
