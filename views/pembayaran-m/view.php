<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PembayaranM */

$this->title = $model->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pembayaran-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nama_pasien' => $model->nama_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nama_pasien' => $model->nama_pasien], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama_pasien',
            'nik_pasien',
            'umur',
            'penyakit_pasien',
            'tindakan_pasien',
            'nama_obat',
            'jenis_obat',
            'biaya_pemeriksaan',
            'jumlah_biaya',
            'dokter_pemeriksaan',
        ],
    ]) ?>

</div>
