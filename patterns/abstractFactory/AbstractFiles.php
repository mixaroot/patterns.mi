<?php

namespace patterns\abstractFactory;
/**
 * Abstract class for classes that uses in factory
 * Class AbstractFiles
 * @package patterns\abstractFactory
 */
abstract class AbstractFiles
{
    /**
     * Path to file
     * @var string
     */
    protected $path;

    /**
     * Set properties of object
     * @param $path
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Get array from file (parse file)
     * @return array
     */
    abstract public function getArray();

}