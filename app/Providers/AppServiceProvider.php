<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;


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
           if (app()->runningInConsole()) {

        $root = DB::connection('root');

        // LARAVELDB létrehozása
        $root->statement("CREATE DATABASE IF NOT EXISTS `laraveldb`
            CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

        // TANOSVENY létrehozása
        $root->statement("CREATE DATABASE IF NOT EXISTS `tanosveny`
            CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    }
    }
}
