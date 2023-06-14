<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Controllers\WEB\Home\IndexController::class)->name('home.index');

Route::get('/posts', \App\Http\Controllers\WEB\Post\IndexController::class)->name('post.index');
Route::get('/posts/{post}', \App\Http\Controllers\WEB\Post\ShowController::class)->name('post.show');
Route::post('/posts', \App\Http\Controllers\WEB\Post\IndexController::class)->name('post.store');

Route::get('/blogs', \App\Http\Controllers\WEB\Blog\IndexController::class)->name('blog.index');
Route::get('/blogs/{blog}', \App\Http\Controllers\WEB\Blog\ShowController::class)->name('blog.show');
Route::post('/blogs', \App\Http\Controllers\WEB\Blog\IndexController::class)->name('blog.store');

Route::get('/cases', \App\Http\Controllers\WEB\Case\IndexController::class)->name('case.index');

Route::get('/about', \App\Http\Controllers\WEB\About\IndexController::class)->name('about.index');
Route::get('/contact', \App\Http\Controllers\WEB\Contact\IndexController::class)->name('contact.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', \App\Http\Controllers\WEB\Profile\IndexController::class)->name('profile.index');
});

Auth::routes();
