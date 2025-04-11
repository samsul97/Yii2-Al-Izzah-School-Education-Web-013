<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tk */

$this->title = 'Update Tk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tk-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
