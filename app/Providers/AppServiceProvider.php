<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;
use Blade;
use URL;

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
        /*
            Make Your Url Force Https 
        */
        // URL::forceScheme('https');
        //

        /*
            Bootstrap Pagination Style
        */
        Paginator::useBootstrap();
        //

        /***
            Blade Directive , example using : @example or @example('expression') 
        */
        Blade::directive('count',function($expression){
            return "<?php echo DB::table($expression)->count() ?>";
        });   
        //
    }
}