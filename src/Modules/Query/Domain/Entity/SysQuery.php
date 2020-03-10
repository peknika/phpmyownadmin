<?php

namespace src\Modules\Query\Domain\Entity;


use EntityInterface;

class SysQuery implements EntityInterface
{
    const TABLE_NAME = 'sys_query';

    /** @var int */
    public  $sys_id;

    /** @var int  */
    public $query_body;

    /** @var string */
    public $query_name;

    public function getTableName(): string
    {
        return self::getTableName();
    }

}