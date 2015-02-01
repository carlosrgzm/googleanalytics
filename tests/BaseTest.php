<?php

use Carloscsrm\Googleanalytics\Googleanalytics;

class BaseTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
    }

    public function testConstructs()
    {
        $instance = new Googleanalytics;
        $this->assertInstanceOf('Carloscsrm\Googleanalytics\Googleanalytics', $instance);
    }
}
