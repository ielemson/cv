<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Portfolio;
use App\Blog;

Route::get('/', function () {
    $portfolios = Portfolio::all();
    $blogs = Blog::all();
    return view('welcome',compact('portfolios','blogs'));
});

Route::get('/blog/{slug}', function ($slug) {
    $recentBlogs = Blog::latest()->get();
    $tags = Blog::all();
    $blog = Blog::where('slug',$slug)->first();
    return view('blog',compact('blog','recentBlogs','tags'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// GROUPING OUR ADMIN ROUTES 
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/user', 'UsersController',['except'=>['show','create','store']]);
    Route::resource('/category', 'CategoryController');
    Route::resource('/portfolio', 'PortfolioController');
    Route::resource('/blog', 'BlogController');
});
