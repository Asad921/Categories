<?php

namespace Categories;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Categories\Category');
        $this->app->bind('Categories',function() {
            return new \Categories\Facades\Cat;
         });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         dd('Category check');
        $this->loadMigrationsFrom(__DIR__.'/Database');
    }
}
