<?php

namespace src\Modules\Sidebar\Infrastructure\Repository;

use src\Modules\Sidebar\Domain\Repository\SidebarRepositoryInterface;
use yii\db\Query;

class SidebarRepository implements SidebarRepositoryInterface
{
    public function findAllItems(): array
    {
        return (new Query())
            ->from('sys_sidebar')
            ->all();
    }

}