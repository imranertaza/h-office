<?php

use App\Models\Blog;
use App\Models\Portfolio;
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
    $portfolios = Portfolio::with('images')->get();
    dd($portfolios);
    return view('portfolio.index');
})->name('portfolios');
Route::get('/portfolios/{slug}', function () {
    return view('portfolio.portfolios.details');
})->name('portfolios-details');
