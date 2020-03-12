<?php

use common\widgets\Grid;
use yii\bootstrap\Html;

/* @var $items array */

?>

    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <?= Grid::widget(['items' => $items]); ?>
            </div>
        </div>
    </div>
