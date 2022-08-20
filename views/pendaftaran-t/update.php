<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranT */

$this->title = 'Update Pendaftaran T: ' . $model->pendaftaran_id;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran Ts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pendaftaran_id, 'url' => ['view', 'pendaftaran_id' => $model->pendaftaran_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendaftaran-t-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
