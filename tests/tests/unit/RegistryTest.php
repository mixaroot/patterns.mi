<?php

namespace tests\tests\unit;

use patterns\registry\Registry;

/**
 * Модульные тесты для паттерна Реестр (Registry)
 * Class SingletonTest
 */
class RegistryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * Попытка извлечь значение по несуществующему имени
     * @expectedException \Exception
     * @throws \Exception
     */
    public function testGetNotExistName()
    {
        Registry::get('test');
    }

    /**
     * Проверяем не изменяются ли значения внутри класса Registry
     * @dataProvider getSetProvider
     */
    public function testSetGetNameWithValue($name, $value)
    {
        Registry::set($name, $value);
        $newValue = Registry::get($name);
        $this->assertEquals($value, $newValue);
    }

    public function getSetProvider()
    {
        return [
            [1, 2],
            ['test1', 'test2']
        ];
    }
}
