<?php

namespace patterns\builder;
/**
 * Class Xml
 * @package patterns\builder\
 */
class Xml extends File
{
    /**
     * @var string
     */
    public $indexJson = '';

    /**
     * Parse xml file
     */
    public function parse()
    {
        $fileData = file_get_contents($this->fileName);
        if ($fileData) {
            $p = xml_parser_create();
            xml_parse_into_struct($p, $fileData, $vals, $index);
            xml_parser_free($p);
            $this->data = [
                'vals' => $vals,
                'index' => $index
            ];
        }
    }

    /**
     * Present xml parsed data as json
     */
    public function setIndexToJson()
    {
        $this->indexJson = json_encode($this->data['index']);
    }
}