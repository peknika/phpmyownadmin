<?php

namespace src\Modules\Query\Domain\Entity;

use src\Core\Domain\Entity\AbstractEntity;
use src\Core\Domain\Entity\EntityInterface;

class SysQuery extends AbstractEntity implements EntityInterface
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
        return self::TABLE_NAME;
    }

}