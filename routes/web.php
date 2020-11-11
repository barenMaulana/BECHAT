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

// articles
Route::middleware('auth')->get('article', function () {
    return view('pages.article.index');
});

Route::middleware('auth')->get('article/create', function () {
    return view('pages.article.create');
});

// student | livewire
Route::get('student', function () {
    return view('pages.student.index');
});

// start comment
Route::get('/comment/{id}', 'CommentController@index')
    ->name('comment');

Route::view('tunggu_konfirmasi', 'pages.konfirmasi.index')
    ->name('tunggu_konfirmasi');

Route::get('/latihan', 'LatihanController@index')
    ->name('latihan');

Route::post('/store', 'LatihanController@store')
    ->name('latihan.store');

Route::get('/', 'HomeController@index')
    ->name('home');

Route::prefix('admin')
    ->namespace('admin')
    ->middleware('is_admin')
    ->group(function () {
        Route::get('/', 'AdminController@index')
            ->name('adminDashboard');

        Route::resource('status', 'StatusController');
    });

Route::prefix('user')
    ->namespace('User')
    ->middleware('auth', 'status')
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('userDashboard');

        Route::resource('profile', 'ProfileController');
        Route::resource('gallery', 'GalleryController');
    });

Auth::routes();

Route::get('/', 'HomeController@index')
    ->name('home');
