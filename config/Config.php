<?php

namespace config;
/**
 * Class Config
 * @package config
 */
class Config
{
    /**
     * Interface for all init classes
     * @var string
     */
    public static $initInterface = 'lib\Init';

    /**
     * @return array
     */
    public static function exampleFiles($ini = true, $xml = true, $json = true)
    {
        $result = [];
        if ($ini) {
            $result['ini'] = 'files/test.ini';
        }
        if ($xml) {
            $result['xml'] = 'files/test.xml';
        }
        if ($json) {
            $result['json'] = 'files/test.json';
        }
        return $result;
    }

    /**
     * Route path => init class
     * @return array
     */
    public static function getRoute()
    {
        return [
            '/' => '\service\Menu',
            '/abstract-factory' => '\patterns\abstractFactory\Start',
            '/builder' => '\patterns\builder\Start',
            '/factory-method' => '\patterns\factoryMethod\Start',
            '/multiton' => '\patterns\multiton\Start',
            '/pool' => '\patterns\pool\Start',

            '/adapter' => '\patterns\adapter\Start',
            '/bridge' => '\patterns\bridge\Start',
            '/chain-of-responsibilities' => '\patterns\chainOfResponsibilities\Start',
            '/command' => '\patterns\command\Start',
            '/composite' => '\patterns\composite\Start',
            '/data-mapper' => '\patterns\dataMapper\Start',
            '/decorator' => '\patterns\decorator\Start',
            '/delegation' => '\patterns\delegation\Start',
            '/dependency-injection' => '\patterns\dependencyInjection\Start',
            '/eva' => '\patterns\eva\Start',
            '/facade' => '\patterns\facade\Start',
            '/fluent-interface' => '\patterns\fluentInterface\Start',
            '/flyweight' => '\patterns\flyweight\Start',
            '/iterator' => '\patterns\iterator\Start',
            '/mediator' => '\patterns\mediator\Start',
            '/memento' => '\patterns\memento\Start',
            '/null-object' => '\patterns\nullObject\Start',
            '/observer' => '\patterns\observer\Start',
            '/prototype' => '\patterns\prototype\Start',
            '/proxy' => '\patterns\proxy\Start',
            '/registry' => '\patterns\registry\Start',
            '/repository' => '\patterns\repository\Start',
            '/service-locator' => '\patterns\serviceLocator\Start',
            '/simple-factory' => '\patterns\simpleFactory\Start',
            '/singleton' => '\patterns\singleton\Start',
            '/specification' => '\patterns\specification\Start',
            '/state' => '\patterns\state\Start',
            '/static-factory' => '\patterns\staticFactory\Start',
            '/strategy' => '\patterns\strategy\Start',
            '/template-method' => '\patterns\templateMethod\Start',
            '/visitor' => '\patterns\visitor\Start',
        ];
    }

    /**
     * Limit size of file for convert to string
     * @var int
     */
    public static $fileSizeLimitConvertToString = 1000000;

    /**
     * Get root path to files
     * @return mixed
     */
    public static function rootPath()
    {
        return $_SERVER['DOCUMENT_ROOT'];
    }
}