<?php


namespace src\Modules\ListContext\Domain\Repository;


interface ListRepositoryInterface
{
    public function findAllByTableName(string $tableName): array;

}