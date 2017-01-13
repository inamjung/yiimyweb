<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\modules\repair\models\CalItemSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\repair\models\CalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cal-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="panel panel-primary">
        <div class="panel-heading"> ทะเบียนการสอบเทียบเครื่องมือ</div>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',                    
                    [
                        'class' => 'kartik\grid\ExpandRowColumn',
                        'value' => function($model, $key, $index, $column) {
                            return GridView::ROW_COLLAPSED;
                        },
                        'detail' => function($model, $key, $index, $column) {
                            $searchModel = new CalItemSearch();
                            $searchModel->cal_id = $model->id;
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                            return Yii::$app->controller->renderPartial('_calitem', [
                                        'searchModel' => $searchModel,
                                        'dataProvider' => $dataProvider,
                            ]);
                        }
                            ],
                            'cal_no',
                            'date',
                            'next',
                            'description',
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                    ?>
        </div>
    </div>
</div>
