<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sd */

$this->title = 'Update Sd: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sd-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
