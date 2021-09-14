<?php

namespace App\Providers; 

use Illuminate\Support\ServiceProvider;
use ConsoleTVs\Charts\Registrar as Charts;
use Fidum\ChartTile\Charts\Chart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        if($this->app->environment() === 'production') {
            $this->app['request']->server->set('HTTPS', true);         
        }

        $charts->register([
            \App\Charts\DailyUsersChart::class,
            \App\Charts\VendorOrdersChart::class,
            \App\Charts\DishOrdersChart::class,
        ]);
        
    }
}
