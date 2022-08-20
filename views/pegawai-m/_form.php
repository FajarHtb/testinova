<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PegawaiM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawai_id')->textInput() ?>

    <?= $form->field($model, 'nama_pegawai')->textInput() ?>

    <?= $form->field($model, 'pekerjaan')->textInput() ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'jam_kerja')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput() ?>

    <?= $form->field($model, 'nomor_hp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
