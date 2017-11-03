<?php

namespace App\Providers;


use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Carbon::setLocale('zh'); //时间本地化

        Schema::defaultStringLength(190);
        View::composer('*', function ($view) {
            $admin_layout = 'layouts.admin';
            $view->with(compact('admin_layout'));
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
