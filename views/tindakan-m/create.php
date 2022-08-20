<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanM */

$this->title = 'Create Tindakan M';
$this->params['breadcrumbs'][] = ['label' => 'Tindakan Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
