<?php

namespace LBreda\LaravelLangDb\Models;

use Illuminate\Support\ServiceProvider;
use LBreda\LaravelLangDb\Console\Commands\RefreshLangDB;

class LaravelLangDBProvider extends ServiceProvider
{
    /**
     * Bootstraps the library events
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'langdb');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/langdb')
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                RefreshLangDB::class,
            ]);
        }

    }
}