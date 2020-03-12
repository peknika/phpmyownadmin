<?php

namespace src\Modules\Table\Domain\Entity;

use src\Core\Domain\Entity\AbstractAttributesEntity;
use src\Core\Domain\Entity\EntityInterface;

class SysTable extends AbstractAttributesEntity implements EntityInterface
{
    const TABLE_NAME = 'sys_table';

    /** @var int */
    public  $sys_id;

    /** @var string */
    public $table_name;

    public function getTableName(): string
    {
        return self::TABLE_NAME;
    }

}