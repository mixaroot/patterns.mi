<?php

namespace patterns\pool;

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
        $ini = Config::exampleFiles()['ini'];

        $object = new PoolIni();
        //Create object and get from pool
        $oIni = $object->get();
        //Set file, parse file, get data
        $data = $oIni->setFileName($ini)->parseFile()->data;
        //Return object to pool
        $object->dispose($oIni);
        $oIniRevert = $object->get();

        // Render
        $view = new Common();
        $view->renderResultObject(
            'Объектный пул (Pool)',
            'Порождающий паттерн, который предоставляет набор заранее инициализированных объектов, готовых к использованию («пул»), что не требует каждый раз создавать и уничтожать их.',
            Files::getFiles(Config::exampleFiles(true, false, false)),
            [$oIni, $oIniRevert],
            Files::renderClasses(Config::rootPath() . '/patterns/pool/', [
                'Start.php',
                'PoolIni.php',
                'Ini.php'
            ]));
    }
}