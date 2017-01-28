<?php

namespace patterns\abstractFactory;
/**
 * Class IniFactory
 * @package patterns\abstractFactory
 * @inheritdoc
 */
class IniFactory extends AbstractFactory
{
    /**
     * @param $path
     * @return Ini
     * @inheritdoc
     */
    public function workWithFile($path)
    {
        return new Ini($path);
    }
}