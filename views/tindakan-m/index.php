<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TindakanMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tindakan Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tindakan M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tintakan_id',
            'nama_tindakan',
            'waktu_tindakan',
            'tindakan_antisipasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\TindakanM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tintakan_id' => $model->tintakan_id]);
                 }
            ],
        ],
    ]); ?>


</div>
