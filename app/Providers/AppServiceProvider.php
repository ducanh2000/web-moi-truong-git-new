<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;



use Illuminate\Support\Facades\DB;
use App\introduce;
use App\services;
use App\action;
use App\banner;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use URL;

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
        // view()->composer('header2',function($view){
        //     $intro = introduce::all();
        //     $intro1 = services::all();
        //     $view->with('intro',$intro);
        //     $view->with('intro1',$intro1);
        //     $intro2 = action::all();
        //     $view->with('intro2',$intro2);
        // });
        // view()->composer('header1',function($view){
        //     $intro = introduce::all();
        //     $view->with('intro',$intro);
        //     $intro1 = services::all();
        //     $view->with('intro1',$intro1);
        //     $intro2 = action::all();
        //     $view->with('intro2',$intro2);
        // });
        //URL::forceScheme('https');
        Schema::defaultStringLength(191);
        if(! $this->app->runningInConsole()) {
            $intro = introduce::all();
            $intro1 = services::all();
            $intro2 = action::all();
            $banner = DB::table('banner')->where('status',1)->limit(1)->get();
            View::share('intro', $intro);
            View::share('intro1', $intro1);
            View::share('intro2', $intro2);
            View::share('banner', $banner);
        }
    }
}
