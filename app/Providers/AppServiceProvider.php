<?php

namespace App\Providers;
//use  Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema; //Това се добавя



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //и това се добавя
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }


}
