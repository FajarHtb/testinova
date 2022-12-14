<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PegawaiM */

$this->title = $model->pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'pegawai_id' => $model->pegawai_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'pegawai_id' => $model->pegawai_id], [
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
            'pegawai_id',
            'nama_pegawai',
            'pekerjaan',
            'nik',
            'tanggal_lahir',
            'jam_kerja',
            'alamat',
            'nomor_hp',
        ],
    ]) ?>

</div>
