<?php

namespace patterns\staticFactory;

use lib\Init;
use views\Common;
use config\Config;
use models\Files;

/**
 * Класс для демонстрации паттерна Статическая Фабрика (Static Factory)
 * Class Start
 * @package patterns\staticFactory
 */
class Start implements Init
{
    public function init()
    {
        $ini = Config::exampleFiles()['ini'];
        $json = Config::exampleFiles()['json'];
        $oIni = StaticFactory::factory('ini');
        $oJson = StaticFactory::factory('json');
        $oIni->parseConfig($ini);
        $oJson->parseConfig($json);

        //Демонстрация результатов обработки файлов паттерном Статическая Фабрика (Static Factory)
        $view = new Common();
        $view->renderResultObject(
            'Статическая Фабрика (Static Factory)',
            '',
            [],
            [
                '/images/staticFactory.png'
            ],
            Files::renderClasses(Config::rootPath() . '/tests/tests/unit/', [
                'StaticFactoryTest.php'
            ]),
            Files::getFiles(Config::exampleFiles(true, false, true)),
            [
                $oIni,
                $oJson
            ],
            Files::renderClasses(Config::rootPath() . '/patterns/staticFactory/', [
                'Start.php',
                'StaticFactory.php',
                'InterfaceForFactory.php',
                'Ini.php',
                'Json.php'
            ])
        );
    }
}