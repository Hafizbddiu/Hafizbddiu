<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;
use App\User;
use App\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    //    View::share('name','Hafiz dewan'); 
       View::composer('front-end.include.header',function($view){
            $view->with('categories',Category::where('publication_status', 1)->get());
       });
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
