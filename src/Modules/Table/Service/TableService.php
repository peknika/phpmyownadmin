<?php


namespace src\Modules\Table\Service;


class TableService
{
    public function __construct()
    {

    }
    public function saveQuery(array $query): void
    {
        $savedQuery = $this->queryRepository->findOneByName($query['query_name']);
        $queryEntity = $this->mapService->map($savedQuery ? $savedQuery : $query, new SysQuery());
        $this->queryRepository->save($queryEntity);
    }
}