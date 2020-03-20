<?php

namespace backend\controllers;

use src\Modules\Query\Domain\Service\QueryService;
use src\Modules\Sidebar\Application\Command\GetSidebarItemsCommand;
use Throwable;
use Yii;

class QueryController extends BasicController
{
    /**
     * @var QueryService
     */
    private $queryService;

    public function __construct($id, $module, GetSidebarItemsCommand $getSIC, QueryService $queryService, $config = [])
    {
        parent::__construct($id, $module, $getSIC, $config);
        parent::getSidebarAction();
        $this->queryService = $queryService;
    }

//    public function actionIndex($query_name = null, $query_body = null)
//    {
//        $data = Yii::$app->request->get();
//        return $this->render('index', ['query_name' => $query_name, 'query_body' => $query_body, 'output' => null]);
//    }

    public function actionExecute()
    {
        $data = Yii::$app->request->post();
        $result = null;
        try {
            $result = $this->queryService->executeQuery($data['query_body']);
            Yii::$app->session->addFlash('success', 'Executed successfully');
        } catch (Throwable $exception) {
            Yii::$app->session->addFlash('danger', $exception->getMessage());
        }
        return $this->render('/record/sys_query', [
            'data' => $data,
            'output' => $result
        ]);
    }

//    public function actionSave()
//    {
//        try {
//            $data = Yii::$app->request->post();
//            $this->queryService->saveQuery($data);
//            Yii::$app->session->addFlash('success', 'Successfully saved');
//            return $this->render('index', ['query_body' => $data['query_body'], 'query_name' => $data['query_name'], 'output' => null]);
//        } catch (Throwable $exception) {
//            Yii::$app->session->addFlash('danger', $exception->getMessage());
//        }
//    }
}