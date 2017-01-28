<?php

namespace patterns\abstractFactory;
/**
 * Class Xml
 * @package patterns\abstractFactory
 * @inheritdoc
 */
class Xml extends AbstractFiles
{
    /**
     * @return array
     * @inheritdoc
     */
    public function getArray()
    {
        $p = xml_parser_create();
        xml_parse_into_struct($p, Models::getFileAsString($this->path), $vals, $index);
        xml_parser_free($p);
        return [
            'vals' => $vals,
            'index' => $index
        ];
    }
}