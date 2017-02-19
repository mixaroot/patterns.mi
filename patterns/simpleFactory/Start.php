<?php

namespace patterns\simpleFactory;

use lib\Init;
use views\Common;
use config\Config;
use models\Files;

/**
 * Класс для демонстрации паттерна Простая Фабрика (Simple Factory)
 * Class Start
 * @package patterns\simpleFactory
 */
class Start implements Init
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $ini = Config::exampleFiles()['ini'];
        //Создание объекта простой фабрики для дальнейшого получения различных объектов
        $oSimpleFactory = new SimpleFactory();
        //Создание объекта для работы с ini файлами
        $oIni = $oSimpleFactory->create();
        //Установка пути к файлу
        $oIni->setFile($ini);
        //Получение результата
        $result = $oIni->getArray();

        //Демонстрация результатов обработки файлов паттерном Простая Фабрика (Simple Factory)
        $view = new Common();
        $view->renderResultObject(
            'Простая Фабрика (Simple Factory)',
            '',
            [],
            [
                '/images/simpleFactory.png'
            ],
            Files::renderClasses(Config::rootPath() . '/tests/tests/unit/', [
                'SimpleFactoryTest.php'
            ]),
            Files::getFiles(Config::exampleFiles(true, false, false)),
            [
                $oIni
            ],
            Files::renderClasses(Config::rootPath() . '/patterns/simpleFactory/', [
                'Start.php',
                'SimpleFactory.php',
                'AbstractFiles.php',
                'Ini.php',
            ])
        );
    }
}