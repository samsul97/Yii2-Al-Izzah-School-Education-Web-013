<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormSdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-sd-search">

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

    <?php // echo $form->field($model, 'pendidikan_i') ?>

    <?php // echo $form->field($model, 'pekerjaan_i') ?>

    <?php // echo $form->field($model, 'penghasilan_i') ?>

    <?php // echo $form->field($model, 'id_khusus_i') ?>

    <?php // echo $form->field($model, 'thnlahir_b') ?>

    <?php // echo $form->field($model, 'thnlahir_i') ?>

    <?php // echo $form->field($model, 'nama_wl') ?>

    <?php // echo $form->field($model, 'thnlahir_w') ?>

    <?php // echo $form->field($model, 'pendidikan_wl') ?>

    <?php // echo $form->field($model, 'pekerjaan_wl') ?>

    <?php // echo $form->field($model, 'penghasilan_wl') ?>

    <?php // echo $form->field($model, 'tinggi_a') ?>

    <?php // echo $form->field($model, 'berat_a') ?>

    <?php // echo $form->field($model, 'jarak_a') ?>

    <?php // echo $form->field($model, 'waktu_tempuh') ?>

    <?php // echo $form->field($model, 'saudara_a') ?>

    <?php // echo $form->field($model, 'kem_1') ?>

    <?php // echo $form->field($model, 'kem_2') ?>

    <?php // echo $form->field($model, 'kem_3') ?>

    <?php // echo $form->field($model, 'kem_4') ?>

    <?php // echo $form->field($model, 'kem_5') ?>

    <?php // echo $form->field($model, 'kem_6') ?>

    <?php // echo $form->field($model, 'kem_7') ?>

    <?php // echo $form->field($model, 'kem_8') ?>

    <?php // echo $form->field($model, 'kem_9') ?>

    <?php // echo $form->field($model, 'kem_10') ?>

    <?php // echo $form->field($model, 'kem_11') ?>

    <?php // echo $form->field($model, 'kem_12') ?>

    <?php // echo $form->field($model, 'sos1') ?>

    <?php // echo $form->field($model, 'sos2') ?>

    <?php // echo $form->field($model, 'sosa') ?>

    <?php // echo $form->field($model, 'sosb') ?>

    <?php // echo $form->field($model, 'sosc') ?>

    <?php // echo $form->field($model, 'sosd') ?>

    <?php // echo $form->field($model, 'sose') ?>

    <?php // echo $form->field($model, 'sosf') ?>

    <?php // echo $form->field($model, 'sosg') ?>

    <?php // echo $form->field($model, 'sosh') ?>

    <?php // echo $form->field($model, 'sosi') ?>

    <?php // echo $form->field($model, 'kep') ?>

    <?php // echo $form->field($model, 'kes1') ?>

    <?php // echo $form->field($model, 'kes2') ?>

    <?php // echo $form->field($model, 'kes3') ?>

    <?php // echo $form->field($model, 'kes4') ?>

    <?php // echo $form->field($model, 'kes5') ?>

    <?php // echo $form->field($model, 'kes6') ?>

    <?php // echo $form->field($model, 'kes7') ?>

    <?php // echo $form->field($model, 'fre1') ?>

    <?php // echo $form->field($model, 'fre2') ?>

    <?php // echo $form->field($model, 'fre3') ?>

    <?php // echo $form->field($model, 'fre4') ?>

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

    <?php // echo $form->field($model, 'ket1') ?>

    <?php // echo $form->field($model, 'ket2') ?>

    <?php // echo $form->field($model, 'ket3') ?>

    <?php // echo $form->field($model, 'ket4') ?>

    <?php // echo $form->field($model, 'jenis_prestasi') ?>

    <?php // echo $form->field($model, 'tingkat_prestasi') ?>

    <?php // echo $form->field($model, 'nm_prestasi') ?>

    <?php // echo $form->field($model, 'thn_prestasi') ?>

    <?php // echo $form->field($model, 'penyelenggara_prestasi') ?>

    <?php // echo $form->field($model, 'jenis_beasiswa') ?>

    <?php // echo $form->field($model, 'ket_beasiswa') ?>

    <?php // echo $form->field($model, 'thn_m_beasiswa') ?>

    <?php // echo $form->field($model, 'thn_s_beasiswa') ?>

    <?php // echo $form->field($model, 'id_jenis_imun') ?>

    <?php // echo $form->field($model, 'usia_imun') ?>

    <?php // echo $form->field($model, 'ket_imun') ?>

    <?php // echo $form->field($model, 'per_1') ?>

    <?php // echo $form->field($model, 'per2') ?>

    <?php // echo $form->field($model, 'per3') ?>

    <?php // echo $form->field($model, 'per4') ?>

    <?php // echo $form->field($model, 'per5') ?>

    <?php // echo $form->field($model, 'per6') ?>

    <?php // echo $form->field($model, 'id_jns_penyakit') ?>

    <?php // echo $form->field($model, 'usia_penyakit') ?>

    <?php // echo $form->field($model, 'lama_penyakit') ?>

    <?php // echo $form->field($model, 'obat_penyakit') ?>

    <?php // echo $form->field($model, 'status_penyakit') ?>

    <?php // echo $form->field($model, 'id_jns_makanan') ?>

    <?php // echo $form->field($model, 'usia_makanan') ?>

    <?php // echo $form->field($model, 'akibat_makanan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
