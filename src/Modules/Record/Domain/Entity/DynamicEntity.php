<?php

namespace src\Modules\Record\Domain\Entity;

use src\Core\Domain\Entity\EntityInterface;

class DynamicEntity implements EntityInterface
{
    private $tableName;
    private $attributes;

    public function __construct($tableName, $attrs)
    {
        $this->tableName = $tableName;
        $this->attributes = [];
        foreach ($attrs as $name => $value) {
            $this->attributes[$name] = $value;
        }
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    public function __get($name)
    {
     return $this->attributes[$name];
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function geAttributes(): array
    {
        return $this->attributes;
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);;
    }
}