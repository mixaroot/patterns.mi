<?php

namespace patterns\multiton;
/**
 * Class Json
 * @package patterns\multiton
 */
class Json
{
    /**
     * @var string
     */
    public $file = '';
    /**
     * @var array
     */
    public $data = [];
    /**
     * @var array
     */
    private static $instances = [];

    /**
     * @param string $instanceName
     * @return mixed
     */
    public static function getInstance(string $instanceName): Json
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * @param string $string
     */
    public function setFile(string $file)
    {
        $this->file = $file;
    }

    /**
     * @throws \Exception
     */
    public function setData()
    {
        if (!empty($this->file) && is_file($this->file)) {
            $string = file_get_contents($this->file);
            $this->data = json_decode($string);
        } else {
            throw new \Exception('Have not file for json decode');
        }
    }
}