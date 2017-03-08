<?php

namespace patterns\staticFactory;

/**
 * Класс для демонстрации паттерна Статическая Фабрика (Static Factory)
 * Class StaticFactory
 * @package patterns\staticFactory
 */
class StaticFactory
{
    /**
     * Основной метод для демонстрации паттерна Статическая Фабрика
     * @param string $type
     * @return Ini|Json
     * @throws \Exception
     */
    public static function factory(string $type): InterfaceForFactory
    {
        switch ($type) {
            case "json":
                return new Json();
                break;
            case "ini":
                return new Ini();
                break;
            default:
                throw new \Exception('Нет подходящего типа');
        }
    }
}