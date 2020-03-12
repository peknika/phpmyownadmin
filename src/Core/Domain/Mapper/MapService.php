<?php

namespace src\Core\Domain\Mapper;

use src\Core\Domain\Entity\EntityInterface;

class MapService
{
    public function map($source, $target): EntityInterface
    {
        $target = new $target;

        foreach ($source as $property => $value) {
            if (property_exists($target, $property))
            {
                $target->{$property} = $value;

            }
        }
        return $target;
    }
}