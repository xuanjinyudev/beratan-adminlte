<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Models\Article;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'services')->name('service');
});
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
});
Route::controller(ArticleController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'index')->name('product');
    Route::get('/product/{id}', 'show')->name('product.show');
});
Route::controller(GalleryController::class)->group(function () {
    Route::get('/gallery', 'index')->name('gallery');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Proteksi dashboard
Route::middleware('auth')->get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
})->name('dashboard');


Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', AdminArticleController::class);
});

