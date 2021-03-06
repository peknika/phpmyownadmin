<?php


namespace src\Core\Domain\Entity;


abstract class AbstractEntity
{
    public function geAttributes(): array
    {
        $attributes = [];
        foreach (array_keys(get_object_vars($this)) as $attrName) {
            $attributes[$attrName] = $this->{$attrName};
        }
        return $attributes;
    }
}