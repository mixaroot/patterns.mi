<?php

namespace patterns\factoryMethod;
/**
 * Class Ini
 * @package patterns\factoryMethod
 */
class Ini extends Files
{
    /**
     * @inheritdoc
     * @param $file
     * @return array
     */
    public function parseFile($file)
    {
        $this->parsedFile = parse_ini_file($file, true);
    }
}