<?php

use yii\helpers\Html;
// use yii\widgets\DetailView;
use kartik\detail\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\FormSmp */

$this->title = $model->no_daftar;
$this->params['breadcrumbs'][] = ['label' => 'Form SMP', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="form-smp-view box box-primary">
    <div class="box-header">
        <h2><b>FORMULIR PENDAFTARAN SD AL-IZZAH</b></h2>
        <div class="box-body table-responsive no-padding">
            <?= DetailView::widget([
                'model' => $model,
                'template' => '<tr><th width="180px" style="text-align:right">{label}</th><td>{value}</td></tr>',
                'attributes' => [
                // 'id',
                    'no_daftar',
                    'tgl_daftar',
                    [
                        'attribute' => 'id_thn',
                        'format' => 'raw',
                        'value' => $model->tahun->nama,
                    ],
                    [
                        'group' => true,
                        'label' => 'Data Calon Wali Murid',
                        'rowOptions' => ['class' => 'bg-purple'],
                //'groupOptions' => ['class' => 'text-center']
                    ],
                    'nama_w',
                    'usia_w',
                    'pekerjaan_w',
                    // [
                    //     'attribute' => 'pekerjaan_w',
                    //     'format' => 'raw',
                    //     'value' => $model->pekerjaan->nama,
                    // ],
                    'alamat_w:ntext',
                    'alamatkantor_w:ntext',
                    'nm_lengkap_a',
                    'panggilan_a',
                    'tmptlahir_a',
                    'tgllahir_a',
                    [
                        'group' => true,
                        'label' => 'Data Calon Peserta Didik',
                        'rowOptions' => ['class' => 'bg-purple'],
                //'groupOptions' => ['class' => 'text-center']
                    ],
                // 'id_kelas',
                    'lengkap_c',
                    'panggilan_c',
                    [
                        'attribute' => 'id_jk_c',
                        'format' => 'raw',
                        'value' => $model->jk->jk,
                    ],
                    'tmptlahir_c',
                    'tgllahir_c',
                    [
                        'attribute' => 'id_agama_c',
                        'format' => 'raw',
                        'value' => $model->agama->nama,
                    ],
                    'id_khusus_c',
                    // [
                    //     'attribute' => 'id_khusus_c',
                    //     'format' => 'raw',
                    //     'value' => $model->khusus->nama,
                    // ],
                    'alamat_c:ntext',
                    // [
                    //     'attribute' => 'id_jenis_tnggl',
                    //     'format' => 'raw',
                    //     'value' => $model->jenisTinggal->nama,
                    // ],
                    'id_jenis_tnggl',
                    'id_transport_c',
                    // [
                    //     'attribute' => 'id_transport_c',
                    //     'format' => 'raw',
                    //     'value' => $model->transport->nama,
                    // ],
                    'no_c',
                    'email_c:email',
                    'nama_b',
                    'thnlahir_b',
                    // [
                    //     'attribute' => 'id_pendidikan_b',
                    //     'format' => 'raw',
                    //     'value' => $model->pendidikan->nama,
                    // ],
                    'id_pendidikan_b',
                    'id_pekerjaan_b',
                    // [
                    //     'attribute' => 'id_pekerjaan_b',
                    //     'format' => 'raw',
                    //     'value' => $model->pekerjaan->nama,
                    // ],
                    'id_penghasilan_b',
                    // [
                    //     'attribute' => 'id_penghasilan_b',
                    //     'format' => 'raw',
                    //     'value' => $model->penghasilan->nama,
                    // ],
                    'id_khusus_b',
                    // [
                    //     'attribute' => 'id_khusus_b',
                    //     'format' => 'raw',
                    //     'value' => $model->khusus->nama,
                    // ],
                    'nama_i',
                    'thnlahir_i',
                    // [
                    //     'attribute' => 'id_pendidikan_i',
                    //     'format' => 'raw',
                    //     'value' => $model->pendidikan->nama,
                    // ],
                    'id_pekerjaan_i',
                    // [
                    //     'attribute' => 'id_pekerjaan_i',
                    //     'format' => 'raw',
                    //     'value' => $model->pekerjaan->nama,
                    // ],
                    'id_penghasilan_i',
                    // [
                    //     'attribute' => 'id_penghasilan_i',
                    //     'format' => 'raw',
                    //     'value' => $model->penghasilan->nama,
                    // ],
                    'id_khusus_i',
                    // [
                    //     'attribute' => 'id_khusus_i',
                    //     'format' => 'raw',
                    //     'value' => $model->khusus->nama,
                    // ],
                    'nama_wl',
                    'thnlahir_w',
                    // [
                    //     'attribute' => 'id_pendidikan_wl',
                    //     'format' => 'raw',
                    //     'value' => $model->pendidikan->nama,
                    // ],
                    'id_pendidikan_wl',
                    'id_pekerjaan_wl',
                    // [
                    //     'attribute' => 'id_pekerjaan_wl',
                    //     'format' => 'raw',
                    //     'value' => $model->pekerjaan->nama,
                    // ],
                    'id_penghasilan_wl',
                    // [
                    //     'attribute' => 'id_penghasilan_wl',
                    //     'format' => 'raw',
                    //     'value' => $model->penghasilan->nama,
                    // ],
                    [
                        'group' => true,
                        'label' => 'Data Periodik Siswa',
                        'rowOptions' => ['class' => 'bg-purple'],
                //'groupOptions' => ['class' => 'text-center']
                    ],
                    [
                        'label' => 'Tinggi Anak',
                        'attribute' => 'tinggi_a',
                        'format' => 'raw',
                        'value' => $model->tinggi_a. ' Centimeter',
                    ],
                    [
                        'label' => 'Berat Anak',
                        'attribute' => 'berat_a',
                        'format' => 'raw',
                        'value' => $model->berat_a. ' Kilogram',
                    ],
                    [
                        'label' => 'Jarak dari Rumah ke Sekolah',
                        'attribute' => 'jarak_a',
                        'format' => 'raw',
                        'value' => $model->jarak_a. ' Meter',
                    ],
                    [
                        'label' => 'Waktu Tempuh dari Rumah ke Sekolah',
                        'attribute' => 'waktu_tempuh',
                        'format' => 'raw',
                        'value' => $model->waktu_tempuh. ' Menit',
                    ],
                    [
                        'label' => 'Jumlah Saudara',
                        'attribute' => 'saudara_a',
                        'format' => 'raw',
                        'value' => $model->saudara_a. ' Saudara',
                    ],
                    // 'saudara_a',
                    'as1',
                    'as2',
                    'as3',
                    'as4',
                    'as5',
                    'as6',
                    'as7',
                    'as8',
                    'as9',
                    // 'as10',
                    [
                        'label'=>'Download Formulir',
                        'format' => 'raw',
                        'value' =>  Html::a('<i class="fa fa-print"></i> Download Formulir', ['pdf', 'id' => $model->id], ['class' => 'btn btn-primary btn-flat','target' => '_blank']) 
                    ],
                ],
            ]) ?>
        </div>
    </div>
</div>