<?php

namespace App\Providers;

use App\Models\Menu;
use App\Policies\MenuPolicy;
use App\Models\Transaction;
use App\Policies\TransactionPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::policies(Menu::class, MenuPolicy::class);
        Gate::policies(Transaction::class, TransactionPolicy::class);
        Gate::policies(\App\Models\MenuImage::class, \App\Policies\MenuImagePolicy::class);
    }
}
