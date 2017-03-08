<?php

namespace tests\tests\unit;

use patterns\abstractFactory\IniFactory;
use patterns\abstractFactory\JsonFactory;
use patterns\abstractFactory\XmlFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testIni()
    {
        $oFactoryIni = new IniFactory();
        $oIni = $oFactoryIni->workWithFile('');
        $this->assertInstanceOf('patterns\abstractFactory\AbstractFiles', $oIni);
    }

    public function testJson()
    {
        $oFactoryJson = new JsonFactory();
        $oJson = $oFactoryJson->workWithFile('');
        $this->assertInstanceOf('patterns\abstractFactory\AbstractFiles', $oJson);
    }

    public function testXml()
    {
        $oFactoryXml = new XmlFactory();
        $oXml = $oFactoryXml->workWithFile('');
        $this->assertInstanceOf('patterns\abstractFactory\AbstractFiles', $oXml);
    }
}