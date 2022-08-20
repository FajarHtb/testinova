<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterwilayahMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masterwilayah Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masterwilayah-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Masterwilayah M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ruangan',
            'nama_ruangan',
            'jumlah_kamar',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\MasterwilayahM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ruangan' => $model->id_ruangan]);
                 }
            ],
        ],
    ]); ?>


</div>
