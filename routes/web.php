<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Home
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/kontakt', function () {
    return view('contact');
});

// Auth

Route::get('/logowanie', function () {
    return view('auth.login');
});
Route::get('/rejestracja', function () {
    return view('auth.register');
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




require __DIR__.'/auth.php';
