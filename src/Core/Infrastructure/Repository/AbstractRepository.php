<?php
namespace src\Core\Infrastructure\Repository;

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
    public function delete(EntityInterface $entity): bool
    {

    }

    public function save(EntityInterface $entity): bool
    {
      if ($entity->sys_id) {
          return $this->update($entity);
      }
      return $this->insert($entity);
    }

    public function update(EntityInterface $entity): bool
    {
        $attributes = $entity->geAttributes();
        unset($attributes['sys_id']);
        return (bool)Yii::$app->db->createCommand()
            ->update($entity->getTableName(), $attributes, ['sys_id' => $entity->sys_id])
            ->execute();
    }
}