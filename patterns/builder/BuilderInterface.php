<?php

namespace patterns\builder;
/**
 * Create array with information about file
 * Interface BuilderInterface
 * @package patterns\builder
 */
interface BuilderInterface
{
    /**
     * Create object for work with file
     * @return mixed
     */
    public function createObject();

    /**
     * File name for get data
     * @return mixed
     */
    public function setFileName();

    /**
     * Set data from file
     * @return mixed
     */
    public function setData();

    /**
     * Return object with all file data
     * @return mixed
     */
    public function get();
}