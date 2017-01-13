<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\repair\models\Cal */

$this->title = 'Create Cal';
$this->params['breadcrumbs'][] = ['label' => 'Cals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cal-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <div class="panel panel-default">
        <div class="panel-heading"> บันทึกการสอบเทียบเครื่องมือ</div>
        <div class="panel-body">
           <?= $this->render('_form', [
        'model' => $model,
        'modelDetails' => $modelDetails
    ]) ?> 
        </div>
    </div>
</div>
