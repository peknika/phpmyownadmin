<?php

namespace backend\controllers;

use src\Core\Domain\Mapper\MapService;
use src\Core\Infrastructure\RecordService\RecordService;
use yii\web\Controller;

class ListController extends Controller
{

    /**
     * @var MapService
     */
    private $mapper;
    /**
     * @var RecordService
     */
    private $recordService;


    public function __construct($id, $module, MapService $mapper, RecordService $recordService, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->mapper = $mapper;
        $this->recordService = $recordService;
    }


    /**
     * @param $table_name
     * @return string
     */
    public function actionIndex($table_name)
    {
        $tableItems = $this->recordService->getAllByTableName($table_name);

        return $this->render('index', ['items' => $tableItems]);
    }
}
