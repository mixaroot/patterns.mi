<?php

namespace patterns\registry;
/**
 * Class Xml
 * @inheritdoc
 * @package patterns\registry
 */
class Xml extends File
{
    /**
     * @inheritdoc
     * @param $file
     */
    protected function parseFile($file)
    {
        $p = xml_parser_create();
        xml_parse_into_struct($p, Models::getFileAsString($file), $vals, $index);
        xml_parser_free($p);
        return [
            'vals' => $vals,
            'index' => $index
        ];
    }
}