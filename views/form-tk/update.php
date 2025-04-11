<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormTk */

$this->title = 'Update Form Tk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Tks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-tk-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
