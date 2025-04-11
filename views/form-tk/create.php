<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FormTk */

$this->title = 'Pendaftaran Online TKIT Al-Izzah';
$this->params['breadcrumbs'][] = ['label' => 'Form Tks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-tk-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
