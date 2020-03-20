<?php

namespace src\Modules\Record\Infrastructure\Repository;

use src\Core\Domain\Entity\EntityInterface;
use src\Core\Domain\Mapper\MapService;
use src\Core\Infrastructure\Repository\AbstractRepository;
use src\Modules\Record\Domain\Entity\DynamicEntity;
use src\Modules\Record\Domain\Repository\RecordRepositoryInterface;
use yii\db\Query;

class RecordRepository extends AbstractRepository implements RecordRepositoryInterface
{
    /**
     * @var MapService
     */
    private $mapService;

    public function __construct(MapService $mapService)
    {
        $this->mapService = $mapService;
    }

    public function findOneById(int $id, string $tableName): DynamicEntity
    {
        $data =  (new Query())
            ->from($tableName)
            ->where(['sys_id' => $id])
            ->one();
        return $this->mapService->map($data, new DynamicEntity($tableName, $data));
    }

}