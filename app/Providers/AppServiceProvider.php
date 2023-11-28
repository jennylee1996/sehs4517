<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        View::composer('layouts.app', function ($view) {
            $menus = Menu::all();
            $locale = session()->get('locale');
            $view->with('menus', $menus);
            $view->with('locale', $locale);
        });
    }
}
