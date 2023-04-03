<?php

namespace App\Providers;

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
     * ページが読み込まれるたびに自動的に実行される
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //ownerから始まるURL
        if (request()->is('owner*')) {
            config(['session.cookie' => config('session.cookie_owner')]);
        }

        //adminから始まるURL
        if (request()->is('adimn*')) {
            config(['session.cookie' => config('session.cookie_admin')]);
        }
    }
}
