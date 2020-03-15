<?php


namespace src\Modules\Sidebar\Domain\Entity;

use src\Core\Domain\Entity\AbstractEntity;
use src\Core\Domain\Entity\EntityInterface;

class SysSidebar extends AbstractEntity implements EntityInterface
{

    const TABLE_NAME = 'sys_sidebar';

    /** @var int */
    public  $sys_id;

    /** @var string */
    public $table_name;

    public function getTableName(): string
    {
        return self::TABLE_NAME;
    }
}