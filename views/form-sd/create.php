<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormSd */

$this->title = 'Pendaftaran Online SDIT Al-Izzah';
$this->params['breadcrumbs'][] = ['label' => 'Form SD', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-sd-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
