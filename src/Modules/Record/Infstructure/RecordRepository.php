<?php

namespace src\Modules\Record\Infrastructure\RecordRepository;

use src\Core\Infrastructure\AbstractRepository;
use src\Modules\Record\Domain\RecordRepositoryInterface;

class RecordRepository extends AbstractRepository implements RecordRepositoryInterface
{
    public function getAllByTableName(string $tableName): array
    {

    }
}