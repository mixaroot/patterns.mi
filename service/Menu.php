<?php

namespace service;

use lib\Init;
use lib\Render;

/**
 * Class Menu
 * @package service
 */
class Menu implements Init
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->render([]);
    }

    /**
     * @inheritdoc
     */
    protected function render($params)
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Patterns</title>
        </head>
        <body>
        <h2>1. Порождающие шаблоны проектирования </h2>

        <div>В разработке программного обеспечения, Порождающие шаблоны проектирования – это паттерны, которые имеют
            дело с механизмами создания объекта и пытаются создать объекты в порядке, подходящем к ситуации. Обычная
            форма создания объекта может привести к проблемам проектирования или увеличивать сложность конструкции.
            Порождающие шаблоны проектирования решают эту проблему, определённым образом контролируя процесс создания
            объекта
        </div>
        <ul>
            <li>
                <a href="abstract-factory">1.1. Абстрактная фабрика (Abstract Factory)</a>
            </li>
            <li>
                <a href="builder">1.2 Строитель (Builder)</a>
            </li>
        </ul>
        </body>
        </html>
        <?php
    }
}