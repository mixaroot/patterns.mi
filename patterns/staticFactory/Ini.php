<?php

namespace patterns\staticFactory;

/**
 * Class Ini
 * @package patterns\staticFactory
 */
class Ini implements InterfaceForFactory
{
    /**
     * @var array
     */
    private $config = [];

    /**
     * @inheritdoc
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @inheritdoc
     * @param string $fileName
     */
    public function parseConfig(string $fileName)
    {
        $this->config = parse_ini_file($fileName, true);
        if ($this->config === false) {
            throw new \Exception('Ошибка ini файла');
        }
    }
}