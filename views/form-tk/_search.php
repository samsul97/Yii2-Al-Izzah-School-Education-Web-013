<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormTkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-tk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_daftar') ?>

    <?= $form->field($model, 'tgl_daftar') ?>

    <?= $form->field($model, 'id_thn') ?>

    <?= $form->field($model, 'nama_a') ?>

    <?php // echo $form->field($model, 'pnggil_a') ?>

    <?php // echo $form->field($model, 'ttl_a') ?>

    <?php // echo $form->field($model, 'id_jk_a') ?>

    <?php // echo $form->field($model, 'saudara_a') ?>

    <?php // echo $form->field($model, 'tnggi_a') ?>

    <?php // echo $form->field($model, 'berat_a') ?>

    <?php // echo $form->field($model, 'penyakit_a') ?>

    <?php // echo $form->field($model, 'imun_a') ?>

    <?php // echo $form->field($model, 'nama_b') ?>

    <?php // echo $form->field($model, 'ttl_b') ?>

    <?php // echo $form->field($model, 'pendidikan_b') ?>

    <?php // echo $form->field($model, 'pekerjaan_b') ?>

    <?php // echo $form->field($model, 'penghasilan_b') ?>

    <?php // echo $form->field($model, 'alamat_b') ?>

    <?php // echo $form->field($model, 'hp_b') ?>

    <?php // echo $form->field($model, 'nama_i') ?>

    <?php // echo $form->field($model, 'ttl_i') ?>

    <?php // echo $form->field($model, 'pendidikan_i') ?>

    <?php // echo $form->field($model, 'pekerjaan_i') ?>

    <?php // echo $form->field($model, 'penghasilan_i') ?>

    <?php // echo $form->field($model, 'alamat_i') ?>

    <?php // echo $form->field($model, 'hp_i') ?>

    <?php // echo $form->field($model, 'fisik_a') ?>

    <?php // echo $form->field($model, 'bakat_a') ?>

    <?php // echo $form->field($model, 'kepribadian_a') ?>

    <?php // echo $form->field($model, 'id_quran_a') ?>

    <?php // echo $form->field($model, 'id_buku_a') ?>

    <?php // echo $form->field($model, 'jilid_a') ?>

    <?php // echo $form->field($model, 'surat_a') ?>

    <?php // echo $form->field($model, 'id_alpabet_a') ?>

    <?php // echo $form->field($model, 'k_1') ?>

    <?php // echo $form->field($model, 'k_2') ?>

    <?php // echo $form->field($model, 'k_3') ?>

    <?php // echo $form->field($model, 'k_4') ?>

    <?php // echo $form->field($model, 'k_5') ?>

    <?php // echo $form->field($model, 'k_6') ?>

    <?php // echo $form->field($model, 'k_7') ?>

    <?php // echo $form->field($model, 'k_8') ?>

    <?php // echo $form->field($model, 'k_9') ?>

    <?php // echo $form->field($model, 'k_10') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
