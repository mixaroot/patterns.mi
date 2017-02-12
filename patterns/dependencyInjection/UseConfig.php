<?php

namespace patterns\dependencyInjection;

/**
 * Класс для использования конфигурации
 * Class UseConfig
 * @package patterns\dependencyInjection
 */
class UseConfig
{
    /**
     * @var array|ConfigInterface
     */
    private $config = [];

    /**
     * @param ConfigInterface $config
     */
    public function __construct(ConfigInterface $config)
    {
        $this->config = $config->getConfig();
    }

    /**
     * В текущем методе просто возвращается конфигурация
     * Но в более реальном применении, например коннект с базой
     * В Интерфейсе ConfigInterface было бы больше методов
     * А место текущего методы, был бы метод возвращающий коннект к базе, или прослойку для работы с базой
     * @return array|ConfigInterface
     */
    public function returnConfig()
    {
        return $this->config;
    }
}