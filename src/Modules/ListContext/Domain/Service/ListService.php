<?php

namespace src\Modules\ListContext\Domain\Service;

use src\Modules\ListContext\Domain\Repository\ListRepositoryInterface;

class ListService
{
    /**
     * @var ListRepositoryInterface
     */
    private $listRepository;

    public function __construct(ListRepositoryInterface $listRepository)
    {

        $this->listRepository = $listRepository;
    }

    public function getAllByTableName(string $tableName): array
    {
        return $this->listRepository->findAllByTableName($tableName);
    }
}