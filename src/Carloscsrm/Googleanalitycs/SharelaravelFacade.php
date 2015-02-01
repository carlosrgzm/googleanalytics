<?php
namespace Carloscsrm\Sharelaravel;

use Illuminate\Support\Facades\Facade;

class SharelaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sharelaravel';
    }
}