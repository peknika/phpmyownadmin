<?php

namespace src\Modules\Query\Domain\Entity;

use src\Core\Domain\Entity\AbstractAttributesEntity;
use src\Core\Domain\Entity\EntityInterface;

class SysQuery extends AbstractAttributesEntity implements EntityInterface
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