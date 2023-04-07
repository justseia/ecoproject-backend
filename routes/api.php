<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group([], function () {
    Route::post('/login', \App\Http\Controllers\API\Auth\LoginController::class);
    Route::post('/register', \App\Http\Controllers\API\Auth\RegisterController::class);
    Route::post('/me', \App\Http\Controllers\API\Auth\MeController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/posts', \App\Http\Controllers\API\Post\IndexController::class);
    Route::get('/posts/{post}', \App\Http\Controllers\API\Post\ShowController::class);

    Route::get('/blogs', \App\Http\Controllers\API\Blog\IndexController::class);
    Route::get('/blogs/{blog}', \App\Http\Controllers\API\Blog\ShowController::class);
});
