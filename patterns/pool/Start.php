<?php

namespace patterns\pool;

use config\Config;
use lib\Init;
use models\Files;
use views\Common;

/**
 * Класс для демонстрации паттерна Объектный пул (Pool)
 * Class Start
 * @package patterns\factoryMethod
 */
class Start implements Init
{
    public function init()
    {
        $ini = Config::exampleFiles()['ini'];

        $object = new PoolIni();
        //Создание и извлечение объекта
        $oIni = $object->get();
        //Запись файла и его парсинг
        $data = $oIni->setFileName($ini)->parseFile()->data;
        //Возвращение объекта
        $object->dispose($oIni);
        $oIniRevert = $object->get();
        //Демонстрация результатов обработки файлов паттерном Объектный пул (Pool)
        $view = new Common();
        $view->renderResultObject(
            'Объектный пул (Pool)',
            'Порождающий паттерн, который предоставляет набор заранее инициализированных объектов, готовых к использованию («пул»),
            что не требует каждый раз создавать и уничтожать их.',
            [

            ],
            [
                '/images/pool.png'
            ],
            Files::renderClasses(Config::rootPath() . '/tests/tests/unit/', [
                'PoolTest.php'
            ]),
            Files::getFiles(Config::exampleFiles(true, false, false)),
            [$oIni, $oIniRevert],
            Files::renderClasses(Config::rootPath() . '/patterns/pool/', [
                'Start.php',
                'PoolIni.php',
                'Ini.php'
            ]));
    }
}