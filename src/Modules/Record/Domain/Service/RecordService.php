<?php

namespace src\Modules\Record\Domain\Service;

use src\Modules\Record\Domain\Command\RecordSaveCommand;
use src\Modules\Record\Domain\Entity\DynamicEntity;
use src\Modules\Record\Infrastructure\Repository\RecordRepository;

class RecordService
{
    /**
     * @var RecordRepository
     */
    private $recordRepository;
    /**
     * @var RecordSaveCommand
     */
    private $recordSaveCommand;

    public function __construct(RecordRepository $recordRepository, RecordSaveCommand $recordSaveCommand)
    {
        $this->recordRepository = $recordRepository;
        $this->recordSaveCommand = $recordSaveCommand;
    }
    public function getRecordById($id, $tableName): DynamicEntity
    {
        return $this->recordRepository->findOneById($id, $tableName);
    }

    public function getRecordByName($id, $tableName): array
    {

    }

    public function saveRecord(string $tableName, array $data): void
    {
        $entity = new dynamicEntity($tableName, $data);
        $this->recordSaveCommand->execute($entity);
    }


}