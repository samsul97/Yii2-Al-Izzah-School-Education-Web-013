<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisTinggal */

$this->title = 'Update Jenis Tinggal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Tinggals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-tinggal-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
