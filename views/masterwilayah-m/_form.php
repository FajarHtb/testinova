<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterwilayahM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="masterwilayah-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ruangan')->textInput() ?>

    <?= $form->field($model, 'nama_ruangan')->textInput() ?>

    <?= $form->field($model, 'jumlah_kamar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
