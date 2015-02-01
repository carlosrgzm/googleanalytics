# share-laravel
Plugin for Laravel 4 just to include Google Analytics script in your views

[![Build Status](https://travis-ci.org/carlosrgzm/googleanalytics.svg?branch=master)](https://travis-ci.org/carlosrgzm/googleanalytics)
[![Coverage Status](https://coveralls.io/repos/carlosrgzm/googleanalytics/badge.svg)](https://coveralls.io/r/carlosrgzm/googleanalytics)
[![Latest Stable Version](https://poser.pugx.org/carloscsrm/googleanalytics/v/stable.svg)](https://packagist.org/packages/carloscsrm/googleanalytics) 
[![Total Downloads](https://poser.pugx.org/carloscsrm/googleanalytics/downloads.svg)](https://packagist.org/packages/carloscsrm/googleanalytics) 
[![Latest Unstable Version](https://poser.pugx.org/carloscsrm/googleanalytics/v/unstable.svg)](https://packagist.org/packages/carloscsrm/googleanalytics) 
[![License](https://poser.pugx.org/carloscsrm/googleanalytics/license.svg)](https://packagist.org/packages/carloscsrm/googleanalytics)

## Installation

1. Add `carloscsrm/googleanalytics` to `composer.json`.

 > "carloscsrm/googleanalytics": "1.*"

2. Run composer update to pull down the latest version of Google Analytics package.

3. Now open up app/config/app.php and add the service provider to your providers array.

 >  'providers' => array(
        'Carloscsrm\Googleanalytics\GoogleanalyticsServiceProvider',
    ),

The Alias is automatically added by the system, you don't need add it manually. The alias is **Googleanalytics**

## Configuration

Run `php artisan config:publish carloscsrm/googleanalytics` and modify the config file with your own Analytics ID.

## Usage

For using this package you can add this code in your templates

`{{Googleanalytics::render()}}`

