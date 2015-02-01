<?php
namespace Carloscsrm\Sharelaravel;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;

class Sharelaravel
{

    /**
     * @param String $urlToShare
     * @param array $params
     * @return mixed
     */
    public static function render($urlToShare, $params = array())
    {
        View::addNamespace('sharelaravel', __DIR__ . '/../../views');

        if (empty($urlToShare)) {
            $urlToShare = 'https://github.com/carlosrgzm/share-laravel';
        }

        if (is_array($params)) {
            if (array_key_exists('twitterVia', $params)) {
                $twitterVia = $params['twitterVia'];
            } else {
                $twitterVia = null;
            }

            if (array_key_exists('textToShare', $params)) {
                $textToShare = $params['textToShare'];
            } else {
                $textToShare = null;
            }
        }
        return View::make('sharelaravel::sharelaravel', compact('urlToShare', 'textToShare', 'twitterVia'));
    }
}