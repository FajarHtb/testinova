<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanMSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakan-m-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tintakan_id') ?>

    <?= $form->field($model, 'nama_tindakan') ?>

    <?= $form->field($model, 'waktu_tindakan') ?>

    <?= $form->field($model, 'tindakan_antisipasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
