<?php

namespace patterns\factoryMethod;
/**
 * Class FactoryMethod
 * @package patterns\factoryMethod
 */
abstract class FactoryMethod
{
    const XML = 'xml';
    const INI = 'ini';
    const JSON = 'json';

    /**
     * @param $type
     * @return mixed
     */
    abstract protected function createFileObject($type);

    /**
     * @param string $file
     * @return object
     */
    public function create($file): Files
    {
        $type = $this->getTypeByExtension($file);
        $obj = $this->createFileObject($type);
        $obj->parseFile($file);
        return $obj;
    }

    /**
     * @param $file
     * @return string
     */
    private function getTypeByExtension($file)
    {
        if (preg_match('/^.*\.([A-z0-9]+)$/', $file, $match)) {
            if (!empty($match[1])) {
                return $match[1];
            }
        }
        return '';
    }
}