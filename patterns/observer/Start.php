<?php

namespace patterns\observer;

use lib\Init;
use models\Files;
use views\Common;
use config\Config AS CommonConfig;

/**
 * Класс для демонстрации паттерна Наблюдатель (Observer)
 * Class Start
 * @package patterns\observer
 */
class Start implements Init
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $ini = parse_ini_file(CommonConfig::exampleFiles()['ini']);
        //Создания класса наблюдателя
        $observer = new Observer();
        //Создание наблюдаемого класса
        $config = new Config();
        //Подписка наблюдателя на класс Config
        $config->attach($observer);
        //Вызов метода после отработки которого отправляется сообщение всем подписанным наблюдателям
        $config->setConfig($ini);

        //Демонстрация результатов обработки файла паттерном Наблюдатель (Observer)
        $view = new Common();
        $view->renderResultObject(
            'Наблюдатель (Observer)',
            'Для реализации публикации/подписки на поведение объекта, всякий раз, когда объект «Subject» меняет свое состояние, прикрепленные объекты «Observers» будут уведомлены.
            Паттерн используется, чтобы сократить количество связанных напрямую объектов и вместо этого использует слабую связь (loose coupling).',
            [],
            [
                '/images/observer.png'
            ],
            Files::renderClasses(CommonConfig::rootPath() . '/tests/tests/unit/', [
                'ObserverTest.php'
            ]),
            Files::getFiles(CommonConfig::exampleFiles(true, false, false)),
            [
                $observer,
                $config
            ],
            Files::renderClasses(CommonConfig::rootPath() . '/patterns/observer/', [
                'Start.php',
                'Config.php',
                'Observer.php',
            ])
        );
    }
}