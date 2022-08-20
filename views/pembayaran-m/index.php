<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PembayaranMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembayaran Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pembayaran M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_pasien',
            'nik_pasien',
            'umur',
            'penyakit_pasien',
            'tindakan_pasien',
            //'nama_obat',
            //'jenis_obat',
            //'biaya_pemeriksaan',
            //'jumlah_biaya',
            //'dokter_pemeriksaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\PembayaranM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nama_pasien' => $model->nama_pasien]);
                 }
            ],
        ],
    ]); ?>


</div>
