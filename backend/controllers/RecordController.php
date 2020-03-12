<?php

namespace backend\controllers;

use src\Modules\Query\Infrastructure\Repository\QueryRepository;
use Yii;
use src\Core\Domain\Mapper\MapService;
use src\Modules\Query\Domain\Entity\SysQuery;
use yii\web\Controller;

class RecordController extends Controller
{

    /**
     * @var QueryRepository
     */
    private $queryRepository;
    /**
     * @var MapService
     */
    private $mapper;

    public function __construct($id, $module, QueryRepository $queryRepository, MapService $mapper, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->queryRepository = $queryRepository;
        $this->mapper = $mapper;
    }

    public function actionIndex($id)
    {

    }

    public function actionQuery()
    {
        return $this->render('query') ;
    }

    public function actionQueryCreate()
    {
        $query=Yii::$app->request->get();
        $this->queryRepository->executeQuery($query['query_body']);
        if(count($query) === 3)
        {
            $queryEntity = $this->mapper->map($query, new SysQuery());
            $this->queryRepository->insert($queryEntity);
        }
    }
}
