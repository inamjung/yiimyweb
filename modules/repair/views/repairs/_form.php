<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\repair\models\Repairs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repairs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'datenotuse')->textInput() ?>

    <?= $form->field($model, 'tool_id')->textInput() ?>

    <?= $form->field($model, 'problem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stage')->dropDownList([ 'รอได้ภายใน 3 วัน' => 'รอได้ภายใน 3 วัน', 'รอได้ภายใน 7 วัน' => 'รอได้ภายใน 7 วัน', 'รอได้ภายใน 1 วัน' => 'รอได้ภายใน 1 วัน', ], ['prompt' => '']) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
