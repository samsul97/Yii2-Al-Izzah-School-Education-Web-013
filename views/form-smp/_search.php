<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormSmpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-smp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_daftar') ?>

    <?= $form->field($model, 'tgl_daftar') ?>

    <?= $form->field($model, 'id_thn') ?>

    <?= $form->field($model, 'nama_w') ?>

    <?php // echo $form->field($model, 'usia_w') ?>

    <?php // echo $form->field($model, 'pekerjaan_w') ?>

    <?php // echo $form->field($model, 'alamat_w') ?>

    <?php // echo $form->field($model, 'alamatkantor_w') ?>

    <?php // echo $form->field($model, 'nm_lengkap_a') ?>

    <?php // echo $form->field($model, 'panggilan_a') ?>

    <?php // echo $form->field($model, 'tll_a') ?>

    <?php // echo $form->field($model, 'id_kelas') ?>

    <?php // echo $form->field($model, 'lengkap_c') ?>

    <?php // echo $form->field($model, 'panggilan_c') ?>

    <?php // echo $form->field($model, 'id_jk_c') ?>

    <?php // echo $form->field($model, 'ttl_c') ?>

    <?php // echo $form->field($model, 'id_agama_c') ?>

    <?php // echo $form->field($model, 'id_khusus_c') ?>

    <?php // echo $form->field($model, 'alamat_c') ?>

    <?php // echo $form->field($model, 'id_jenis_tnggl') ?>

    <?php // echo $form->field($model, 'id_transport_c') ?>

    <?php // echo $form->field($model, 'no_c') ?>

    <?php // echo $form->field($model, 'email_c') ?>

    <?php // echo $form->field($model, 'nama_b') ?>

    <?php // echo $form->field($model, 'id_pendidikan_b') ?>

    <?php // echo $form->field($model, 'id_pekerjaan_b') ?>

    <?php // echo $form->field($model, 'id_penghasilan_b') ?>

    <?php // echo $form->field($model, 'id_khusus_b') ?>

    <?php // echo $form->field($model, 'nama_i') ?>

    <?php // echo $form->field($model, 'id_pendidikan_i') ?>

    <?php // echo $form->field($model, 'id_pekerjaan_i') ?>

    <?php // echo $form->field($model, 'id_penghasilan_i') ?>

    <?php // echo $form->field($model, 'id_khusus_i') ?>

    <?php // echo $form->field($model, 'thnlahir_b') ?>

    <?php // echo $form->field($model, 'thnlahir_i') ?>

    <?php // echo $form->field($model, 'nama_wl') ?>

    <?php // echo $form->field($model, 'thnlahir_w') ?>

    <?php // echo $form->field($model, 'id_pendidikan_wl') ?>

    <?php // echo $form->field($model, 'id_pekerjaan_wl') ?>

    <?php // echo $form->field($model, 'id_penghasilan_wl') ?>

    <?php // echo $form->field($model, 'tinggi_a') ?>

    <?php // echo $form->field($model, 'berat_a') ?>

    <?php // echo $form->field($model, 'jarak_a') ?>

    <?php // echo $form->field($model, 'waktu_tempuh') ?>

    <?php // echo $form->field($model, 'saudara_a') ?>

    <?php // echo $form->field($model, 'as1') ?>

    <?php // echo $form->field($model, 'as2') ?>

    <?php // echo $form->field($model, 'as3') ?>

    <?php // echo $form->field($model, 'as4') ?>

    <?php // echo $form->field($model, 'as5') ?>

    <?php // echo $form->field($model, 'as6') ?>

    <?php // echo $form->field($model, 'as7') ?>

    <?php // echo $form->field($model, 'as8') ?>

    <?php // echo $form->field($model, 'as9') ?>

    <?php // echo $form->field($model, 'as10') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
