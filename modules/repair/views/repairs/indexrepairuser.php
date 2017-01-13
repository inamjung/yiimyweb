<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\repair\models\RepairsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Repairs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Repairs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'department_id',
             'satatus',
            'datenotuse',
            [
               'attribute'=>'tool_id',
                'value'=> 'repairtool.name',
            ],           
            //'tool_id',
            'problem:ntext',
            // 'stage',
            // 'startdate',
            
            // 'dateplan',
             'remark:ntext',
             'answer',
            // 'enddate',
            // 'user_id',
            // 'createDate',
            // 'updateDate',
            // 'approve',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>