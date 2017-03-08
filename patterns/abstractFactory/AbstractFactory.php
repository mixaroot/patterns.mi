<?php

namespace patterns\abstractFactory;
/**
 * Abstract factory for create classes(work with files, different format)
 * Class abstractFactory
 * @package patterns\abstractFactory
 */
abstract class AbstractFactory
{
    /**
     * Create class for work with file some format
     * @param string $path
     * @return mixed
     */
    abstract public function workWithFile(string $path): AbstractFiles;
}