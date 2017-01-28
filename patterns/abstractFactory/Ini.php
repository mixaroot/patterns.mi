<?php

namespace patterns\abstractFactory;
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
    public function getArray()
    {
        return parse_ini_file($this->path, true);
    }
}