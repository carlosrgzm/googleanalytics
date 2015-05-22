<?php
namespace Carloscsrm\Googleanalytics;

use Illuminate\Support\Facades\Facade;

class GoogleanalyticsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'googleanalytics';
    }
}