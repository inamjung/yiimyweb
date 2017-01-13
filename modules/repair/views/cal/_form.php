<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\repair\models\CalItem;
use app\modules\repair\models\Tools;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\repair\models\Cal */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $this->registerJs("
    $('.delete-button').click(function() {
        var detail = $(this).closest('.cal-detail');
        var updateType = detail.find('.update-type');
        if (updateType.val() === " . json_encode(CalItem::UPDATE_TYPE_UPDATE) . ") {
            //marking the row for deletion
            updateType.val(" . json_encode(CalItem::UPDATE_TYPE_DELETE) . ");
            detail.hide();
        } else {
            //if the row is a new row, delete the row
            detail.remove();
        }

    });
");
?>

<div class="cal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cal_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next')->textInput(['maxlength' => true]) ?>
    
    <?php foreach ($modelDetails as $i => $modelDetail) : ?>
        <div class="row cal-detail cal-detail-<?= $i ?>">
            <div class="col-md-4">
                <?= Html::activeHiddenInput($modelDetail, "[$i]id") ?>
                <?= Html::activeHiddenInput($modelDetail, "[$i]updateType", ['class' => 'update-type']) ?>
                
                <?= $form->field($modelDetail, "[$i]tool_id")->label('') ->widget(\kartik\select2\Select2::className(),[
                    'data'=> ArrayHelper::map(app\modules\repair\models\Tools::find()->all(), 'id',
                            function($model,$defaultValue){
                            return $model->name;
                            }),
                    'options'=>['placeholder'=>'<--รายการ-->'],
                    'pluginOptions'=>['allowClear'=>true]
                ]) ?>
                </div>
                <div class="col-md-1">
                <?= $form->field($modelDetail, "[$i]result")->label('') ?>                    
                </div>
            
            
            
            <div class="col-md-2">
                <?= Html::button('x', ['class' => 'delete-button btn btn-danger', 'data-target' => "receipt-detail-$i"]) ?>
            </div>
        </div>
    <?php endforeach; ?>

   <div class="form-group">
       <div class="row">
           <div class="col-sm-offset-1 col-sm-2">
               <?= Html::submitButton('<i class="glyphicon glyphicon-plus"></i> เพิ่มรายการจ่าย', ['name' => 'addRow', 'value' => 'true', 'class' => 'btn btn-info']) ?>
           </div>
           <div class="col-sm-offset-2 col-sm-2">
               <?= Html::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-ok"></i> บันทึก' : '<i class="glyphicon glyphicon-ok"></i> บันทึกการแก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
           </div>
           
           
       </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
