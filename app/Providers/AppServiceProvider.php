<?php

namespace App\Providers;

use App\Http\Repositories\Contracts\MainPageRepositoryInterface;
use App\Http\Repositories\MainPageRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        MainPageRepositoryInterface::class=>MainPageRepository::class
    ];
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
        //
    }
}
