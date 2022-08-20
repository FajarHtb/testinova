<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObatMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obat Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'jenis_obat',
            'kegunaan_obat',
            'stok_obat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\ObatM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nama' => $model->nama]);
                 }
            ],
        ],
    ]); ?>


</div>
