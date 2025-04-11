<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kelola */

$this->title = 'Create Kelola';
$this->params['breadcrumbs'][] = ['label' => 'Kelolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelola-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
