<?php

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

Route::get('/', function(){
    return view('product');
});
Route::get('/search','PostController@search');
Route::delete('/deleteall','PostController@deleteAll');
Route::get('/crud','CrudController@create')->name('ajax');
Route::get('/post','PostController@index')->name('post');
Route::resource('posts','PostController');
Route::resource('cruds','CrudController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verification/{token}','Auth\RegisterController@verification');
Route::get('/file','FileController@index')->name('viewfile');
Route::get('/file/upload','FileController@create')->name('formfile');
Route::post('/file/upload','FileController@store')->name('uploadfile');
Route::delete('/file/{id}','FileController@destroy')->name('deletefile');
Route::get('/file/download/{id}','FileController@show')->name('downloadfile');
Route::get('/file/email/{id}','FileController@edit')->name('emailfile');
Route::post('/file/dropzone','FileController@dropzone')->name('dropzone');
Route::get('/login/facebook','Auth\LoginController@redirectToFacebook')->name('fblogin');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleFacebookCallback')->name('fbcallback');
Route::get('/login/twitter','Auth\LoginController@redirectToTwitter')->name('twlogin');
Route::get('/login/twitter/callback', 'Auth\LoginController@handleTwitterCallback')->name('twcallback');
Route::get('/login/google','Auth\LoginController@redirectToGoogle')->name('gologin');
Route::get('/login/google/callback', 'Auth\LoginController@handleGoogleCallback')->name('gocallback');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/checkout/stripe', 'CheckoutController@stripe')->name('stripe');
Route::post('/checkout/stripepayment', 'CheckoutController@stripePayment')->name('stripepayment');
Route::get('/detail/{id}', 'DetailController@detail')->name('detail');
