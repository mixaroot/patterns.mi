<?php

namespace patterns\factoryMethod;

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
    /**
     * Demonstration of pattern factory method
     * @inheritdoc
     */
    public function init()
    {
        $json = Config::exampleFiles()['json'];
        $xml = Config::exampleFiles()['xml'];
        $ini = Config::exampleFiles()['ini'];

        $factoryJson = new WebTransferFileFactory();
        $oJson = $factoryJson->create($json);

        $factoryXml = new WebTransferFileFactory();
        $oXml = $factoryXml->create($xml);

        $factoryIni = new ConfigFactory();
        $oIni = $factoryIni->create($ini);

        // Render
        $view = new Common();
        $view->render(
            'Фабричный Метод (Factory Method)',
            'Выгодное отличие от SimpleFactory в том, что вы можете вынести реализацию создания объектов в подклассы.
            В простых случаях, этот абстрактный класс может быть только интерфейсом.',
            Files::getFiles(Config::exampleFiles()),
            [
                'Parsed ini file' => $oIni->getArray(),
                'Parsed json file' => $oJson->getArray(),
                'Parsed xml file' => $oXml->getArray()
            ],
            Files::renderClasses(Config::rootPath() . '/patterns/factoryMethod/', [
                'Start.php',
                'FactoryMethod.php',
                'WebTransferFileFactory.php',
                'ConfigFactory.php',
                'Files.php',
                'Xml.php',
                'Ini.php',
                'Json.php',
                'Models.php'
            ]));
    }
}