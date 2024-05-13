<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $system = \App\Models\System::first();
        $header = \App\Models\Component\Header::first();
        view()->share('system', $system);
        view()->share('header', $header);
    }
}
