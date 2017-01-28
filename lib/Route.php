<?php

namespace lib;

use config\Config;

/**
 * Class Route
 * @package lib
 */
class Route
{
    /**
     * Create instance of route
     * @throws \Exception
     */
    public static function start()
    {
        $init = new static;
        try {
            $init->getRoute();
        } catch (\Throwable $ex) {
            throw new \Exception($ex);
        }
    }

    /**
     * Start class by route
     */
    private function getRoute()
    {
        $method = $this->getUri();
        $rules = Config::getRoute();
        foreach ($rules as $rule => $class) {
            if ($method === $rule && in_array(Config::$initInterface, class_implements($class))) {
                (new $class)->init();
                return;
            }
        }
        throw new \Exception('Have not init class');
    }

    /**
     * Get request URI
     * @return string
     */
    private function getUri()
    {
        return mb_strtolower($_SERVER['REQUEST_URI']);
    }
}