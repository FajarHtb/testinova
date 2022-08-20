<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ObatM */

$this->title = 'Create Obat M';
$this->params['breadcrumbs'][] = ['label' => 'Obat Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
