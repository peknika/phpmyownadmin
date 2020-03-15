<?php

namespace backend\controllers;

use src\Modules\ListContext\Domain\Service\ListService;
use Yii;
use yii\web\Controller;

class ListController extends Controller
{
    /**
     * @var ListService
     */
    private $listService;

    public function __construct($id, $module, ListService $listService, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->listService = $listService;
    }


    /**
     * @param $table_name
     * @return string
     */
    public function actionIndex()
    {
        $tableName = Yii::$app->request->get('table_name') ?? 'sys_table';
        $tableItems = $this->listService->getAllByTableName($tableName);

        return $this->render('index', ['tableName' => $tableName,'items' => $tableItems]);
    }
}
