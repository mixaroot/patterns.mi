<?php

namespace patterns\registry;
/**
 * Class Json
 * @inheritdoc
 * @package patterns\registry
 */
class Json extends File
{
    /**
     * @inheritdoc
     * @param $file
     */
    protected function parseFile($file)
    {
        return json_decode(Models::getFileAsString($file), true);
    }
}