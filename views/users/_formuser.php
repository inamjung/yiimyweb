<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['readonly'=>true,'maxlength' => true]) ?>
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'department_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(app\models\Departments::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<-- ระบุแผนก -->'           
        ],
        'pluginOptions'=>[
             'allowClear'=>true
        ]
    ]) ?>
    
    <?= $form->field($model, 'position_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(app\models\Positions::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<-- ระบุตำแหน่ง -->'           
        ],
        'pluginOptions'=>[
             'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avatar_img')->label('รูปประจำตัว')->fileInput() ?>  
   
           <?php if ($model->avatar) { ?>
                  <?php  Html::img('avatars/' . $model->avatar, ['class' => 'img-responsive img-circle', 'width' => '150px;']); ?>
           <?php } ?> 



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
