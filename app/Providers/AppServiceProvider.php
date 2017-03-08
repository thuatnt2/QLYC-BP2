<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Repositories\OrderRepositoryInterface;
use App\Contracts\Repositories\KindRepositoryInterface;
use App\Contracts\Repositories\CategoryRepositoryInterface;
use App\Contracts\Repositories\PurposeRepositoryInterface;
use App\Contracts\Repositories\UserRepositoryInterface;
use App\Contracts\Repositories\UnitRepositoryInterface;
use App\Repositories\Eloquent\OrderRepositoryEloquent;
use App\Repositories\Eloquent\KindRepositoryEloquent;
use App\Repositories\Eloquent\CategoryRepositoryEloquent;
use App\Repositories\Eloquent\UserRepositoryEloquent;
use App\Repositories\Eloquent\PurposeRepositoryEloquent;
use App\Repositories\Eloquent\UnitRepositoryEloquent;

use App\Http\ViewComposers\OrderViewComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['admin.orders.index', 'admin.orders.edit'], OrderViewComposer::class);
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
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepositoryEloquent::class);
        $this->app->bind(PurposeRepositoryInterface::class, PurposeRepositoryEloquent::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepositoryEloquent::class);
        $this->app->bind(UnitRepositoryInterface::class, UnitRepositoryEloquent::class);
        
    }
}
