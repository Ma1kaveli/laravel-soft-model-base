<?php

namespace SoftModelBase\Providers;

use Illuminate\Support\ServiceProvider;

class SoftModelBaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register config
        $this->mergeConfigFrom(
            __DIR__.'/../../config/soft-model-base.php',
            'soft-model-base'
        );
    }

    public function boot()
    {
        // Publisg config
        $this->publishes([
            __DIR__.'/../../config/soft-model-base.php' => config_path('soft-model-base.php'),
        ], 'soft-model-base-config');
    }
}