<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasienMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pasien_id') ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'tanggal_lahir') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'nomor_hp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
