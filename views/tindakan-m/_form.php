<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanM */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakan-m-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tintakan_id')->textInput() ?>

    <?= $form->field($model, 'nama_tindakan')->textInput() ?>

    <?= $form->field($model, 'waktu_tindakan')->textInput() ?>

    <?= $form->field($model, 'tindakan_antisipasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
