<?php

namespace patterns\builder;
/**
 * Class XmlBuilder
 * @package patterns\builder
 */
class XmlBuilder implements BuilderInterface
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
     * @return mixed
     */
    public function createObject()
    {
        $this->file = new Xml();
    }

    /**
     * @inheritdoc
     * @return mixed
     */
    public function setFileName()
    {
        $this->file->setFileName($this->fileName);
    }

    /**
     * @inheritdoc
     * @return mixed
     */
    public function setData()
    {
        $this->file->parse();
        $this->file->setIndexToJson();
    }

    /**
     * @inheritdoc
     * @return mixed
     */
    public function get()
    {
        return $this->file;
    }
}