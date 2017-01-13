<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DepDrop;

/* @var $this yii\web\View */
/* @var $model app\modules\repair\models\Repairs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repairs-form">

    <?php $form = ActiveForm::begin(); ?>
    
<?= $form->field($model, 'datenotuse')->widget(yii\jui\DatePicker::className(),[
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => TRUE
                ],
                'options' => ['class' => 'form-control']
                
            ]) ?>
   <?= $form->field($model, 'department_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(app\models\Departments::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<-- ระบุแผนก -->'           
        ],
        'pluginOptions'=>[
             'allowClear'=>true
        ]
    ]) ?>
   
    <?=
            $form->field($model, 'tool_id')->widget(DepDrop::className(), [
                        'data' => [$re],
                        'options' => ['placeholder' => '<--เลือกรายการส่งซ่อม-->'],
                        'type' => DepDrop::TYPE_SELECT2,
                        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                        'pluginOptions' => [
                            'depends' => ['repairs-department_id'],            
                            'url' => yii\helpers\Url::to(['/repair/repairs/get-tool']),
                            'loadingText' => 'Loading1...',
                        ],
                    ]);
            ?>

    <?= $form->field($model, 'problem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stage')->radioList([ 'รอได้ภายใน 3 วัน' => 'รอได้ภายใน 3 วัน', 'รอได้ภายใน 7 วัน' => 'รอได้ภายใน 7 วัน', 'รอได้ภายใน 1 วัน' => 'รอได้ภายใน 1 วัน', ], ['prompt' => '']) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
