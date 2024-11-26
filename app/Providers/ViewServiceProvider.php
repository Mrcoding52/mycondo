<?php

namespace App\Providers;

use App\Http\ViewComposers\servComposer;
use App\Http\ViewComposers\TypeComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', servComposer::class);
        View::composer('*', TypeComposer::class);
    }
}
