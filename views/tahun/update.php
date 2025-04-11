<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tahun */

$this->title = 'Update Tahun: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tahun-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
