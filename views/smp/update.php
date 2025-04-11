<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Smp */

$this->title = 'Update Smp: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Smps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="smp-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
