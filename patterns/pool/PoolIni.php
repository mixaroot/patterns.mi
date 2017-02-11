<?php

namespace patterns\pool;
/**
 * Class Pool
 * @package patterns\pool
 */
class PoolIni
{
    /**
     * @var array
     */
    private $freeWorkers = [];
    /**
     * @var array
     */
    private $occupiedWorkers = [];

    /**
     * @return mixed|Ini
     */
    public function get(): Ini
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new Ini();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    /**
     * @param Ini $worker
     */
    public function dispose(Ini $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}