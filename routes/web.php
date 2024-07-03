<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/comment/', [CommentController::class, 'create'])->name('commentSreate');
    Route::post('/posts/{post}', [CommentController::class, 'store'])->name('commentStore');
});

Route::get('/publication', [PostController::class, 'index'])->name('publication');
Route::get('/show',[PostController::class,'show'])->name('show');
Route::middleware('auth')->group(function () {
    Route::get('/post/', [PostController::class, 'create'])->name('postCreate');
    Route::post('/posts/', [PostController::class, 'store'])->name('postStore');
});

require __DIR__.'/auth.php';
