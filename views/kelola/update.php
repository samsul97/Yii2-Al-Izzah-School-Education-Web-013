<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kelola */

$this->title = 'Update Kelola: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kelolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelola-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
