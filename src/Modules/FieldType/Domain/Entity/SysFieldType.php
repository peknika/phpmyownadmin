<?php

namespace src\Modules\SysFieldType\Domain\Entity;

use src\Core\Domain\Entity\EntityInterface;

class SysFieldType implements EntityInterface
{
    const TABLE_NAME = 'sys_field_type';

    /** @var int */
    public  $sys_id;

    /** @var string */
    public $type_name;

    /** @var string */
    public $type_scalar;

    public function getTableName(): string
    {
        return self::getTableName();
    }

}