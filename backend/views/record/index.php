<?php

use src\Core\Modules\Query\Domain\Entity\SysQuery;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model SysQuery */

?>
<div class="container">
    <h2>Your Postgress Query</h2>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Query</label>
            <div class="col-sm-10">
                <?php $form = ActiveForm::begin(['method' => 'post', 'action' => [
                    'comment/add'
                ],]); ?>

                <?= $form->field($model, 'query')->textarea(['rows' => 3]) ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Name</label>
            <div class="col-sm-10">
                <?= $form->field($model, 'query')->textInput() ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Save</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
