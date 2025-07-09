<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        Blade::component('sweetalert.flash', 'sweetalert-flash');
        Blade::component('sweetalert.confirm-delete', 'sweetalert-confirm-delete');
        Blade::component('sweetalert.alert', 'sweetalert-alert');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
