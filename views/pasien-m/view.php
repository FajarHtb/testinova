<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PasienM */

$this->title = $model->pasien_id;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'pasien_id' => $model->pasien_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'pasien_id' => $model->pasien_id], [
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
            'pasien_id',
            'nama_pasien',
            'nik',
            'tanggal_lahir',
            'alamat',
            'nomor_hp',
        ],
    ]) ?>

</div>
