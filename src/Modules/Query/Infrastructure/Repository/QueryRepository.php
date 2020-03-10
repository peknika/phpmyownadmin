<?php

namespace src\Modules\Query\Infrastructure\Repository;

use src\Core\Infrastructure\AbstractRepository;
use src\Core\Modules\Query\Domain\Entity\SysQuery;
use Yii;
use yii\db\Exception;
use yii\db\Query;

class QueryRepository extends AbstractRepository
{
 //   private $query;

//    public function __construct(SysQuery $query)
//    {
//        $this->query = $query;
//    }

    public function executeQuery(string $query)
    {
        try {
            return Yii::$app->db->createCommand($query)->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getQueryEntity(): SysQuery
    {
        return new SysQuery();
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
}