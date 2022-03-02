<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', \App\Http\Livewire\Pages\Landings\Home::class)->name('home');
Route::get('/blog', \App\Http\Livewire\Pages\Landings\Home::class)->name('blog');
Route::get('/departments', \App\Http\Livewire\Pages\Landings\Home::class)->name('departments');
Route::get('/products', \App\Http\Livewire\Pages\Landings\Home::class)->name('products');
Route::get('/about-us', \App\Http\Livewire\Pages\Landings\Home::class)->name('aboutus');
Route::get('/contact-us', \App\Http\Livewire\Pages\Landings\Home::class)->name('contactus');


// Auth Routes
Route::get('/login', \App\Http\Livewire\Pages\Auth\Login::class)->name('login');
Route::get('/password-request', \App\Http\Livewire\Pages\Auth\Login::class)->name('password.request');


//

Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('{categoryslug}/{blogslug}',  [\App\Http\Controllers\BlogController::class,'show'])->name('show');

});


Route::middleware('auth:sanctum')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


    Route::prefix('/blogs')->name('blogs.')->group(function () {
        Route::get('/', \App\Http\Livewire\Admin\Blogs\BlogsList::class)->name('list');
        Route::get('/create', \App\Http\Livewire\Admin\Blogs\NewBlog::class)->name('create');

    });

    Route::prefix('/categories')->name('categories.')->group(function () {
//        Route::get('/', \App\Http\Livewire\Admin\Blogs\BlogsList::class)->name('list');
        Route::get('/create', \App\Http\Livewire\Admin\Categories\CreateCategory::class)->name('create');

    });

    Route::prefix('/tags')->name('tags.')->group(function () {
//        Route::get('/', \App\Http\Livewire\Admin\Blogs\BlogsList::class)->name('list');
        Route::get('/create', \App\Http\Livewire\Admin\Tags\CreateTag::class)->name('create');

    });

    Route::prefix('/media')->name('media.')->group(function () {
        Route::get('/', \App\Http\Livewire\Admin\Media\Media::class)->name('index');

    });



});
