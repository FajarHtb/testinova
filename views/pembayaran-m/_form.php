<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\PembayaranM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput() ?>

    <?= $form->field($model, 'nik_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'umur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyakit_pasien')->textInput() ?>

    <?= $form->field($model, 'tindakan_pasien')->textInput() ?>

    <?= $form->field($model, 'nama_obat')->textInput() ?>

    <?= $form->field($model, 'jenis_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya_pemeriksaan')->textInput() ?>

    <?= $form->field($model, 'jumlah_biaya')->textInput() ?>

    <?= $form->field($model, 'dokter_pemeriksaan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
