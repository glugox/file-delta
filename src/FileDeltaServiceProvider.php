<?php

namespace Glugox\FileDelta;

use Illuminate\Support\ServiceProvider;

class FileDeltaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('file-delta', function () {
            return new FileDeltaManager();
        });
    }

    public function boot(): void
    {
        $this->publishes([
        __DIR__.'/../config/file-delta.php' => config_path('file-delta.php'),
    ], 'config');
    }
}
