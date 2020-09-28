<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.categories', function($view){
            $categories=\App\Models\Category::withTranslation(\App::getLocale())->get();
            $view->with(compact('categories'));
        });

        view()->composer('partials.features', function($view){
            $features=\App\Models\Feature::withTranslation(\App::getLocale())->get();
            $view->with(compact('features'));
        });

        view()->composer('partials.sertificat', function($view){
            $sertificats=\App\Models\Sertificat::all();
            $view->with(compact('sertificats'));
        });

        view()->composer('partials.otziv', function($view){
            $comments=\App\Models\Comment::where('status', 1)->get();
            $view->with(compact('comments'));
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
