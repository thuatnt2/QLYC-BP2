<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Repositories\OrderRepositoryInterface;
use App\Contracts\Repositories\KindRepositoryInterface;
use App\Repositories\Eloquent\OrderRepositoryEloquent;
use App\Repositories\Eloquent\KindRepositoryEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
        $this->app->bind(OrderRepositoryInterface::class, OrderRepositoryEloquent::class);
        $this->app->bind(KindRepositoryInterface::class, KindRepositoryEloquent::class);
    }
}
