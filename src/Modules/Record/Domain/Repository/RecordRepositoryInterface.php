<?php

namespace src\Modules\Record\Domain\Repository;

use src\Modules\Record\Domain\Entity\DynamicEntity;

interface RecordRepositoryInterface
{
    public function findOneById(int $id, string $tableName): DynamicEntity;
}