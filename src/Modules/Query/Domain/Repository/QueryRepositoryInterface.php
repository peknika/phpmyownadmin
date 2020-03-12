<?php
namespace src\Modules\Query\Domain\Repository;


use src\Core\Domain\Entity\EntityInterface;

interface QueryRepositoryInterface
{
    public function findOneById(int $id);
}