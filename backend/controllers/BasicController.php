<?php

namespace backend\controllers;

use src\Modules\Sidebar\Application\Command\GetSidebarItemsCommand;
use yii\base\Controller;

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


// Yii::$app->params['sidebarItems'] = $this->getSidebarItemsCommand->execute();

}