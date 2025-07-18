<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        view()->composer('layouts.master', function($view){

            $categories = \App\Models\Category::all();
            $view->with(compact('categories'));
        });

        Paginator::useBootstrap();
    }
}
