<?php
/* @var $columns array */

//$columns = ['name' => 'name', 'type' => 'value'];
$output = null;

use yii\helpers\Html;

?>
<h1>Create Table</h1>
<br>
<?= Html::beginForm([''], 'post', ['class' => 'form-horizontal']) ?>
<div class="form-group">
    <label class="control-label col-sm-2" for="table_name">Table Name:</label>
    <div class="col-sm-8">
        <?= Html::textInput('table_name', null, ['class' => "form-control"]) ?>
    </div>
</div>
<div class="form-group">
    <div class="control-label col-sm2">
        <?= Html::button('+', ['class' => "btn btn-default add-more"]) ?>
        <div class="col-sm-8">
            <div class="input-group-prepend">
                <label class="sr-only" for="name"></label>
                <?= Html::textInput('name', null, ['class' => "form-control", 'placeholder' => 'column name']) ?>
                <label class="sr-only" for="type"></label>
                <?= Html::dropDownList('type', '', ['string', 'integer', 'boolean'], ['class' => "form-control", 'prompt' => 'column type']) ?>
            </div>
        </div>
    </div>
    <br>
</div>
<div class="control-label col-sm-1">
    <?= Html::submitButton('Save', [
        'class' => 'btn btn-default',
        'formaction' => '/record/save/sys_query',
    ]) ?>
</div>
<?= Html::endForm() ?>

<script>

</script>
<?php
if ($output) {
    echo Html::ul($output);
}

?>
