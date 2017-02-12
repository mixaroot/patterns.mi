<?php

namespace patterns\dependencyInjection;
/**
 * Класс конфигурации
 * Пример надуманный, но все же
 * Class IniConfig
 * @package patterns\singleton
 */
class IniConfig implements ConfigInterface
{
    /**
     * Некоторая конфигурация
     * @var array
     */
    private $config = [];

    /**
     * @param $file
     * @throws \Exception
     */
    public function __construct($file)
    {
        if (!$this->setConfig($file)) {
            throw new \Exception('Can not set configuration');
        }
    }

    /**
     * Запись конфигурации
     * @param $file
     * @return bool
     */
    private function setConfig($file)
    {
        if (!is_file($file)) {
            return false;
        }
        $config = parse_ini_file($file);
        if (empty($config) || !is_array($config)) {
            return false;
        }
        $this->config = $config;
        return true;
    }

    /**
     * Извлечение конфигурации
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }
}