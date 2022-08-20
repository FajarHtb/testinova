<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObatMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'jenis_obat') ?>

    <?= $form->field($model, 'kegunaan_obat') ?>

    <?= $form->field($model, 'stok_obat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
