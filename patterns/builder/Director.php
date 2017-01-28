<?php

namespace patterns\builder;
/**
 * Class Director
 * @package patterns\builder
 */
class Director
{
    /**
     * @param BuilderInterface $builder
     * @return mixed
     */
    public function build(BuilderInterface $builder) : File
    {
        $builder->createObject();
        $builder->setFileName();
        $builder->setData();
        return $builder->get();
    }
}