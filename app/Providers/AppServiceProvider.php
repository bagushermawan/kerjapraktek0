<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        // @see: https://laravel-news.com/laravel-5-4-key-too-long-error
        Blade::directive('currency', function ( $expression ) { return "Rp <?php echo number_format($expression,0,',','.'); ?>"; });
        Schema::defaultStringLength(191);
        
    }
}
