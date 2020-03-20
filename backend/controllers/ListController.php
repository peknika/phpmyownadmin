<?php

namespace backend\controllers;

use src\Modules\ListContext\Domain\Service\ListService;
use src\Modules\Sidebar\Application\Command\GetSidebarItemsCommand;
use Yii;
use yii\web\Controller;

class ListController extends BasicController
{
    /**
     * @var ListService
     */
    private $listService;

    public function __construct($id, $module, GetSidebarItemsCommand $getSidebarItemsCommand, ListService $listService, $config = [])
    {
        parent::__construct($id, $module, $getSidebarItemsCommand, $config);
        parent::getSidebarAction();
        $this->listService = $listService;
    }

    public function actionIndex()
    {
        $tableName = Yii::$app->request->get('table_name') ?? 'sys_table';
        $tableItems = $this->listService->getAllByTableName($tableName);

        return $this->render('index', ['tableName' => $tableName,'items' => $tableItems]);
    }
}
