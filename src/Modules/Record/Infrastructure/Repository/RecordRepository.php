<?php


namespace src\Core\Infrastructure\Repository;


use yii\db\Query;

class RecordRepository
{
    public function getAllByTableName(string $tableName): array
    {
        return (new Query())
            ->from($tableName)
            ->all();
    }

}