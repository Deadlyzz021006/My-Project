<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(MyModelRepository::class, function ($app) {
            return new MyModelRepository();
        });

        $this->app->bind(MyModelService::class, function ($app) {
            return new MyModelService($app->make(MyModelRepository::class));
        });
    }
}
