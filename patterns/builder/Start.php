<?php

namespace patterns\builder;

use config\Config;
use lib\Init;
use models\Files;
use views\Common;

/**
 * Class AbstractFactory
 * @package patterns\abstractFactory
 */
class Start implements Init
{
    /**
     * Demonstration of pattern builder
     * @inheritdoc
     */
    public function init()
    {
        $json = Config::exampleFiles()['json'];
        $xml = Config::exampleFiles()['xml'];
        $ini = Config::exampleFiles()['ini'];

        $oIni = new IniBuilder($ini);
        $oIniResult = (new Director())->build($oIni);

        $oXml = new XmlBuilder($xml);
        $oXmlResult = (new Director())->build($oXml);

        $oJson = new JsonBuilder($json);
        $oJsonResult = (new Director())->build($oJson);

        // Render
        $view = new Common();
        $view->renderResultObject(
            'Строитель (Builder)',
            'Строитель — это интерфейс для производства частей сложного объекта.
             Иногда, если Строитель лучше знает о том, что он строит, этот интерфейс может быть абстрактным классом с методами по-умолчанию (адаптер).
             Если у вас есть сложное дерево наследования для объектов, логично иметь сложное дерево наследования и для их строителей.',
            Files::getFiles(Config::exampleFiles()),
            [
                $oIniResult,
                $oXmlResult,
                $oJsonResult
            ],
            Files::renderClasses(Config::rootPath() . '/patterns/builder/', [
                'Start.php',
                'BuilderInterface.php',
                'Director.php',
                'File.php',
                'Ini.php',
                'Xml.php',
                'Json.php',
                'IniBuilder.php',
                'JsonBuilder.php',
                'XmlBuilder.php'
            ])
        );
    }
}