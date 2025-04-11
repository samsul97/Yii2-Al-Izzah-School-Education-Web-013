<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormSmp */

$this->title = 'Pendaftaran Online SMPIT Al-Izzah';
$this->params['breadcrumbs'][] = ['label' => 'Form SMP', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-smp-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
