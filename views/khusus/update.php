<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Khusus */

$this->title = 'Update Khusus: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Khususes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khusus-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
