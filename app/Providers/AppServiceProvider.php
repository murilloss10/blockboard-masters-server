<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::enablePasswordGrant();
        
        Passport::tokensCan([
            'admin'     => 'Admin access',
            'player'    => 'Player access',
        ]);

        Passport::setDefaultScope([
            'player' => 'Player access',
        ]);
    }
}
