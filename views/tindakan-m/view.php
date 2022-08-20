<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanM */

$this->title = $model->tintakan_id;
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tindakan-m-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tintakan_id' => $model->tintakan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tintakan_id' => $model->tintakan_id], [
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
            'tintakan_id',
            'nama_tindakan',
            'waktu_tindakan',
            'tindakan_antisipasi',
        ],
    ]) ?>

</div>
