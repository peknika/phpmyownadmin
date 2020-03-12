<?php


namespace src\Core\Infrastructure\RecordService;


use yii\db\Query;

class RecordService
{
    public function getAllByTableName(string $tableName): array
    {
        return (new Query())
            ->from($tableName)
            ->all();
    }

}