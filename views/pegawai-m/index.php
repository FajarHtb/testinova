<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PegawaiMSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawai Ms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-m-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pegawai M', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pegawai_id',
            'nama_pegawai',
            'pekerjaan',
            'nik',
            'tanggal_lahir',
            //'jam_kerja',
            //'alamat',
            //'nomor_hp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\PegawaiM $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'pegawai_id' => $model->pegawai_id]);
                 }
            ],
        ],
    ]); ?>


</div>
