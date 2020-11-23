<?php

namespace App\Providers\API\V1;

use App\Services\API\V1\Interfaces\FoodInterface;
use App\Services\API\V1\Services\Food\FoodService;
use Illuminate\Support\ServiceProvider;

class FoodServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FoodInterface::class, FoodService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
