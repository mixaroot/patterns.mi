<?php

namespace patterns\abstractFactory;
/**
 * Class Json
 * @package patterns\abstractFactory
 * @inheritdoc
 */
class Json extends AbstractFiles
{
    /**
     * @return array
     * @inheritdoc
     */
    public function getArray()
    {
        return json_decode(Models::getFileAsString($this->path), true);
    }
}