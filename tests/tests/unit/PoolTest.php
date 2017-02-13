<?php

namespace tests\tests\unit;

use patterns\pool\PoolIni;

/**
 * Class PoolTest
 * @package tests\tests\unit
 */
class PoolTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * Проверка паттерна Объектный пул (Pool)
     */
    public function testCheckPool()
    {
        $oPool = new PoolIni();
        $oIni = $oPool->get();
        $oPool->dispose($oIni);
        $oIni2 = $oPool->get();

        $this->assertSame($oIni, $oIni2);
    }
}