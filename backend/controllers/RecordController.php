<?php

namespace backend\controllers;

use src\Modules\Query\Infrastructure\Repository\QueryRepository;
use yii\web\Controller;

class RecordController extends Controller
{
    /**
     * @var QueryRepository
     */
    private $queryRepository;

    public function __construct($id, $module, QueryRepository $queryRepository, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->queryRepository = $queryRepository;
    }

    public function actionQuery()
    {
        return $this->render('index', ['model' => $this->queryRepository->getQueryEntity()]) ;
    }

    public function actionView($id)
    {

    }

    public function actionCreate($entity)
    {

    }

    public function actionExecute($query)
    {

    }
    
}
