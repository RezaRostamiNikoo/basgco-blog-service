<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', \App\Http\Livewire\Pages\Landings\Home::class);
Route::get('/posts', \App\Http\Livewire\Pages\Posts\ShowPosts::class);

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


    Route::prefix('/hamids')->name('blogs.')->group(function () {
        Route::get('/', \App\Http\Livewire\Admin\Blogs\BlogsList::class)->name('list');
        Route::get('/create', \App\Http\Livewire\Admin\Blogs\NewBlog::class)->name('create');

    });
});
