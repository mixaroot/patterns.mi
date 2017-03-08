<?php

namespace patterns\abstractFactory;
/**
 * Class JsonFactory
 * @package patterns\abstractFactory
 * @inheritdoc
 */
class JsonFactory extends AbstractFactory
{
    /**
     * @param string $path
     * @return Json
     * @inheritdoc
     */
    public function workWithFile(string $path): AbstractFiles
    {
        return new Json($path);
    }
}