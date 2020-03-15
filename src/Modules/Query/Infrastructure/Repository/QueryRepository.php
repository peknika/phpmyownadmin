<?php

namespace src\Modules\Query\Infrastructure\Repository;

use src\Core\Infrastructure\Repository\AbstractRepository;
use src\Modules\Query\Domain\Entity\SysQuery;
use src\Modules\Query\Domain\Repository\QueryRepositoryInterface;
use Yii;
use yii\db\Exception;
use yii\db\Query;

class QueryRepository extends AbstractRepository implements QueryRepositoryInterface
{
    public function executeQuery(string $query)
    {
        return Yii::$app->db->createCommand($query)->execute();
    }

    public function findOneById(int $id)
    {
        return (new Query())
            ->from(SysQuery::TABLE_NAME)
            ->where([
                'id' => $id
            ])
            ->one();
    }

    public function findOneByName($queryName)
    {
        return (new Query())
            ->from(SysQuery::TABLE_NAME)
            ->where([
                'query_name' => $queryName
            ])
            ->one();
    }
}