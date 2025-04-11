<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormSd */

$this->title = 'Update Form Sd: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Sds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-sd-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
