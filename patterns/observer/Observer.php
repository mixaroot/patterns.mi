<?php

namespace patterns\observer;
/**
 * Клвсс для реализации субъекта паттерна Наблюдатель (Observer)
 * Class Observer
 * @package patterns\observer
 */
class Observer implements \SplObserver
{
    /**
     * Сохраняем историю изменения наблюдаемого объекта
     * @var array
     */
    private $historyOfChanges = [];

    /**
     * Обработка сообщений от наблюдаемого объекта
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        $this->historyOfChanges[] = clone $subject;
    }

    /**
     * Просмотреть всю историю
     * @return mixed
     */
    public function getHistory()
    {
        return $this->historyOfChanges;
    }
}