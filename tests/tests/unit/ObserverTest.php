<?php

namespace tests\tests\unit;

use patterns\observer\Observer;
use patterns\observer\Config;

/**
 * Class ObserverTest
 * @package tests\tests\unit
 */
class ObserverTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * @dataProvider getConfigProvider
     */
    public function testCheckCorrectWriteHistory($arrayConfig)
    {
        $observer = new Observer();
        $config = new Config();
        $config->attach($observer);
        $config->setConfig($arrayConfig);
        $history = $observer->getHistory();
        $this->assertEquals($arrayConfig, $history[0]->getConfig());
    }

    public function getConfigProvider()
    {
        return [
            [['test' => 'test']],
            [['test2' => 'test2']]
        ];
    }
}