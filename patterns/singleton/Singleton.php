<?php

namespace patterns\singleton;
/**
 * Трейт для создания singleton
 * Class Singleton
 * @package patterns\singleton
 */
trait Singleton
{
    /**
     * Единый экземпляр класса
     * @var null
     */
    static private $instance = null;

    /**
     * Получаем единый экземпляр класса
     * @return null|static
     */
    static public function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * Защищаем от создание через new
     */
    private function __construct()
    {
    }

    /**
     * Защищаем от создание через clone
     */
    private function __clone()
    {
    }

    /**
     * Защищаем от создание через unserialize
     */
    private function __wakeup()
    {
    }
}
