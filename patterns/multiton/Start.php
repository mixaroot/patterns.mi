<?php

namespace patterns\multiton;

use config\Config;
use lib\Init;
use models\Files;
use views\Common;

/**
 * Class Start
 * @package patterns\factoryMethod
 */
class Start implements Init
{
    public function init()
    {
        $json = Config::exampleFiles()['json'];

        $oFirstJson = Json::getInstance('oFirstJson');
        $oSecondJson = Json::getInstance('oSecondJson');

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
            'Это считается анти-паттерном! Для лучшей тестируемости и сопровождения кода используйте Инъекцию Зависимости (Dependency Injection)!
            Содержит список именованных созданных экземпляров классов, которые в итоге используются как Singleton-ы, но в заданном заранее N-ном количестве.',
            Files::getFiles(Config::exampleFiles(false, false, true)),
            [$oFirstJson, $oSecondJson],
            Files::renderClasses(Config::rootPath() . '/patterns/multiton/', [
                'Start.php',
                'Json.php'
            ]));
    }
}