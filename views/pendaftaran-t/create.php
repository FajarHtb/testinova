<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranT */

$this->title = 'Create Pendaftaran T';
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-t-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
