<?php

namespace tests\tests\unit;

use patterns\dependencyInjection\UseConfig;

/**
 * Class DependencyInjectionTest
 * @package tests\tests\unit
 */
class DependencyInjectionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * @dataProvider getConfig
     */
    public function testReturnValues($config)
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('patterns\dependencyInjection\IniConfig')
            ->disableOriginalConstructor()
            ->getMock();
        // Configure the stub.
        $stub->method('getConfig')
            ->willReturn($config);
        $oUseConfig = new UseConfig($stub);
        $this->assertEquals($config, $oUseConfig->returnConfig());
    }

    public function getConfig()
    {
        return [
            [
                ['test' => 'test']
            ],
            [
                [1 => 1]
            ],
            [
                ['test' => 1]
            ]
        ];
    }
}