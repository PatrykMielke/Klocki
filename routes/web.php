<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});
Route::get('/kontakt', function () {
    return view('contact');
});



// Posts

Route::get('/posty', [PostController::class, 'index'])->name('posty');
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/edit/{post}', [PostController::class, 'edit']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::post('/post/create', [PostController::class, 'store']);
Route::put('/post/edit/{post}', [PostController::class, 'update']);
Route::delete('/post/destroy/{post}', [PostController::class, 'destroy']);

//Sklep

Route::get('/sklep', function () {
    return view('index');
});
