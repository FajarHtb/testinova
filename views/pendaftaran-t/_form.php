<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-t-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput() ?>

    <?= $form->field($model, 'nama_ruangan')->textInput() ?>

    <?= $form->field($model, 'nama_tindakan')->textInput() ?>

    <?= $form->field($model, 'nama_pegawai')->textInput() ?>

    <?= $form->field($model, 'tanggal_pendaftaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
