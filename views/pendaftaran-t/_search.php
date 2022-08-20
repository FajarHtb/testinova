<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranTSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-t-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pendaftaran_id') ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?= $form->field($model, 'nama_ruangan') ?>

    <?= $form->field($model, 'nama_tindakan') ?>

    <?= $form->field($model, 'nama_pegawai') ?>

    <?php // echo $form->field($model, 'tanggal_pendaftaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
