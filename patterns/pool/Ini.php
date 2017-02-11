<?php

namespace patterns\pool;
/**
 * Class Ini
 * @package patterns\pool
 */
class Ini
{
    /**
     * @var string
     */
    private $fileName = '';
    /**
     * @var array
     */
    public $data = [];

    /**
     * @param $name
     */
    public function setFileName($name)
    {
        $this->fileName = $name;
        return $this;
    }

    /**
     *
     */
    public function parseFile()
    {
        if (!empty($this->fileName) && is_file($this->fileName)) {
            $this->data = parse_ini_file($this->fileName, true);
        }
        return $this;
    }
}