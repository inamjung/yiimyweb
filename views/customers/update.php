<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = 'Update Customers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customers-update">

    <div class="panel panel-info">
        <div class="panel-heading"> ข้อมูลพนักงาน</div>
        <div class="panel-body">
            <?=
            $this->render('_form', [
                'model' => $model,
                'ch' => $ch,
                'am' => $am,
                'depart' => $depart
            ])
            ?>
        </div>
    </div>



</div>
