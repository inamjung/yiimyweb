<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
?>
<?php $form = ActiveForm::begin(['method' => 'get',
'action' => Url::to(['hosxpreport/personpttype'])]);?>

<div class="well">
    ระหว่างวันที่:
        <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date1',
            'value' => $date1,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options'=>[
                'class'=>'form-control'
            ],
        ]);
        ?>           
        ถึงวันที่:
        <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date2',
            'value' => $date2,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options'=>[
                'class'=>'form-control'
            ],            
        ]);
        ?>
        </div>  
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?php
                $a = ['10' => 'จ่ายเงินสด', '89' => 'บัตรทอง'];
        //$a =    ArrayHelper::map(\app\models\Departmentrisk::find()->all(), 'id', 'name');
            echo Select2::widget([
                'name' => 'pttype',
                'data' => $a,
                'value' => $pttype,
                'size' => Select2::MEDIUM,
                'options' => ['placeholder' => 'เลือก สิทธิ์..'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?> 
            </div>    
         
        <div class="col-xs-2 col-sm-2 col-md-2">
            <button class='btn btn-danger'>ประมวลผล</button>
        </div>    
         
</div>      
</div>

<?php ActiveForm::end();?>

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
