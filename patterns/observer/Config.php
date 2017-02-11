<?php

namespace patterns\observer;
/**
 * Клвсс для реализации объекта паттерна Наблюдатель (Observer)
 * Class Config
 * @package patterns\observer
 */
class Config implements \SplSubject
{
    /**
     * Массив наблюдателей за текущим объектом
     * @var null
     */
    private $observers = null;
    /**
     * Конфигурация исключительно для демонстрации
     * @var array
     */
    private $config = [];

    /**
     * Один из возможных методов в котором уведомляем субъектов паттерна Наблюдатель (Observer)
     * @param array $file
     * @return bool
     */
    public function setConfig(array $config)
    {
        $this->config = $config;
        $this->notify();
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Добавления нового наблюдателя
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer)
    {
        if ($this->observers == null) {
            $this->observers = new \SplObjectStorage();
        }
        $this->observers->attach($observer);
    }

    /**
     * Удаления наблюдателя
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * Отправка сообщения всем наблюдателям
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}