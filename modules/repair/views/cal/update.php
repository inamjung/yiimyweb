<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\repair\models\Cal */

$this->title = 'Update Cal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cal-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <div class="panel panel-info">
        <div class="panel-heading"> แก้ไขการสอบเทียบเครื่องมือ</div>
        <div class="panel-body">
           <?= $this->render('_form', [
        'model' => $model,
        'modelDetails' => $modelDetails
    ]) ?> 
        </div>
    </div>
</div>

