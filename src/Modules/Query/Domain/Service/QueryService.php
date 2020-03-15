<?php

namespace src\Modules\Query\Domain\Service;

use src\Core\Domain\Mapper\MapService;
use src\Modules\Query\Domain\Entity\SysQuery;
use src\Modules\Query\Infrastructure\Repository\QueryRepository;
use src\Modules\Record\Infrastructure\Service\RecordService;
use yii\db\Exception;

class QueryService
{
    /**
     * @var QueryRepository
     */
    private $queryRepository;
    /**
     * @var MapService
     */
    private $mapService;
    /**
     * @var RecordService
     */
    private $recordService;

    /**
     * QueryService constructor.
     * @param QueryRepository $queryRepository
     * @param MapService $mapService
     */
    public function __construct(QueryRepository $queryRepository, MapService $mapService)
    {
        $this->queryRepository = $queryRepository;
        $this->mapService = $mapService;
    }

    /**
     * @param string $query
     * @return string
     */
    public function executeQuery(string $query)
    {
        try {
            $this->queryRepository->executeQuery($query);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    /**
     * @param array $query
     */
    public function saveQuery(array $query): void
    {
        $savedQuery = $this->queryRepository->findOneByName($query['query_name']);
        $queryEntity = $this->mapService->map($savedQuery ? $savedQuery : $query, new SysQuery());
        $this->queryRepository->save($queryEntity);
    }
}