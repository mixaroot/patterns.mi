<?php

namespace patterns\staticFactory;

/**
 * Общий интерфейс для всех классов вызываемых в статичесуой фабрике
 * Interface InterfaceForFactory
 * @package patterns\staticFactory
 */
interface InterfaceForFactory
{
    /**
     * Получаем настройки
     * @return mixed
     */
    public function getConfig();

    /**
     * Парси файл с конфигурацией
     * @param string $fileName
     * @return mixed
     */
    public function parseConfig(string $fileName);
}