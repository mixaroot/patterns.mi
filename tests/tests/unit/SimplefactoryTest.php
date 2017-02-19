<?php

namespace tests\tests\unit;

use patterns\simpleFactory\SimpleFactory;

class SimpleFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testCreate()
    {
        $oSimpleFactory = new SimpleFactory();
        $oIni = $oSimpleFactory->create();
        $this->assertInstanceOf('patterns\simpleFactory\AbstractFiles', $oIni);
    }
}