<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['method' => 'get',
'action' => Url::to(['hosxpreport/personpttype'])]);?>
<?php
$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
        'attribute'=>'vstdate',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
        'contentOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'hn',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
        'contentOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'pname',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
        //'contentOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'fname',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
       // 'contentOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'lname',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
       // 'contentOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'pdx',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
        'contentOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'icdname',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
        //'contentOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'pttype',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
        'contentOptions'=>['class'=>'text-center']
    ],
    
    ];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'columns' => $gridColumns,
    'responsive' => true,
    'hover' => true,
    'striped' => false,
    'panel' => [
        'type' => GridView::TYPE_SUCCESS,
        'heading' => 'รานชื่อผู้ป่วยตามสิทธิ์',        
    ],
]);

 ?>
