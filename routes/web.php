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
Route::get('/batafsil/{id}',  'App\Http\Controllers\SiteController@batafsil' ) -> name('batafsil');
Route::get('/my-order',  'App\Http\Controllers\SiteController@myorder' ) -> name('myorder');
Route::get('/search',  'App\Http\Controllers\SiteController@search' ) -> name('search');
Route::get('/customer-register', 'App\Http\Controllers\CustomerController@create')->name('customer-register');
Route::post('/customer-store',  'App\Http\Controllers\CustomerController@store')->name('customer-store');
Route::get('/customer-login', 'App\Http\Controllers\CustomerController@customerLogin')->name('customer-login');
Route::get('/show-book/{id}','App\Http\Controllers\SiteController@showBook')->name('showBook');
Route::get('/order/{id}','App\Http\Controllers\SiteController@order')->name('order');
Route::get('/orderStore','App\Http\Controllers\OrderController@orderStore')->name('orderStore');
//Admin routes
Route::prefix('admin')->middleware('auth')->group(function () {
   Route::get('/', function (){
      return redirect()->route('books.index');
   });
   Route::resource('books', 'App\Http\Controllers\Admin\BooksController');
   Route::resource('feedbacks', 'App\Http\Controllers\Admin\FeedbacksController');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
