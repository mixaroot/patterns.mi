<?php

namespace patterns\singleton;

use config\Config;
use lib\Init;
use models\Files;
use views\Common;

/**
 * Класс для демонстрации паттерна Одиночка (Singleton)
 * Class Start
 * @package patterns\singleton
 */
class Start implements Init
{
    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function init()
    {
        $ini = Config::exampleFiles()['ini'];
        //Получаем единый экземпляр класса
        $oIniFile = IniConfig::getInstance();
        //Передаем файл с настройками
        $oIniFile->setConfig($ini);
        //Попытка уничтожить экземпляр клааса
        unset($oIniFile);
        //Снова получаем экземпляр класса, убеждаемся что установленный файл на месте
        $oIniFile = IniConfig::getInstance();
        //Демонстрация результатов обработки файла паттерном Одиночка (Singleton)
        $view = new Common();
        $view->renderResultObject(
            'Одиночка (Singleton)',
            'Порождающий шаблон проектирования, гарантирующий, что в однопроцессном приложении будет единственный экземпляр некоторого класса, и предоставляющий глобальную точку доступа к этому экземпляру.',
            [
                'Плюсы' => [
                    'контролируемый доступ к единственному экземпляру.'
                ],
                'Минусы' => [
                    'глобальные объекты могут быть вредны для объектного программирования, в некоторых случаях приводят к созданию немасштабируемого проекта;',
                    'усложняет написание модульных тестов и следование TDD.'
                ],
            ],
            [
                '/images/singleton.png'
            ],
            Files::renderClasses(Config::rootPath() . '/tests/tests/unit/', [
                'SingletonTest.php'
            ]),
            Files::getFiles(Config::exampleFiles(true, false, false)),
            [
                $oIniFile
            ],
            Files::renderClasses(Config::rootPath() . '/patterns/singleton/', [
                'Start.php',
                'Singleton.php',
                'IniConfig.php',
            ])
        );
    }
}