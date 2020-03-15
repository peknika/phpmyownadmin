<?php

namespace backend\controllers;

use src\Modules\Record\Infrastructure\Service\RecordService;
use Yii;
use src\Modules\Query\Domain\Entity\SysQuery;
use yii\web\Controller;

class RecordController extends Controller
{
    /**
     * @var RecordService
     */
    private $recordService;

    public function __construct($id, $module, RecordService $recordService, $config = [])
    {
        parent::__construct($id, $module, $config);

        $this->recordService = $recordService;
    }

    public function actionIndex($id, $tableName)
    {
        $data = $this->recordService->getRecord($id, $tableName);
        return $this->render('index', ['data' => $data]);
    }

    /**
     * @return \yii\web\Response
     * @throws \yii\db\Exception
     */
    public function actionCreate()
    {
        $data = Yii::$app->request->get();
        $this->actionQueryExecute($query);

        if(count($query) === 3)
        {
            $queryEntity = $this->mapper->map($query, new SysQuery());
            $this->queryRepository->insert($queryEntity);
            return $this->redirect(Yii::$app->request->referrer);
        }
    }
}
