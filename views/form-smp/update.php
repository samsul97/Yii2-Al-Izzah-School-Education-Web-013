<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormSmp */

$this->title = 'Update Form Smp: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Smps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-smp-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
