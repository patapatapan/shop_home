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

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/', 'SiteController@index');
    Route::get('/shop', 'SiteController@shop');
    Route::get('/contact', 'SiteController@contact');
    Route::get('/products_details', 'SiteController@details');
    Route::get('/about', 'SiteController@about');
    Route::get('/blog', 'SiteController@blog');
    Route::get('/blog1', 'SiteController@blog_details');
    Route::get('/login', 'SiteController@login');
    Route::get('/cart', 'SiteController@cart');
    Route::get('/elements', 'SiteController@elements');
    Route::get('/confirmations', 'SiteController@confirmations');
    Route::get('/checkout', 'SiteController@checkout');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
