<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sd-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'telp')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
