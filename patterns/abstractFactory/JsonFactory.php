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
     * @param $path
     * @return Ini
     * @inheritdoc
     */
    public function workWithFile($path)
    {
        return new Json($path);
    }
}