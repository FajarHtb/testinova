<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObatM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'jenis_obat')->textInput() ?>

    <?= $form->field($model, 'kegunaan_obat')->textInput() ?>

    <?= $form->field($model, 'stok_obat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
