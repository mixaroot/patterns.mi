<?php

namespace patterns\builder;
/**
 * Class File
 * @package patterns\builder
 */
abstract class File
{
    /**
     * @var array
     */
    public $data = [];
    /**
     * @var string
     */
    protected $fileName = '';

    /**
     * @param $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }
}