<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanobatpasienMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakanobatpasien-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?= $form->field($model, 'nik_pasien') ?>

    <?= $form->field($model, 'penyakit_pasien') ?>

    <?= $form->field($model, 'obat_pasien') ?>

    <?= $form->field($model, 'tindakan_pasien') ?>

    <?php // echo $form->field($model, 'waktu_mulai_tindakan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
