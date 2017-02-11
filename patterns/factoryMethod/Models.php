<?php

namespace patterns\factoryMethod;

/**
 * Work with some resources
 * Class Models
 * @package patterns\abstractFactory
 */
class Models
{
    /**
     * Get file as string
     * @return string
     */
    public static function getFileAsString($path)
    {
        return file_get_contents($path);
    }
}