<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;
/* @var $this yii\web\View */
/* @var $model app\modules\repair\models\Tools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tools-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'tooltype_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(app\modules\repair\models\Tooltypes::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<--ประเภท-->'            
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'department_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(app\models\Departments::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<--ใช้งานที่-->'            
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'buy_date')->textInput() ?>

    <?= $form->field($model, 'picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exp_date')->textInput() ?>

    <?= $form->field($model, 'use')->widget(CheckboxX::classname(), [
                                'pluginOptions' => ['threeState' => false],
                            ])->label('ใช้งาน/เลิกใช้งาน'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
