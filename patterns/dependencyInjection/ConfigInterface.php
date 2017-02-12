<?php

namespace patterns\dependencyInjection;

/**
 * Интерфейс работы с конфигурацией
 * Interface ConfigInterface
 * @package patterns\dependencyInjection
 */
interface ConfigInterface
{
    /**
     * Извличения некой конфигурации
     * @return mixed
     */
    public function getConfig();
}