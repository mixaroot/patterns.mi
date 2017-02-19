<?php

namespace patterns\simpleFactory;
/**
 * Abstract class for classes that uses in factory
 * Class AbstractFiles
 * @package patterns\abstractFactory
 */
abstract class AbstractFiles
{
    /**
     * Путь к файлу
     * @var string
     */
    protected $path;
    /**
     * Резулбтат обработки файла
     * @var array
     */
    protected $result = [];

    /**
     * @param $path
     */
    public function setFile($path)
    {
        $this->path = $path;
    }

    /**
     * Обработка файла
     * @return mixed
     */
    abstract protected function parseFile();

    /**
     * Get array from file (parse file)
     * @return array
     */
    public function getArray()
    {
        if (empty($this->result)) {
            $this->result = $this->parseFile();
        }
        return $this->result;
    }

}