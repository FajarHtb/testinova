<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterwilayahM */

$this->title = 'Update Masterwilayah M: ' . $model->id_ruangan;
$this->params['breadcrumbs'][] = ['label' => 'Masterwilayah Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ruangan, 'url' => ['view', 'id_ruangan' => $model->id_ruangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="masterwilayah-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
