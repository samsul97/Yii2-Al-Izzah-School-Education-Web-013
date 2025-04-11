<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisTinggal */

$this->title = 'Create Jenis Tinggal';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Tinggals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-tinggal-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
