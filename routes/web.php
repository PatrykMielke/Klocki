<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});



// Posts

Route::get('/posty', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/edit/{post}', [PostController::class, 'edit']);
Route::get('/post/{post}', [PostController::class, 'show']);
//Route::get('/post/{post}', [PostController::class, 'create']);

Route::post('/post/create', [PostController::class, 'store']);
Route::put('/post/edit/{post}', [PostController::class, 'update']);
Route::delete('/post/destroy/{post}', [PostController::class, 'destroy']);
