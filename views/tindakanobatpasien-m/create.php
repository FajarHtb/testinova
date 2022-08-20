<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanobatpasienM */

$this->title = 'Create Tindakanobatpasien M';
$this->params['breadcrumbs'][] = ['label' => 'Tindakanobatpasien Ms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakanobatpasien-m-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
