<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'formatter'=>['class'=>'yii\i18n\Formatter','nullDisplay'=>'-'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'addr',            
            [
              'attribute'=>'c' ,
                'value'=>'chwname.name',
            ],
            [
              'attribute'=>'a' ,
                'value'=>'ampurname.name',
            ],
            [
              'attribute'=>'t' ,
                'value'=>'tubname.name',
            ],
            'p',
             'cid',
            
             'tel',
             'work',
             
             [ 'attribute'=>'department_id',
              'value'=>'dep.name',
            ],
            
             [ 'attribute'=>'group_id',
              'value'=>'group.name',
            ],
             
             [
              'attribute'=>'position_id',
              'value'=>'position.name',
            ],
//             'interest',
//             'avatar',
//             'fb',
//             'line',
//             'email:email',
//             'createdate',
//             'updatedate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
