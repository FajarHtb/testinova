<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanobatpasienM */

$this->title = $model->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tindakanobatpasien Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tindakanobatpasien-m-view">

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
            'penyakit_pasien',
            'obat_pasien',
            'tindakan_pasien',
            'waktu_mulai_tindakan',
        ],
    ]) ?>

</div>
