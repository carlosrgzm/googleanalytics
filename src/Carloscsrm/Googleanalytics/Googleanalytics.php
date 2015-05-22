<?php namespace Carloscsrm\Googleanalytics;

class Googleanalytics
{

    public static function render()
    {
        $analyticsCode = config('googleanalytics::analyticsCode');
        $displayfeatures = config('googleanalytics::displayfeatures');

        return view('googleanalytics::googleanalytics', compact('analyticsCode', 'displayfeatures'));
    }

}
