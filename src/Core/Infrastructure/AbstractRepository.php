<?php
namespace src\Core\Infrastructure;


use src\Core\Domain\Entity\EntityInterface;
use Yii;

abstract class AbstractRepository
{
    /**
     * @param EntityInterface $entity
     * @return bool
     * @throws \yii\db\Exception
     */
    public function insert(EntityInterface $entity): bool
    {
        $attributes = $entity->geAttributes();
        unset($attributes['sys_id']);
        return (bool)Yii::$app->db->createCommand()
            ->insert($entity->getTableName(), $attributes)
            ->execute();
    }

    /**
     * @param EntityInterface $entity
     * @return bool
     */
    public function remove(EntityInterface $entity): bool
    {

    }

    public function create(EntityInterface $entity): bool
    {
      if ($entity->id) {
          return $this->insert($entity);
      }
      return $this->save($entity);
    }

    public function update(EntityInterface $entity): bool
    {

    }
}