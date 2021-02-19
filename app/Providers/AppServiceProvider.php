<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        /**
     * Bootstrap any application services.
     */
        //Paginator::useBootstrap();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }    
   
}
