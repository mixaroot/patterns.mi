<?php

namespace patterns\registry;
/**
 * Класс для парсинга файлов
 * Class File
 * @package patterns\registry
 */
abstract class File
{
    /**
     * Путь к файлу
     * @var string
     */
    private $file = '';
    /**
     * Данные после парсинга
     * @var array
     */
    private $data = [];

    /**
     * Установка пути к файлу
     * @param $file
     * @throws \Exception
     */
    public function __construct($file)
    {
        if (!is_file($file)) {
            throw new \Exception('Have not file ' . $file);
        }
        $this->file = $file;
    }

    /**
     * Извличение данных
     * @return array
     */
    public function get()
    {
        if (!empty($this->data)) {
            return $this->data;
        }
        $this->data = $this->parseFile($this->file);
    }

    /**
     * Парсинг файла
     * @param $file
     * @return mixed
     */
    abstract protected function parseFile($file);
}