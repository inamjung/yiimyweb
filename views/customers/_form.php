<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DepDrop;
use yii\web\UploadedFile;


/* @var $this yii\web\View */
/* @var $model app\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-3">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <?= $form->field($model, 'addr')->textarea(['row' => 3]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">            
              <?= $form->field($model, 'c')->widget(\kartik\widgets\Select2::className(),[
                'data'=> yii\helpers\ArrayHelper::map(\app\models\Chw::find()->all(), 'id', 'name'),
                'options'=>[
                    'placeholder'=>'-- ระบุจังหวัด --'                    
                ],
                'pluginOptions'=>[
                    'allowClear'=>true
                ]
            ]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">            
            <?=
            $form->field($model, 'a')->widget(DepDrop::className(), [
                        'data' => [$ch],
                        'options' => ['placeholder' => '<--เลือกอำเภอ-->'],
                        'type' => DepDrop::TYPE_SELECT2,
                        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                        'pluginOptions' => [
                            'depends' => ['customers-c'],            
                            'url' => yii\helpers\Url::to(['/customers/get-ch']),
                            'loadingText' => 'Loading1...',
                        ],
                    ]);
            ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 't')->widget(DepDrop::className(), [
                        'data' => [$am],
                        'options' => ['placeholder' => '<--คลิกเลือกตำบล-->',                            
                            ],                        
                        'type' => DepDrop::TYPE_SELECT2,
                        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                        'pluginOptions' => [
                            'depends' => ['customers-c', 'customers-a'],            
                            'url' => yii\helpers\Url::to(['customers/get-am']),
                            'loadingText' => 'Loading2...',
                        ],
                    ]);
            ?>
        </div> 
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'p')->textInput(['maxlength' => true]) ?> 
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'birthday')->widget(yii\jui\DatePicker::className(),[
                'language' => 'th',
                'dateFormat' => 'yyyy-MM-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => TRUE
                ],
                'options' => ['class' => 'form-control']
                
            ]) ?>
        </div>  
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>
        </div>        
        <div class="col-xs-3 col-sm-3 col-md-3">            
            <?= $form->field($model, 'tel')->widget(\yii\widgets\MaskedInput::classname(), [
             'mask' => '99-9999-9999',
                ]) ?>  
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'work')->label('สถานที่ทำงาน')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">            
             <?= $form->field($model, 'position_id')->widget(\kartik\widgets\Select2::className(),[
                'data'=> yii\helpers\ArrayHelper::map(app\models\Positions::find()->all(), 'id', 'name'),
                'options'=>[
                    'placeholder'=>'-- เลือกตำแหน่ง --'                    
                ],
                'pluginOptions'=>[
                    'allowClear'=>true
                ]
            ]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'group_id')->widget(\kartik\widgets\Select2::className(),[
                'data'=> yii\helpers\ArrayHelper::map(\app\models\Groups::find()->all(), 'id', 'name'),
                'options'=>[
                    'placeholder'=>'-- เลือกกลุ่มงาน --'                    
                ],
                'pluginOptions'=>[
                    'allowClear'=>true
                ]
            ]) ?>             
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">            
            <?=
            $form->field($model, 'department_id')->widget(DepDrop::className(), [
                        'data' => [$ch],
                        'options' => ['placeholder' => '<--เลือกแผนก-->'],
                        'type' => DepDrop::TYPE_SELECT2,
                        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                        'pluginOptions' => [
                            'depends' => ['customers-group_id'],            
                            'url' => yii\helpers\Url::to(['/customers/get-depart']),
                            'loadingText' => 'Loading1...',
                        ],
                    ]);
            ?>
        </div>        
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'fb')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'line') 
                    ->checkboxList(\app\models\Customers::itemAlias('line')) ?> 

        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>            
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'interest')
                ->checkboxList(\app\models\Customers::itemAlias('interest')) ?>            
        </div>        
    </div>
    <hr>
            <?= $form->field($model, 'img')->label('รูปประจำตัว')->fileInput() ?>  
   
           <?php if ($model->avatar) { ?>
                  <?php  Html::img('avatars/' . $model->avatar, ['class' => 'img-responsive img-circle', 'width' => '150px;']); ?>
           <?php } ?> 
   
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-ok"></i> บันทึก' : '<i class="glyphicon glyphicon-ok"></i> บันทึกการแก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
