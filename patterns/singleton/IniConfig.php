<?php

namespace patterns\singleton;
/**
 * Класс для чтения единого файла конфигурации
 * Пример надуманный, но все же, если нам нужно будет изменять файл настроек по всему проекту динамически
 * Class IniConfig
 * @package patterns\singleton
 */
class IniConfig
{
    use Singleton;
    /**
     * Единая конфигурация для всего проекта
     * @var array
     */
    private $config = [];

    /**
     * Запись новой конфигурации
     * @param $file
     * @return bool
     */
    public function setConfig($file)
    {
        if (!is_file($file)) {
            return false;
        }
        $config = parse_ini_file($file);
        if (empty($config) || !is_array($config)) {
            return false;
        }
        $this->config = $config;
    }

    /**
     * Извлечение единой конфигурации
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }
}