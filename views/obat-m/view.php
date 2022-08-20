<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ObatM */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Obat Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="obat-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nama' => $model->nama], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nama' => $model->nama], [
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
            'nama',
            'jenis_obat',
            'kegunaan_obat',
            'stok_obat',
        ],
    ]) ?>

</div>
