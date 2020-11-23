<?php

namespace App\Providers\API\V1;

use App\Services\API\V1\Interfaces\OrderInterface;
use App\Services\API\V1\Services\Order\OrderService;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OrderInterface::class, OrderService::class);

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
