<?php

namespace backend\controllers;

use src\Modules\Sidebar\Application\Command\GetSidebarItemsCommand;
use Yii;
use yii\web\Controller;

class BasicController extends Controller
{
    /**
     * @var GetSidebarItemsCommand
     */
    private $getSidebarItemsCommand;

    public function __construct($id, $module, getSidebarItemsCommand $getSidebarItemsCommand, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->getSidebarItemsCommand = $getSidebarItemsCommand;
    }

    public function getSidebarAction()
    {
        Yii::$app->params['sidebarItems'] = $this->getSidebarItemsCommand->execute();
    }



}