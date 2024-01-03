<?php
namespace Akash\LaravelUniqueSlug;
use Illuminate\Support\ServiceProvider;

class UniqueSlugServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        //
    }
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('laravel-unique-slug', function($app) {
            return new \Akash\LaravelUniqueSlug\UniqueSlug();
        });
    }
}