<?php

namespace tests\tests\unit;

use patterns\multiton\Json;

/**
 * Class MultitonTest
 * @package tests\tests\unit
 */
class MultitonTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * Проверяем работу паттерна Пул одиночек (Multiton)
     */
    public function testMultiton()
    {
        $oFirst = Json::getInstance('first');
        $oSecond = Json::getInstance('second');
        $oFirst2 = Json::getInstance('first');
        $oSecond2 = Json::getInstance('second');

        $this->assertSame($oFirst, $oFirst2);
        $this->assertSame($oSecond, $oSecond2);
    }
}