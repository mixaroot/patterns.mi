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
     * @param string $path
     * @return Ini
     * @inheritdoc
     */
    public function workWithFile(string $path): AbstractFiles
    {
        return new Ini($path);
    }
}