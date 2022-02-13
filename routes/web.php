<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', \App\Http\Livewire\Pages\Landings\Home::class);
Route::get('/posts', \App\Http\Livewire\Pages\Posts\ShowPosts::class);
