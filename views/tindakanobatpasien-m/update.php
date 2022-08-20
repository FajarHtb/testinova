<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanobatpasienM */

$this->title = 'Update Tindakanobatpasien M: ' . $model->nama_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tindakanobatpasien Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_pasien, 'url' => ['view', 'nama_pasien' => $model->nama_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakanobatpasien-m-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
