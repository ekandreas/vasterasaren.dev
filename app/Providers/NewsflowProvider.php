<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\NewsflowApi;

class NewsflowProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('cards.index', function ($view) {
            $data = (new NewsflowApi)->data();
            $view->with('newsflow', $data);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
