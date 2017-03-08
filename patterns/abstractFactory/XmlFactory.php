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
     * @param string $path
     * @return Xml
     * @inheritdoc
     */
    public function workWithFile(string $path): AbstractFiles
    {
        return new Xml($path);
    }
}