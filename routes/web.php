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

Route::get('/post-list',[App\Http\Controllers\PostController::class, 'showPostList'])->name('post.list');

Route::get('/post-create', function () {
    return view('post.create');
})->name('post.create');

Route::get('/post-create-confirm', function () {
    return view('post.create_confirm');
})->name('post.create.confirm');

Route::get('/post-update', function () {
    return view('post.update');
})->name('post.update');

Route::get('/post-update-confirm', function () {
    return view('post.update_confirm');
})->name('post.update.confirm');

Route::get('/user-create',[App\Http\Controllers\UserController::class, 'createUser'])->name('user.create');

Route::get('/user-create-confirm', function () {
    return view('user.create_confirm');
})->name('user.create.confirm');

Route::get('/user-list', [App\Http\Controllers\UserController::class, 'showUserList'])->name('user.list');

Route::get('/user-profile/{id}', [App\Http\Controllers\UserController::class, 'showUser'])->name('user.profile');

Route::get('/user-update', function () {
    return view('user.update');
})->name('user.update');

Route::get('/user-update-confirm', function () {
    return view('user.update_confirm');
})->name('user.update.confirm');

Route::get('/change-password', function () {
    return view('user.change_password');
})->name('user.change.password');

Route::get('/upload-file', function () {
    return view('post.upload_file');
})->name('post.upload.file');