<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\repair\models\CalItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cal Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cal-item-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'caltool.name',
            'result',
//            'number_group',
//            'numberpas',
            // 'department_id',
            // 'cal_id',
            // 'remark',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
