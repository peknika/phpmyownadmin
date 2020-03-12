<?php
namespace src\Core\Infrastructure;


use src\Core\Domain\Entity\EntityInterface;
use Yii;

abstract class AbstractRepository
{
    public function insert(EntityInterface $entity): bool
    {
        return (bool)Yii::$app->db->createCommand()
            ->insert($entity->getTableName(), $entity->geAttributes())
            ->execute();
    }

    public function remove(EntityInterface $entity): bool
    {

    }

    public function create(EntityInterface $entity): bool
    {
        $entity->getTableName();
        get_object_vars($entity);
    }

    public function update(EntityInterface $entity): bool
    {

    }
}