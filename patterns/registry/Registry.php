<?php

namespace patterns\registry;

/**
 * Класс для реализации паттерна Реестр (Registry)
 * Class Registry
 * @package patterns\registry
 */
class Registry extends \ArrayObject
{
    /**
     * Массив с значениями, может быть все что угодно(массивы, строки, ресурсы и тд.)
     * @var array
     */
    private static $values = [];

    /**
     * Установка значений
     * @param string $name
     * @param $value
     */
    public static function set(string $name, $value)
    {
        self::$values[$name] = $value;
    }

    /**
     * Извлечение значения по имени
     * @param $name
     * @return mixed
     * @throws \Exception
     */
    public static function get($name)
    {
        if (empty(self::$values[$name])) {
            throw new \Exception('Have not this name ' . $name);
        }
        return self::$values[$name];
    }
}