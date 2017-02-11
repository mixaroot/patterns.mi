<?php

namespace patterns\factoryMethod;
/**
 * Class Files
 * @package patterns\factoryMethod
 */
abstract class Files
{
    /**
     * @var array
     */
    public $parsedFile = false;

    /*
     * Set file for work
     */
    abstract public function parseFile($file);

    /**
     * @return array
     */
    public function getArray()
    {
        return $this->parsedFile;
    }
}