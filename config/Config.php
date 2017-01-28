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
    public static function exampleFiles()
    {
        return [
            'ini' => 'files/test.ini',
            'xml' => 'files/test.xml',
            'json' => 'files/test.json'
        ];
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
            '/builder' => '\patterns\builder\Start'
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