<?php

use yii\bootstrap4\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlbumesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Albumes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="albumes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Albumes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'titulo',
            'anyo',
            [
                'attribute' => 'total',
                'value' => function ($model, $key, $index, $column) {
                    return $model->totalFormat;
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
