<?php

namespace sjaswinder82\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function register() {}

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'mypackage');
        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/mypackage'),
        ]);
        $this->publishes(
            [
                __DIR__ . '/database/migrations' => database_path('migrations')
            ],
            'migrations'
        );
        $this->publishes([
            __DIR__ . '/config/mypackage.php' => config_path('mypackage.php'),
        ], 'config');
    }
}
