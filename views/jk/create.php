<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jk */

$this->title = 'Create Jk';
$this->params['breadcrumbs'][] = ['label' => 'Jks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jk-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
