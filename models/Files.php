<?php

namespace models;

use config\Config;

/**
 * Logic of work with files
 * Class Files
 * @package models
 */
class Files
{
    /**
     * Get something files to array of string
     * @param $paths
     * @return array
     * @throws \Exception
     */
    public static function getFiles($paths)
    {
        $strings = [];
        foreach ($paths as $name => $file) {
            if (filesize($file) > Config::$fileSizeLimitConvertToString) {
                throw new \Exception("Big file $file . Size is " . filesize($file) . " . Limit size is " . Config::$fileSizeLimitConvertToString);
            }
            $strings[$name] = file_get_contents($file);
        }
        return $strings;
    }

    /**
     * Get classes content
     * @param $path
     * @param $files
     * @return array
     * @throws \Exception
     */
    public static function renderClasses($path, $files)
    {
        $strings = [];
        foreach ($files as $file) {
            if (!file_exists($path . $file)) {
                throw new \Exception("Have not file $path$file");
            }
            $strings[$file] = file_get_contents($path . $file);
        }
        return $strings;
    }
}