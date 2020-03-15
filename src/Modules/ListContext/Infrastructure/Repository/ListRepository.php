<?php


namespace src\Modules\ListContext\Infrastructure\Repository;


use src\Modules\ListContext\Domain\Repository\ListRepositoryInterface;
use yii\db\Query;

class ListRepository implements ListRepositoryInterface
{
    public function findAllByTableName(string $tableName): array
    {
        return (new Query())
            ->from($tableName)
            ->all();
    }
}