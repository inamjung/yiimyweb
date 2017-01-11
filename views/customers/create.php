<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = 'พนักงาน';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <div class="panel panel-primary">
        <div class="panel-heading"> ข้อมูลพนักงาน</div>
        <div class="panel-body">
            <?=
            $this->render('_form', [
                'model' => $model,
                'ch' => [],
                'am' => [],
                'depart'=>[]
            ])
            ?>
        </div>
    </div>
</div>
