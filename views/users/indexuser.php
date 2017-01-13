<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'avatar',
            'username',
            'department_id',
            'name',
            'position_id',
            'email:email',
//            'password_hash',
//            'auth_key',
            // 'confirmation_token',
            // 'confirmation_sent_at',
            // 'confirmed_at',
            // 'unconfirmed_email:email',
            // 'recovery_token',
            // 'recovery_sent_at',
            // 'blocked_at',
            // 'registered_from',
            // 'logged_in_from',
            // 'logged_in_at',
            // 'created_at',
             'updated_at',
            // 'registration_ip',
            // 'last_login_at',
            [
                        'class' => 'yii\grid\ActionColumn',
                        'options' => ['style' => 'width:50px;'],
                        'template' => '<div class="btn-group btn-group-sm" role="group" aria-label="...">{update}</div>',
                        'buttons' => [
//                    'view'=>function($url,$model,$key){
//                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i>',$url,['class'=>'btn btn-default']);
//                    }, 
                            'update' => function($url, $model, $key) {
                                return Html::a('<i class="glyphicon glyphicon-edit"></i>', ['updateuser', 'id' => $model->id], ['class' => 'btn btn-warning']);
                            },
//                    
//                    'delete'=>function($url,$model,$key){
//                         return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,[
//                                'title' => Yii::t('yii', 'Delete'),
//                                'data-confirm' => Yii::t('yii', 'คุณต้องการลบไฟล์นี้?'),
//                                'data-method' => 'post',
//                                'data-pjax' => '0',
//                                'class'=>'btn btn-default'
//                                ]);
//                    }
                                ]
                            ],
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
