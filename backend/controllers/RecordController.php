<?php

namespace backend\controllers;

use src\Modules\Record\Domain\Service\RecordService;
use src\Modules\Sidebar\Application\Command\GetSidebarItemsCommand;
use Yii;
use yii\web\Controller;

class RecordController extends BasicController
{

    /**
     * @var RecordService
     */
    private $recordService;

    public function __construct($id, $module, GetSidebarItemsCommand $getSIC, RecordService $recordService, $config = [])
    {
        parent::__construct($id, $module, $getSIC, $config);
        parent::getSidebarAction();
        $this->recordService = $recordService;
    }

    public function actionIndex()
    {
        $id = Yii::$app->request->get('sys_id');
        $tableName = Yii::$app->request->get('table_name');
        $data = $id ? $this->recordService->getRecordById($id, $tableName) : null;
        return $this->render($tableName, ['data' => $data, 'output' => null]);
    }

    public function actionCreate()
    {
        $tableName = Yii::$app->request->get('table_name');
        return $this->render($tableName);
    }

    public function actionSave()
    {
        try {
            $data = Yii::$app->request->post();
            $tableName = Yii::$app->request->get('table_name');
            $this->recordService->saveRecord($tableName, array_filter($data, function ($value) {
                return startsWith( Value, startString );
            }));
            Yii::$app->session->addFlash('success', 'Successfully saved');
            return $this->render('index', ['query_body' => $data['query_body'], 'query_name' => $data['query_name']]);
        } catch (\Throwable $exception) {
            Yii::$app->session->addFlash('danger', $exception->getMessage());
        }
    }


}
