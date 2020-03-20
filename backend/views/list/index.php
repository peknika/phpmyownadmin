<?php

use common\widgets\Grid;
use yii\bootstrap\Html;
use kartik\icons\Icon;

Icon::map($this);

/* @var $tableName string */
/* @var $items array */

?>
<h1><?= Html::encode($tableName) ?></h1>

<?= Grid::widget([
    'tableName' => $tableName,
    'items' => $items,
    'eye' => Icon::show('far fa-eye'),
    'trash' => Icon::show('fas fa-trash-alt')
]); ?>

<tr id="add">
    <td>

    </td>
    <td>
    </td>
</tr>