<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route('post.list');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {
    //post list
    Route::get('/post/list', [App\Http\Controllers\PostController::class, 'showPostList'])->name('post.list');
    //post delete
    Route::get('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'deletePost'])->name('post.delete');
    //post create
    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'createPost'])->name('post.create');
    Route::post('/post/create', [App\Http\Controllers\PostController::class, 'savePost'])->name('post.store');
    //post create confirm
    Route::get('/post/create-confirm', [App\Http\Controllers\PostController::class, 'confirmCreatePost'])->name('post.create.confirm');
    Route::post('/post/create-confirm', [App\Http\Controllers\PostController::class, 'submitConfirmCreatePost'])->name('post.create.confirm');
    //post edit
    Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'showPostEdit'])->name('post.edit');
    Route::post('/post/edit/{id}/confirm', [App\Http\Controllers\PostController::class, 'submitPostEditView'])->name('post.edit.store');
    //post edit confirm
    Route::get('/post/edit-confirm/{id}', [App\Http\Controllers\PostController::class, 'showPostEditConfirmView'])->name('post.confirm');
    Route::post('/post/edit-save/{id}', [App\Http\Controllers\PostController::class, 'submitPostEditConfirmView'])->name('post.edit.save');
    //user profile
    Route::get('/user/profile/{id}', [App\Http\Controllers\UserController::class, 'showUser'])->name('user.profile');
    //user edit
    Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'showUserEdit'])->name('user.edit');
    Route::post('/user/edit/{id}/confirm', [App\Http\Controllers\UserController::class, 'submitUserEditView'])->name('user.edit.store');
    //user edit confirm
    Route::get('/user/edit-confirm/{id}', [App\Http\Controllers\UserController::class, 'showUserEditConfirmView'])->name('user.confirm');
    Route::post('/user/edit-save/{id}', [App\Http\Controllers\UserController::class, 'submitUserEditConfirmView'])->name('user.edit.save');
    Route::get('user/change-password/{id}', [App\Http\Controllers\UserController::class, 'changePassword'])->name('user.change.password');
    Route::post('/user/change-password', [App\Http\Controllers\UserController::class, 'savePassword'])->name('change.password');
    Route::get('/post/download', [App\Http\Controllers\PostController::class, 'downloadPostCSV'])->name('post.download');
    Route::get('/post/upload', [App\Http\Controllers\PostController::class, 'showPostUploadView'])->name('upload.file');
    Route::post('/post/upload', [App\Http\Controllers\PostController::class, 'submitPostUploadView'])->name('upload.file');
});

// only admin authorized
Route::group(['middleware' => ['admin']], function () {
    //user create
    Route::get('/user/create', [App\Http\Controllers\UserController::class, 'createUser'])->name('user.create');
    Route::post('/user/create', [App\Http\Controllers\UserController::class, 'saveUser'])->name('user.store');
    //user create confirm
    Route::get('/user/create-confirm', [App\Http\Controllers\UserController::class, 'confirmCreateUser'])->name('user.create.confirm');
    Route::post('/user/create-confirm', [App\Http\Controllers\UserController::class, 'submitConfirmCreateUser'])->name('user.create.confirm');
    //user list
    Route::get('/user/list', [App\Http\Controllers\UserController::class, 'showUserList'])->name('user.list');
    //user delete
    Route::get('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteUser'])->name('user.delete');
});
