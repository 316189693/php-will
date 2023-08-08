<?php

namespace App\Providers;
use App\Jobs\Processor\AudioProccessor;
use Illuminate\Support\ServiceProvider;

class ProcessorProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AudioProccessor::class, function ($app) {
            return new AudioProccessor();
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
    public function provides()
    {
        return [AudioProccessor::class];
    }
}
