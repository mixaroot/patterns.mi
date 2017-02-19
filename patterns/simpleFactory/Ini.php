<?php

namespace patterns\simpleFactory;
/**
 * Class Ini
 * @package patterns\abstractFactory
 * @inheritdoc
 */
class Ini extends AbstractFiles
{
    /**
     * @return array
     * @inheritdoc
     */
    public function parseFile()
    {
        return parse_ini_file($this->path, true);
    }
}