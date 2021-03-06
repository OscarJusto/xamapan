<?php

namespace App\Providers;

use App\Models\Category;
use App\View\Components\navigation;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

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
        //
        // Schema::defaultStringLength(191);
        //
        Paginator::useBootstrap();

        // View::share('categories', Category::all());
        Blade::component('components.navigation', navigation::class);
        
        
    }
}
