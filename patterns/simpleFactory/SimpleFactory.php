<?php

namespace patterns\simpleFactory;

/**
 * Класс для демонстрации паттерна Простая Фабрика (Simple Factory)
 * Class SimpleFactory
 */
class SimpleFactory
{
    /**
     * Создание объекта с помощью простой фабрики
     * @param string $class
     * @return Ini
     * @throws \Exception
     */
    public function create(): Ini
    {
        return new Ini();
    }
}