<?php

namespace patterns\factoryMethod;
/**
 * Class Xml
 * @package patterns\factoryMethod
 */
class Xml extends Files
{
    /**
     * @param $file
     */
    public function parseFile($file)
    {
        $content = Models::getFileAsString($file);
        if ($content) {
            $p = xml_parser_create();
            xml_parse_into_struct($p, Models::getFileAsString($file), $vals, $index);
            xml_parser_free($p);
            $this->parsedFile = [
                'vals' => $vals,
                'index' => $index
            ];
        }
    }
}