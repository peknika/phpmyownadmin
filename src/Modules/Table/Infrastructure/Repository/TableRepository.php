<?php

namespace src\Modules\Table\Infrastructure\Repository;


use src\Core\Infrastructure\Repository\AbstractRepository;
use src\Modules\Table\Domain\Entity\SysTable;
use Yii;
use yii\db\Exception;
use yii\db\Query;

class TableRepository extends AbstractRepository
{
    public function create(SysTable $tentity)
    {
        try {
            Yii::$app->db->createCommand('')->execute();
            $this->insert($tentity);
        } catch (Exception $e) {
        }
    }
}