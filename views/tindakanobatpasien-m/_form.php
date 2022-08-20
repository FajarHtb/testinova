<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanobatpasienM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakanobatpasien-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput() ?>

    <?= $form->field($model, 'nik_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyakit_pasien')->textInput() ?>

    <?= $form->field($model, 'obat_pasien')->textInput() ?>

    <?= $form->field($model, 'tindakan_pasien')->textInput() ?>

    <?= $form->field($model, 'waktu_mulai_tindakan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
