<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TindakanobatpasienMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tindakanobatpasien Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakanobatpasien-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tindakanobatpasien M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_pasien',
            'nik_pasien',
            'penyakit_pasien',
            'obat_pasien',
            'tindakan_pasien',
            //'waktu_mulai_tindakan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TindakanobatpasienM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nama_pasien' => $model->nama_pasien]);
                 }
            ],
        ],
    ]); ?>


</div>
