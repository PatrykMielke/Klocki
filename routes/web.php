<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});



// Posts

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'create']);
Route::get('/post/create', [PostController::class, 'edit']);
Route::post('/post/create', [PostController::class, 'store']);
Route::put('/post/{post}', [PostController::class, 'update']);
Route::delete('/post/{post}', [PostController::class, 'destroy']);
