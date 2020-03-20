<?php


namespace src\Modules\Record\Domain\Command;


use src\Core\Domain\Service\GenerateIdService;
use src\Modules\Record\Domain\Entity\DynamicEntity;

class RecordSaveCommand
{
    /**
     * @var GenerateIdService
     */
    private $generateIdService;

    public function __construct(GenerateIdService $generateIdService)
    {
        $this->generateIdService = $generateIdService;
    }

    /**
     * @param DynamicEntity $entity
     */
    public function execute($entity)
    {
        if(!isset($entity->sys_id)) {
            $entity['sys_id'] = $this->generateIdService->makeId($entity->geAttributes());
    }
        $this->recordRepository->save($entity);
    }
}