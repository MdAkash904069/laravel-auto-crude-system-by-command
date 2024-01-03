<?php
namespace Akash\AutoCrudeGenerator;
use Illuminate\Support\ServiceProvider;

class AutoCrudeServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app()->bind('auto-crude-generator', function($app){
            return new \Akash\AutoCrudeGenerator\AutoCrude();
        });
    }
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        //
    }
}