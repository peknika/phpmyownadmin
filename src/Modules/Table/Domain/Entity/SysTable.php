<?php

namespace src\Core\Modules\Table\Domain\Entity;


use EntityInterface;

class SysTable implements EntityInterface
{
    const TABLE_NAME = 'sys_table';

    /** @var int */
    public  $sys_id;

    /** @var string */
    public $table_name;

    public function getTableName(): string
    {
        return self::getTableName();
    }

}