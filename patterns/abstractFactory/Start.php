<?php

namespace patterns\abstractFactory;

use config\Config;
use lib\Init;
use models\Files;
use views\Common;

/**
 * Класс для демонстрации паттерна Абстрактная фабрика (Abstract Factory)
 * Class AbstractFactory
 * @package patterns\abstractFactory
 */
class Start implements Init
{
    /**
     * Demonstration of pattern abstract factory
     * @inheritdoc
     */
    public function init()
    {
        // Factory for ini files
        $oFactoryIni = new IniFactory();
        $oIni = $oFactoryIni->workWithFile(Config::exampleFiles()['ini']);
        // Factory for json files
        $oFactoryJson = new JsonFactory();
        $oJson = $oFactoryJson->workWithFile(Config::exampleFiles()['json']);
        // Factory for xml files
        $oFactoryXml = new XmlFactory();
        $oXml = $oFactoryXml->workWithFile(Config::exampleFiles()['xml']);
        // Get result
        $ini = $oIni->getArray();
        $json = $oJson->getArray();
        $xml = $oXml->getArray();
        // Render
        $view = new Common();
        $view->renderResultObject(
            'Абстрактная фабрика (Abstract Factory)',
            'Создать ряд связанных или зависимых объектов без указания их конкретных классов.
            Обычно создаваемые классы стремятся реализовать один и тот же интерфейс.
            Клиент абстрактной фабрики не заботится о том, как создаются эти объекты, он просто знает, по каким
            признакам они взаимосвязаны и как с ними обращаться.',
            [],
            [
                '/images/abstractFactory.png'
            ],
            Files::renderClasses(Config::rootPath() . '/tests/tests/unit/', [
                'SimpleFactoryTest.php'
            ]),
            Files::getFiles(Config::exampleFiles()),
            [
                'Parsed ini file' => $ini,
                'Parsed json file' => $json,
                'Parsed xml file' => $xml
            ],
            Files::renderClasses(Config::rootPath() . '/patterns/abstractFactory/', [
                'Start.php',
                'AbstractFactory.php',
                'IniFactory.php',
                'JsonFactory.php',
                'XmlFactory.php',
                'AbstractFiles.php',
                'Ini.php',
                'Json.php',
                'Xml.php',
                'Models.php'
            ]));
    }
}