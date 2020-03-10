<?php

namespace src\Modules\Record\Domain;

interface RecordRepositoryInterface
{
    public function getAllByTableName(string $tableName): array;
}