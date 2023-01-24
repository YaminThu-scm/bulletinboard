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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post-list', function () {
    return view('post/list');
});

Route::get('/post-create', function () {
    return view('post/create');
});

Route::get('/post-create-confirm', function () {
    return view('post/create_confirm');
});

Route::get('/post-update', function () {
    return view('post/update');
});

Route::get('/post-update-confirm', function () {
    return view('post/update_confirm');
});

Route::get('/user-create', function () {
    return view('user/create');
});

Route::get('/user-create-confirm', function () {
    return view('user/create_confirm');
});

Route::get('/user-list', function () {
    return view('user/list');
});

Route::get('/user-profile', function () {
    return view('user/profile');
});

Route::get('/user-update', function () {
    return view('user/update');
});

Route::get('/user-update-confirm', function () {
    return view('user/update_confirm');
});