<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SideBarProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->hello();
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

    public function hello()
    {
        view()->composer('backend.include.header','App\Http\Composers\SideBar');
    }
}
