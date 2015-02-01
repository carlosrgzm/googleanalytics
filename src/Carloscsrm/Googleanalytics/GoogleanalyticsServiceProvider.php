<?php namespace Carloscsrm\Googleanalytics;

use Illuminate\Support\ServiceProvider;

class GoogleanalyticsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('carloscsrm/googleanalytics');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'googleanalytics',
            function ($app) {
                return new Googleanalytics;
            }
        );

        $this->app->booting(
            function () {
                $loader = \Illuminate\Foundation\AliasLoader::getInstance();
                $loader->alias('Googleanalytics', 'Carloscsrm\Googleanalytics\GoogleanalyticsFacade');
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('googleanalytics');
    }

}
