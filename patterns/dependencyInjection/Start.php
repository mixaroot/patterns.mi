<?php

namespace patterns\dependencyInjection;

use config\Config;
use lib\Init;
use models\Files;
use views\Common;

/**
 * Класс для демонстрации паттерна Внедрение Зависимости (Dependency Injection)
 * Class Start
 * @package patterns\dependencyInjection
 */
class Start implements Init
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $ini = Config::exampleFiles()['ini'];
        //Создали класс который будет передан в другой класс, и в случаии необходимости можно будет подменить,
        //в будущем(не в реальном времени)
        $oConfig = new IniConfig($ini);
        //Внедрили объект реализующий интерфейс ConfigInterface в класс UseConfig
        $oUseConfig = new UseConfig($oConfig);

        //Демонстрация результатов работы паттерна Внедрение Зависимости (Dependency Injection)
        $view = new Common();
        $view->renderResultObject(
            'Внедрение Зависимости (Dependency Injection)',
            'Для реализации слабосвязанной архитектуры. Чтобы получить более тестируемый, сопровождаемый и расширяемый код.',
            [],
            [
                '/images/dependencyInjection.png'
            ],
            Files::renderClasses(Config::rootPath() . '/tests/tests/unit/', [
                'DependencyInjectionTest.php'
            ]),
            Files::getFiles(Config::exampleFiles(true, false, false)),
            [
                $oUseConfig
            ],
            Files::renderClasses(Config::rootPath() . '/patterns/dependencyInjection/', [
                'Start.php',
                'ConfigInterface.php',
                'IniConfig.php',
                'UseConfig.php'
            ])
        );
    }
}