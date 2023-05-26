<?php
namespace Boilerplate\Providers;

use Illuminate\Support\ServiceProvider;

class BoilerplateProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'boilerplate');
    }
}