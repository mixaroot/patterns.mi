<?php

namespace patterns\abstractFactory;
/**
 * Class XmlFactory
 * @package patterns\abstractFactory
 * @inheritdoc
 */
class XmlFactory extends AbstractFactory
{
    /**
     * @param $path
     * @return Ini
     * @inheritdoc
     */
    public function workWithFile($path)
    {
        return new Xml($path);
    }
}