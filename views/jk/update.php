<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jk */

$this->title = 'Update Jk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jk-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
