<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterwilayahM */

$this->title = 'Create Masterwilayah M';
$this->params['breadcrumbs'][] = ['label' => 'Masterwilayah Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="masterwilayah-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
