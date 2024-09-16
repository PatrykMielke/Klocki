<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Home
Route::get('/', function () {
    return view('index');
});
Route::get('/kontakt', function () {
    return view('contact');
});

// Auth

Route::get('/logowanie', function () {
    return view('login');
});
Route::get('/rejestracja', function () {
    return view('register');
});



// Posts

//Route::resource('post', PostController::class);

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/edit/{post}', [PostController::class, 'edit']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::post('/post/create', [PostController::class, 'store']);
Route::patch('/post/edit/{post}', [PostController::class, 'update']);
Route::delete('/post/destroy/{post}', [PostController::class, 'destroy']);

// Shop

Route::get('/sklep', function () {
    return view('index');
});


