<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PembayaranMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?= $form->field($model, 'nik_pasien') ?>

    <?= $form->field($model, 'umur') ?>

    <?= $form->field($model, 'penyakit_pasien') ?>

    <?= $form->field($model, 'tindakan_pasien') ?>

    <?php // echo $form->field($model, 'nama_obat') ?>

    <?php // echo $form->field($model, 'jenis_obat') ?>

    <?php // echo $form->field($model, 'biaya_pemeriksaan') ?>

    <?php // echo $form->field($model, 'jumlah_biaya') ?>

    <?php // echo $form->field($model, 'dokter_pemeriksaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
