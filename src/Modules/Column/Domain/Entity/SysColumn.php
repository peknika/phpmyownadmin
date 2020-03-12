<?php

namespace src\Modules\Column\Domain\Entity;


use src\Core\Domain\Entity\EntityInterface;

class SysColumn implements EntityInterface
{
    const TABLE_NAME = 'sys_column';

    /** @var int */
    public  $sys_id;

    /** @var int */
    public $table_id;

    /** @var int  */
    public $column_type_id;

    /** @var string */
    public $column_name;

    public function getTableName(): string
    {
        return self::getTableName();
    }

}