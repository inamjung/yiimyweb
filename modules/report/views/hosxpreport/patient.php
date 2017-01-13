<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use miloschuman\highcharts\Highcharts;

$datas = $dataProvider->getModels();

?>
<?php $form = ActiveForm::begin(['method' => 'get',
            'action' => Url::to(['/report/hosxpreport/patient'])]);
?>
<div class='well'>
    <form method="POST">       
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2">            
                <input type="text" name="cid"  class="form-control" placeholder="...ระบุเลขประชาชน..">
            </div> 
            <div class="col-xs-2 col-sm-2 col-md-2">
                <button class='btn btn-danger'>ประมวลผล</button>
            </div>
        </div>
    </form>
</div>


<?php ActiveForm::end(); ?>
<?php
$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
        'attribute' => 'cid',
        'label' => 'CID/ส่งค่าบันทึกในpatient',
        'headerOptions' => ['class' => 'text-center'],
        'contentOptions' => ['class' => 'text-center'],
        'format' => 'raw',
        'value' => function($model, $key, $widget)use($cid,$hos_guid) {
            return Html::a(Html::encode($model['cid']), [
                '/report/hosxpreport/insertpt',
                //'id' => $model['hos_guid'],
                'cid' => $model['cid'],
                'hn' => $model['hn'],
                'pname' => $model['pname'],
                'fname' => $model['fname'],
                'lname' => $model['lname'],
                
             
                    ]
    );
}
    ],
    [
        'attribute' => 'hn',
        'label' => 'HN',
        'headerOptions' => ['class' => 'text-center']
    ],
    [
        'attribute' => 'pname',
        'label' => 'คำนำหน้า',
        'headerOptions' => ['class' => 'text-center']
    ],
    [
        'attribute' => 'fname',
        'label' => 'ชื่อ',
        'headerOptions' => ['class' => 'text-center']
    ],
    [
        'attribute' => 'lname',
        'label' => 'นามสกุล',
        'headerOptions' => ['class' => 'text-center']
    ],
    
];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'columns' => $gridColumns,
    'responsive' => true,
    'hover' => true,
    'striped' => false,
    'floatHeader' => FALSE,
    //'showPageSummary' => true,
    'panel' => [
        'type' => GridView::TYPE_SUCCESS,
        'heading' => 'สิบอันดับโรค OPD'
    ],
]);
?>

