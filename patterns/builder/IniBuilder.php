<?php

namespace patterns\builder;

/**
 * Class IniBuilder
 */
class IniBuilder implements BuilderInterface
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
        $this->file = new Ini();
    }

    /**
     *  @inheritdoc
     */
    public function setFileName()
    {
        $this->file->setFileName($this->fileName);
    }

    /**
     *  @inheritdoc
     */
    public function setData()
    {
        $this->file->parse();
    }

    /**
     * @inheritdoc
     * @return null
     */
    public function get()
    {
        return $this->file;
    }
}