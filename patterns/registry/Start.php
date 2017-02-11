<?php

namespace patterns\registry;

use lib\Init;
use views\Common;
use config\Config;
use models\Files;

/**
 * Класс для демонстрации паттерна Реестр (Registry)
 * Class Start
 * @package patterns\registry
 */
class Start implements Init
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $ini = Config::exampleFiles()['ini'];
        $xml = Config::exampleFiles()['xml'];
        $json = Config::exampleFiles()['json'];
        //Создание классов для записи в реестр
        $oIni = new Ini($ini);
        $oXml = new Xml($xml);
        $oJson = new Json($json);
        //Извлечение параметров(одновременно запись в приватное свойство) из файлов
        $iniData = $oIni->get();
        $xmlData = $oXml->get();
        $jsonData = $oJson->get();
        //Запись объектов в реетр
        Registry::set('ini', $oIni);
        Registry::set('xml', $oXml);
        Registry::set('json', $oJson);
        //Извоечение объектов из паттерна Реестр
        $oIni2 = Registry::get('ini');
        $oXml2 = Registry::get('xml');
        $oJson2 = Registry::get('json');
        //Демонстрация результатов обработки файлов паттерном Реестр (Registry)
        $view = new Common();
        $view->renderResultObject(
            'Реестр (Registry)',
            'Данный паттерн, как и Singleton, редко вызывает положительную реакцию со стороны разработчиков, так как порождает те же самые проблемы при тестировании приложений. Тем не менее, ругают, но активно используют. Как и Singleton, шаблон Реестр встречается во многих приложениях и, так или иначе, значительно упрощает решение некоторых задач.',
            [],
            [
                '/images/registry.png'
            ],
            Files::renderClasses(Config::rootPath() . '/tests/tests/unit/', [
                'RegistryTest.php'
            ]),
            Files::getFiles(Config::exampleFiles()),
            [
                $oIni2,
                $oXml2,
                $oJson2
            ],
            Files::renderClasses(Config::rootPath() . '/patterns/registry/', [
                'Start.php',
                'Registry.php',
                'File.php',
                'Ini.php',
                'Xml.php',
                'Json.php',
                'Models.php'
            ])
        );
    }
}