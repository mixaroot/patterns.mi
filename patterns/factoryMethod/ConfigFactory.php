<?php

namespace patterns\factoryMethod;
/**
 * Class ConfigFactory
 * @package patterns\factoryMethod
 */
class ConfigFactory extends FactoryMethod
{
    /**
     * @inheritdoc
     * @param $type
     * @return Ini|Json
     * @throws \Exception
     */
    protected function createFileObject($type)
    {
        switch ($type) {
            case parent::INI:
                return new Ini();
            case parent::JSON:
                return new Json();
        }
        throw new \Exception('have not this type ' . $type);
    }
}