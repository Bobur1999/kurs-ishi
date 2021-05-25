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

Route::get('/',  'App\Http\Controllers\SiteController@home' ) -> name('home');
Route::get('/shop',  'App\Http\Controllers\SiteController@shop' ) -> name('shop');
Route::get('/about',  'App\Http\Controllers\SiteController@about' ) -> name('about');
Route::get('/cantact',  'App\Http\Controllers\SiteController@cantact' ) -> name('cantact');
Route::post('/cantact', 'App\Http\Controllers\SiteController@feedbackStore')->name('cantact.store');

//Admin routes
Route::prefix('admin')->group(function () {
   Route::resource('books', 'App\Http\Controllers\Admin\BooksController');
   Route::resource('feedbacks', 'App\Http\Controllers\Admin\FeedbacksController');
});