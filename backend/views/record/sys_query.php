<?php
/* @var $data array */
/* @var $output array */

use yii\helpers\Html;

$query_body = $data ? $data['query_body'] : null;
$query_name = $data ? $data['query_name'] : null;
?>
<h1>Your PostgreSQL</h1>
<br>
<?= Html::beginForm([''], 'post', ['class' => 'form-horizontal']) ?>
<div class="form-group">
    <label class="control-label col-sm-2" for="query">Query:</label>
    <div class="col-sm-8">
        <?= Html::textarea('query_body', $query_body, ['class' => "form-control", 'autofocus' => true]) ?>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-8">
        <?= Html::textInput('query_name', $query_name, ['class' => "form-control"]) ?>
    </div>
</div>
<div class="col-sm-offset-2 col-sm-10 btn-group btn-group-lg" role="group" aria-label="...">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-default', 'formaction' => '/record/save/sys_query', 'value' => 'save']) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Execute', ['class' => 'btn btn-default', 'formaction' => '/query/execute', 'value' => 'execute']) ?>
    </div>
</div>
<?= Html::endForm() ?>

<?php
if($output) {
    echo Html::ul($output);
}

?>
