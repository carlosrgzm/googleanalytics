<?php
namespace Carloscsrm\Googleanalytics;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class Googleanalytics
{

    /**
     * @return mixed
     */
    public static function render()
    {
        View::addNamespace('googleanalytics', __DIR__ . '/../../views');
        return View::make('googleanalytics::googleanalytics');
    }
}