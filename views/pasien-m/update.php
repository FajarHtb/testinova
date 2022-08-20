<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PasienM */

$this->title = 'Update Pasien M: ' . $model->pasien_id;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pasien_id, 'url' => ['view', 'pasien_id' => $model->pasien_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
