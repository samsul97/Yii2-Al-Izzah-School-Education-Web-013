<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tk */

$this->title = 'Create Tk';
$this->params['breadcrumbs'][] = ['label' => 'Tks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tk-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
