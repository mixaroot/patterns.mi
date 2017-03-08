<?php

namespace patterns\staticFactory;

/**
 * Class Json
 * @package patterns\staticFactory
 */
class Json implements InterfaceForFactory
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
        $fileContent = file_get_contents($fileName);
        if ($fileContent === false) {
            throw new \Exception('Пустой файл');
        }
        $this->config = json_decode($fileContent, true);
        if ($this->config === null) {
            throw new \Exception('Пустой json или ошибочный');
        }
    }
}