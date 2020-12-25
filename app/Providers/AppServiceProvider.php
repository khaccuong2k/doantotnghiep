<?php

namespace App\Providers;

use App\Models\Countrys;
use App\Models\Types;
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
        view()->composer('page.header',function($view){
            $categories = Types::all();
            $view->with('type',$categories);
        }); 

        view()->composer('page.footer',function($view){
            $categories = Types::all();
            $view->with('type',$categories);
        }); 

        view()->composer('page.footer',function($view){
            $coutries = Countrys::all();
            $view->with('coutries',$coutries);
        }); 
    }
}
