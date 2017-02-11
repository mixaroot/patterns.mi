<?php

namespace patterns\registry;
/**
 * Class Ini
 * @inheritdoc
 * @package patterns\registry
 */
class Ini extends File
{
    /**
     * @inheritdoc
     * @param $file
     */
    protected function parseFile($file)
    {
        return parse_ini_file($file, true);
    }
}