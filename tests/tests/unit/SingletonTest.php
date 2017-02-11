<?php

namespace tests\tests\unit;

use patterns\singleton\IniConfig;

/**
 * Модульные тесты для паттерна Одиночка (Singleton)
 * Class SingletonTest
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * Попытка создания объект через new.
     * В резулбтате чего получаем ошибку класса \Error
     * @expectedException \Error
     */
    public function testNewSingleton()
    {
        $oIniFile = new IniConfig();
    }

    /**
     * Попытка клонировать объект через clone
     * В резулбтате чего получаем ошибку класса \Error
     * @expectedException \Error
     */
    public function testCloneSingleton()
    {
        $oIniFile = IniConfig::getInstance();
        $oIniFile2 = clone $oIniFile;
    }

    /**
     * Попытка получить копию объекта через serialize и unserialize
     * В резулбтате чего получаем ошибку класса \PHPUnit_Framework_Exception (\Exception)
     * @expectedException \PHPUnit_Framework_Exception
     */
    public function testSerializeSingleton()
    {
        $oIniFile = IniConfig::getInstance();
        $oIniFileSerialize = serialize($oIniFile);
        $oIniFileUnSerialize = unserialize($oIniFileSerialize);
    }

    /**
     * Проверка, получаем ли каждый раз один и тотже объект
     */
    public function testCheckOneObject()
    {
        $oIniFile = IniConfig::getInstance();
        $oIniFile2 = IniConfig::getInstance();
        $this->assertSame($oIniFile, $oIniFile2);
    }

    /**
     * Проверка, на возвращение объекта нужного класса
     */
    public function testCheckInstance()
    {
        $oIniFile = IniConfig::getInstance();
        $this->assertInstanceOf(\patterns\singleton\IniConfig::class, $oIniFile);
    }
}
