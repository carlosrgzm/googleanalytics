<?php


class BaseTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
    }

    public function testConstructs()
    {
        $instance = new \Carloscsrm\Googleanalytics\Googleanalytics();
        $this->assertInstanceOf('Carloscsrm\Googleanalytics\Googleanalytics', $instance);
    }
}
