<?php

namespace App\Providers;

use App\Http\Livewire\Components\Baners\Baner;
use App\Http\Livewire\Components\Sections\Section;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('section',Section::class);
        Blade::component('baner',Baner::class);
    }
}
