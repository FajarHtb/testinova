<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranT */

$this->title = $model->pendaftaran_id;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pendaftaran-t-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'pendaftaran_id' => $model->pendaftaran_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'pendaftaran_id' => $model->pendaftaran_id], [
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
            'pendaftaran_id',
            'nama_pasien',
            'nama_ruangan',
            'nama_tindakan',
            'nama_pegawai',
            'tanggal_pendaftaran',
        ],
    ]) ?>

</div>
