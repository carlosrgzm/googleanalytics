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
        Config::addNamespace('googleanalytics', __DIR__ . '/../../config');
        View::addNamespace('googleanalytics', __DIR__ . '/../../view');

        $analyticsCode = Config::get('googleanalytics::analyticsCode');
        $displayfeatures = Config::get('googleanalytics::displayfeatures');

        return View::make('googleanalytics::googleanalytics', compact('analyticsCode','displayfeatures'));
    }
}