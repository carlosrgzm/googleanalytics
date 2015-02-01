<?php
namespace Carloscsrm\Googleanalytics;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class Googleanalytics
{

    /**
     * @param String $urlToShare
     * @param array $params
     * @return mixed
     */
    public static function render($urlToShare, $params = array())
    {
        View::addNamespace('googleanalytics', __DIR__ . '/../../views');
        return View::make('googleanalytics::googleanalytics', compact('urlToShare', 'textToShare', 'twitterVia'));
    }
}