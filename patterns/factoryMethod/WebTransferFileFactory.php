<?php

namespace patterns\factoryMethod;
/**
 * Class WebTransferFileFactory
 * @package patterns\factoryMethod
 */
class WebTransferFileFactory extends FactoryMethod
{
    /**
     * @inheritdoc
     * @param $type
     * @return Json|Xml
     * @throws \Exception
     */
    protected function createFileObject($type)
    {
        switch ($type) {
            case parent::XML:
                return new Xml();
            case parent::JSON:
                return new Json();
        }
        throw new \Exception('have not this type ' . $type);
    }
}