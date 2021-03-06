<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= Html::img('avatars/'.$model->avatar,['class'=>'thumbnail img-responsive','style'=>'widht: 100 px;'])?>

    <?= DetailView::widget([
        'model' => $model,
        'formatter'=>['class'=>'yii\i18n\Formatter','nullDisplay'=>'-'],
        'attributes' => [
            //'id',
            'name',
            'addr',
            [
              'attribute'=>'c',
              'value'=>$model->chwname->name,
            ],
            [
              'attribute'=>'a',
              'value'=>$model->ampurname->name,
            ],
            [
              'attribute'=>'t',
              'value'=>$model->tubname->name,
            ],                     
            'birthday',
            'cid',
            'p',
            'tel',
            'work',            
            'dep.name',
            'group.name',
            'position.name',
            'interest',
            'avatar',
            'fb',
            'line',
            'email:email',
//            'createdate',
//            'updatedate',
        ],
    ]) ?>

</div>
