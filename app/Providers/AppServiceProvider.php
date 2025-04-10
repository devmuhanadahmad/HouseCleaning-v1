<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;

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
        Paginator::defaultView('pagination::vendor.pagination.bootstrap-5');
        Paginator::defaultSimpleView('pagination::vendor.pagination.bootstrap-5');

        $settings = Cache::get('app-settings');
        if (!$settings) {
            //dd($settings);
            $settings = Setting::all();
            Cache::put('app-settings', $settings);
        }

        foreach ($settings as $config) {
            config()->set($config->name, $config->value);
        }


    }
}
