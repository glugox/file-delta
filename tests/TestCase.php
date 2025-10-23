<?php

namespace Tests;


use Orchestra\Testbench\TestCase as Orchestra;
use Glugox\FileDelta\FileDeltaServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FileDeltaServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app)
    {
        // If you need to override config
        $app['config']->set('app.key', 'base64:' . base64_encode(random_bytes(32)));
    }
}