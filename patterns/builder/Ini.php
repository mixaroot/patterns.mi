<?php

namespace patterns\builder;
/**
 * Class for work with ini file
 * Class Ini
 * @package patterns\builder
 */
class Ini extends File
{
    /**
     * parse string in ini format
     */
    public function parse()
    {
        $this->data = parse_ini_file($this->fileName);
    }
}