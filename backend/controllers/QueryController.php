<?php

namespace backend\controllers;

use src\Modules\Query\Domain\Service\QueryService;
use src\Modules\Record\Infrastructure\Service\RecordService;
use Yii;
use yii\web\Controller;

class QueryController extends Controller
{
    /**
     * @var QueryService
     */
    private $queryService;
    /**
     * @var RecordService
     */
    private $recordService;

    /**
     * QueryController constructor.
     * @param $id
     * @param $module
     * @param QueryService $queryService
     * @param array $config
     */
    public function __construct($id, $module, QueryService $queryService, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->queryService = $queryService;
    }

    public function actionIndex($query_name = null, $query_body = null)
    {
        $data = Yii::$app->request->get();
        return $this->render('index', ['query_name' => $query_name, 'query_body' => $query_body]);
    }

    public function actionExecute()
    {
        $data = Yii::$app->request->post();
        $message = $this->queryService->executeQuery($data['query_body']);
        $key = 'danger';
        if (!$message) {
            $key = 'success';
            $message = 'Executed successfully';
        }
        Yii::$app->session->addFlash($key, $message);
        return $this->render('index', ['query_body' => $data['query_body'], 'query_name' => $data['query_name']]);
    }

    public function actionSave()
    {
        try {
            $data = Yii::$app->request->post();
            $this->queryService->saveQuery($data);
            Yii::$app->session->addFlash('success', 'Successfully saved');
            return $this->render('index', ['query_body' => $data['query_body'], 'query_name' => $data['query_name']]);
        } catch (\Throwable $exception) {
            Yii::$app->session->addFlash('danger', $exception->getMessage());
        }
    }
}