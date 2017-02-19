<?php

namespace views;
/**
 * Class Menu
 * @package views
 */
class Menu
{
    /**
     * @inheritdoc
     */
    public function renderMainMenu()
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Patterns</title>
        </head>
        <body>
        <h1>Шаблон проектирования или паттерны</h1>
        <p>повторяемая архитектурная конструкция, представляющая собой решение проблемы проектирования в рамках некоторого часто возникающего контекста.</p>
        <h2>1. Порождающие шаблоны проектирования (Creational)</h2>

        <div>
            В разработке программного обеспечения, Порождающие шаблоны проектирования – это паттерны, которые имеют
            дело с механизмами создания объекта и пытаются создать объекты в порядке, подходящем к ситуации. Обычная
            форма создания объекта может привести к проблемам проектирования или увеличивать сложность конструкции.
            Порождающие шаблоны проектирования решают эту проблему, определённым образом контролируя процесс создания
            объекта
        </div>
        <ul>
            <!--            <li>-->
            <!--                <a href="abstract-factory">1.1 Абстрактная фабрика (Abstract Factory)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="builder">1.2 Строитель (Builder)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="factory-method">1.3 Фабричный Метод (Factory Method)</a>-->
            <!--            </li>-->
                        <li>
                            <a href="multiton">1.4 Пул одиночек (Multiton)</a>
                        </li>
                        <li>
                            <a href="pool">1.5 Объектный пул (Pool)</a>
                        </li>
            <!--            <li>-->
            <!--                <a href="prototype">1.6 Прототип (Prototype)</a>-->
            <!--            </li>-->
                        <li>
                            <a href="simple-factory">1.7 Простая Фабрика (Simple Factory)</a>
                        </li>
            <li>
                <a href="singleton">1.8 Одиночка (Singleton)</a>
            </li>
            <!--            <li>-->
            <!--                <a href="static-factory">1.5 Статическая Фабрика (Static Factory)</a>-->
            <!--            </li>-->
        </ul>

        <h2>2. Структурные шаблоны проектирования (Structural)</h2>

        <div>
            При разработке программного обеспечения,
            Структурные шаблоны проектирования упрощают проектирование путем выявления простого способа реализовать
            отношения между субъектами.
        </div>
        <ul>
            <!--            <li>-->
            <!--                <a href="adapter">2.1 Адаптер (Adapter / Wrapper)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="bridge">2.2 Мост (Bridge)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="composite">2.3 Компоновщик (Composite)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="data-mapper">2.4 Преобразователь Данных (Data Mapper)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="decorator">2.5 Декоратор (Decorator)</a>-->
            <!--            </li>-->
                        <li>
                            <a href="dependency-injection">2.6 Внедрение Зависимости (Dependency Injection)</a>
                        </li>
            <!--            <li>-->
            <!--                <a href="facade">2.7 Фасад (Facade)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="fluent-interface">2.8 Текучий Интерфейс (Fluent Interface)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="flyweight">2.9 Приспособленец (Flyweight)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="proxy">2.10 Прокси (Proxy)</a>-->
            <!--            </li>-->
                        <li>
                            <a href="registry">2.11 Реестр (Registry)</a>
                        </li>
        </ul>

        <h2>3. Поведенческие шаблоны проектирования (Behavioral)</h2>

        <div>
            Поведенческие шаблоны проектирования определяют общие закономерности связей между объектами, реализующими
            данные паттерны.
            Следование этим шаблонам уменьшает связность системы и облегчает коммуникацию между объектами, что улучшает
            гибкость программного продукта.
        </div>
        <ul>
            <!--            <li>-->
            <!--                <a href="chain-of-responsibilities">3.1 Цепочка Обязанностей (Chain Of Responsibilities)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="command">3.2 Команда (Command)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="iterator">3.3 Итератор (Iterator)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="mediator">3.4 Посредник (Mediator)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="memento">3.5 Хранитель (Memento)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="null-object">3.6 Объект Null (Null Object)</a>-->
            <!--            </li>-->
                        <li>
                            <a href="observer">3.7 Наблюдатель (Observer)</a>
                        </li>
            <!--            <li>-->
            <!--                <a href="specification">3.8 Спецификация (Specification)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="state">3.9 Состояние (State)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="strategy">3.10 Стратегия (Strategy)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="template-method">3.11 Шаблонный Метод (Template Method)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="visitor">3.12 Посетитель (Visitor)</a>-->
            <!--            </li>-->
        </ul>

        <h2>4. Дополнительно</h2>
        <ul>
            <!--            <li>-->
            <!--                <a href="delegation">4.1 Делегирование (Delegation)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="service-locator">4.2 Локатор Служб (Service Locator)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="repository">4.3 Хранилище (Repository)</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="eva">4.4 Сущность-Атрибут-Значение (EVA pattern)</a>-->
            <!--            </li>-->
        </ul>

        </body>
        </html>
        <?php
    }
}