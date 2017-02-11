<?php

namespace lib;

/**
 * Общий интерфейс для запуска класса через веб маршрутизацию
 * Interface Init
 */
interface Init
{
    /**
     * Метод запуска
     * @return mixed
     */
    public function init();
}