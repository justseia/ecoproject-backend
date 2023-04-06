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

Route::get('/', \App\Http\Controllers\WEB\Post\IndexController::class);

//Route::get('/posts', \App\Http\Controllers\WEB\Post\IndexController::class);
Route::get('/posts/{post}', \App\Http\Controllers\WEB\Post\ShowController::class);

Route::get('/blogs', \App\Http\Controllers\WEB\Blog\IndexController::class);
Route::get('/blogs/{blog}', \App\Http\Controllers\WEB\Blog\ShowController::class);

Route::middleware('auth')->group(function () {

});

Auth::routes();
