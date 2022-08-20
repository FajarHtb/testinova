<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PendaftaranTSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pendaftaran Ts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-t-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pendaftaran T', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pendaftaran_id',
            'nama_pasien',
            'nama_ruangan',
            'nama_tindakan',
            'nama_pegawai',
            //'tanggal_pendaftaran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\PendaftaranT $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'pendaftaran_id' => $model->pendaftaran_id]);
                 }
            ],
        ],
    ]); ?>


</div>
