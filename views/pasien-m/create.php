<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PasienM */

$this->title = 'Create Pasien M';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
