<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\MarchentRepository::class, \App\Repositories\MarchentRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EmployeeRepository::class, \App\Repositories\EmployeeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AgencyRepository::class, \App\Repositories\AgencyRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\StockRepository::class, \App\Repositories\StockRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\WilayaRepository::class, \App\Repositories\WilayaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\DairaRepository::class, \App\Repositories\DairaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CityRepository::class, \App\Repositories\CityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AddressRepository::class, \App\Repositories\AddressRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PackageRepository::class, \App\Repositories\PackageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OrderRepository::class, \App\Repositories\OrderRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TransactionRepository::class, \App\Repositories\TransactionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\HistoriqueRepository::class, \App\Repositories\HistoriqueRepositoryEloquent::class);
        //:end-bindings:
    }
}
