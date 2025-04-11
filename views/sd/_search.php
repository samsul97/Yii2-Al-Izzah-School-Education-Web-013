<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'telp') ?>

    <?= $form->field($model, 'id_kelola') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
