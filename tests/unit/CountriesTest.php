<?php
namespace iio\phplibphone;

use iio\phplibphone\Library\Countries;
use iio\localefacade\LocaleFacade;

class CountriesTest extends \PHPUnit_Framework_TestCase
{
    public function testLookup()
    {
        $lib = new Countries(new LocaleFacade('sv'));

        $this->assertEquals('USA', $lib->lookup('1'));
        $this->assertEquals('', $lib->lookup('0'));
    }
}
