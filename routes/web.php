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

Route::get('/', function () {
    return redirect('shop');
});

Route::get('about', function () {
    return redirect('page/about-us');
});

Route::get('/home', function () {
    return redirect('shop');
});

Auth::routes();

Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');
Route::get('page/about-us', 'AboutController@index')->name('about-us');
