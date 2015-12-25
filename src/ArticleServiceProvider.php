<?php

namespace Investigatively\Article;

use Illuminate\Support\ServiceProvider;

class ArticleServiceProvider extends ServiceProvider{
  /**
   * Boot method for the service provider
   */
  public function boot(){
    /**
     * Load custom views for the package.
     */
    $this->loadViewsFrom(__DIR__.'/Views', 'investigatively');

    /**
     * Publish the package assets.
     */
    $this->publishes([
        __DIR__.'/Views' => base_path('resources/views/vendor/investigatively'),
        __DIR__.'/Controllers' => base_path('app/Http/Controllers/Investigatively'),
        __DIR__.'/Config/investigatively.php' => config_path('investigatively.php'),
    ]);

    $this->publishes([
        __DIR__.'/Assets' => public_path('vendor/investigatively'),
    ], 'public');

    /**
     * Register the routes file
     */
    if (! $this->app->routesAreCached()) {
      require __DIR__.'/Config/routes.php';
    }
  }

  /**
   * Register method for the package.
   */
  public function register(){
    
  }
}