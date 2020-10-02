<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes(['register' => false]);

Route::get('/', 'IndexController@index')->name('/');
Route::middleware('auth:player')->group(function () {
    Route::get('profile/edit', 'PlayerProfileController@edit')->name('player.profile.edit');
    Route::post('profile/{id}', 'PlayerProfileController@update')->name('player.profile.update');
    Route::get('profile/password/', 'PlayerProfileController@showChangePasswordForm')->name('player.password.edit');
    Route::post('profile/password/{id}', 'PlayerProfileController@updatePassword')->name('player.password.update');
});

Route::get('news', 'NewsController@index')->name('news.index');
Route::get('news/show/{slug}', 'NewsController@show')->name('news.show');
Route::get('news/search', 'NewsController@search')->name('news.search');

Route::get('/home', 'HomeController@index')->name('home');

Route::view('about', 'about')->name('about');
Route::view('coaches', 'coaches')->name('coaches');
Route::view('contact', 'contact')->name('contact');
Route::view('gallery', 'gallery')->name('gallery');
Route::view('schedule', 'schedule')->name('schedule');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
