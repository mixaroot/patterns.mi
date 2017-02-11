<?php

namespace patterns\builder;
/**
 * Class JsonBuilder
 * @package patterns\builder
 */
class JsonBuilder implements BuilderInterface
{
    /**
     * @var null
     */
    public $file = null;
    /**
     * @var string
     */
    private $fileName = '';

    /**
     * @param $fileName
     */
    function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @inheritdoc
     */
    public function createObject()
    {
        $this->file = new Json();
    }

    /**
     * @inheritdoc
     */
    public function setFileName()
    {
        $this->file->setFileName($this->fileName);
    }

    /**
     * @inheritdoc
     */
    public function setData()
    {
        $this->file->setContentFromFile();
        $this->file->parseAsJson();
        $this->file->parseAsArray();
    }

    /**
     * @return null
     */
    public function get()
    {
        return $this->file;
    }
}