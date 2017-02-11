<?php

namespace patterns\factoryMethod;
/**
 * Class Json
 * @package patterns\factoryMethod
 */
class Json extends Files
{
    /**
     * @inheritdoc
     * @param $file
     */
    public function parseFile($file)
    {
        $content = Models::getFileAsString($file);
        if ($content) {
            $this->parsedFile = json_decode($content, true);
        }
    }
}