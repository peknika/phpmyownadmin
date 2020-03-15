<?php
namespace src\Modules\Query\Domain\Repository;

interface QueryRepositoryInterface
{
    public function findOneById(int $id);

    public function findOneByName(string $queryName);
}