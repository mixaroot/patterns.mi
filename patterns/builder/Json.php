<?php

namespace patterns\builder;
/**
 * Class for work with json file
 * Class Json
 * @package patterns\builder
 */
class Json extends File
{
    /**
     * @var string
     */
    protected $fileData = '';

    /**
     * parse string in json format to object
     */
    public function parseAsJson()
    {
        $this->data['object'] = json_decode($this->fileData, false);
    }

    /**
     * parse string in json format to array
     */
    public function parseAsArray()
    {
        $this->data['array'] = json_decode($this->fileData, true);
    }

    /**
     * @throws \Exception
     */
    public function setContentFromFile()
    {
        $this->fileData = file_get_contents($this->fileName);
        if (!$this->fileData) {
            throw new \Exception('Can not get data from file');
        }
    }
}