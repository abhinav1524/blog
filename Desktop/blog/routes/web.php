<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/privacy-policy', [HomeController::class,'privacyPolicy']);
Route::get('/terms-condition', [HomeController::class,'termsandCondition']);
Route::get('/faq', [HomeController::class,'faq']);
Route::get('/error', [HomeController::class,'error']);
Route::get('/standard-format', [HomeController::class,'standardFormat']);

// post route for creating a post //
// Display all posts //
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show_post'])->name('posts.show');
Route::get('/posts/create', [PostController::class, 'create_post'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store_post'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit_post'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update_post'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'delete_post'])->name('posts.delete');

// dashboard //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
