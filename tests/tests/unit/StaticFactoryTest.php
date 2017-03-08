<?php

namespace tests\tests\unit;

use patterns\staticFactory\StaticFactory;

class StaticFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testStaticFactory()
    {
        $this->assertInstanceOf(
            'patterns\staticFactory\InterfaceForFactory',
            StaticFactory::factory('json')
        );
        $this->assertInstanceOf(
            'patterns\staticFactory\InterfaceForFactory',
            StaticFactory::factory('ini')
        );
    }
}