<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return back();
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blogs/{slug}', 'showBlog')->name('blog.show');
    Route::get('/blogs/category/{slug}', 'blogsByCategory')->name('blogs.byCategory');
    Route::get('/portfolios', 'portfolios')->name('portfolios');
    Route::get('/portfolios/{slug}', 'showPortfolio')->name('portfolios-details');
});