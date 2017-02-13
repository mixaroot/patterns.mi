<?php

namespace patterns\multiton;

use config\Config;
use lib\Init;
use models\Files;
use views\Common;

/**
 * Класс для демонстрации паттерна Пул одиночек (Multiton)
 * Class Start
 * @package patterns\factoryMethod
 */
class Start implements Init
{
    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function init()
    {
        $json = Config::exampleFiles()['json'];
        //Создание 2 экземпляров класса
        $oFirstJson = Json::getInstance('oFirstJson');
        $oSecondJson = Json::getInstance('oSecondJson');
        //Запись
        $oFirstJson->setFile($json);
        $oSecondJson->setFile($json);
        //It for show different between objects
        $oSecondJson->setData();

        unset($oFirstJson);
        unset($oSecondJson);

        $oFirstJson = Json::getInstance('oFirstJson');
        $oSecondJson = Json::getInstance('oSecondJson');

        // Render
        $view = new Common();
        $view->renderResultObject(
            'Пул одиночек (Multiton))',
            'Содержит список именованных созданных экземпляров классов, которые в итоге используются как Singleton-ы, но в заданном заранее N-ном количестве.',
            [],
            [
                '/images/multiton.png'
            ],
            Files::renderClasses(Config::rootPath() . '/tests/tests/unit/', [
                'MultitonTest.php'
            ]),
            Files::getFiles(Config::exampleFiles(false, false, true)),
            [$oFirstJson, $oSecondJson],
            Files::renderClasses(Config::rootPath() . '/patterns/multiton/', [
                'Start.php',
                'Json.php'
            ]));
    }
}