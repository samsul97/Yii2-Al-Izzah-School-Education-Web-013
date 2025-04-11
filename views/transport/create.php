<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Transport */

$this->title = 'Create Transport';
$this->params['breadcrumbs'][] = ['label' => 'Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transport-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
