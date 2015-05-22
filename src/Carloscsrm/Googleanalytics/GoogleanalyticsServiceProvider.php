<?php namespace Carloscsrm\Googleanalytics;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class GoogleanalyticsServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'googleanalytics');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/carloscsrm/googleanalytics'),
            __DIR__ . '/config/config.php' => config_path('googleanalytics.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Carloscsrm\Googleanalytics', function ($app) {
            return new Googleanalytics(config('googleanalytics'));
        });

        /*$this->app['toastr'] = $this->app->share(function ($app)
		{
			return new Toastr($app['session'], $app['config']);
		});*/
    }


    public function provides()
    {
        return ['googleanalytics'];
    }

}
