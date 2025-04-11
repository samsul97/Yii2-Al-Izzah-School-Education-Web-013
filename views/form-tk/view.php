<?php

use yii\helpers\Html;
// use yii\widgets\DetailView;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FormTk */

$this->title = $model->no_daftar;
$this->params['breadcrumbs'][] = ['label' => 'Formulir TKIT AL-IZZAH', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="form-tk-view box box-primary">
    <div class="box-header">
        <h2><b>FORMULIR PENDAFTARAN TK AL-IZZAH</b></h2>
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
                        'label' => 'Data Anak',
                        'rowOptions' => ['class' => 'bg-green'],
                //'groupOptions' => ['class' => 'text-center']
                    ],
                    'nama_a',
                    'pnggil_a',
                    'tmptlahir_a',
                    'tgllahir_a',
                    [
                        'attribute' => 'id_jk_a',
                        'format' => 'raw',
                        'value' => $model->jk->jk,
                    ],
                    [
                        'label' => 'Jumlah Saudara Kandung',
                        'attribute' => 'saudara_a',
                        'format' => 'raw',
                        'value' => $model->saudara_a. ' Saudara',
                    ],
                    [
                        'label' => 'Tinggi Anak',
                        'attribute' => 'tnggi_a',
                        'format' => 'raw',
                        'value' => $model->tnggi_a. ' CM',
                    ],
                    [
                        'label' => 'Berat Anak',
                        'attribute' => 'berat_a',
                        'format' => 'raw',
                        'value' => $model->berat_a. ' KG',
                    ],
                    // 'berat_a',
                    'penyakit_a',
                    'imun_a',
                    [
                        'group' => true,
                        'label' => 'Data Orang Tua/Wali',
                        'rowOptions' => ['class' => 'bg-green'],
                //'groupOptions' => ['class' => 'text-center']
                    ],
                    'nama_b',
                    'tmptlahir_b',
                    'tgllahir_b',
                    'pendidikan_b',
                    // [
                    //     'attribute' => 'pendidikan_b',
                    //     'format' => 'raw',
                    //     'value' => @$model->pendidikan->nama,
                    // ],
                    'pekerjaan_b',
                    // [
                    //     'attribute' => 'pekerjaan_b',
                    //     'format' => 'raw',
                    //     'value' => @$model->pekerjaan->nama,
                    // ],
                    [
                        'attribute' => 'penghasilan_b',
                        'format' => 'raw',
                        'value' => '<b>Rp. </b>' . number_format($model->penghasilan_b, 2),
                    ],
                    'alamat_b:ntext',
                    'hp_b',
                    'nama_i',
                    'tmptlahir_i',
                    'tgllahir_i',
                    'pendidikan_i',
                    'pekerjaan_i',
                    // [
                    //     'attribute' => 'pendidikan_i',
                    //     'format' => 'raw',
                    //     'value' => @$model->pendidikan->nama,
                    // ],
                    // [
                    //     'attribute' => 'pekerjaan_i',
                    //     'format' => 'raw',
                    //     'value' => @$model->pekerjaan->nama,
                    // ],
                    [
                        'attribute' => 'penghasilan_i',
                        'format' => 'raw',
                        'value' => '<b>Rp. </b>' . number_format($model->penghasilan_i, 2),
                    ],
                    'alamat_i:ntext',
                    'hp_i',
                    [
                        'group' => true,
                        'label' => 'Kemampuan Anak',
                        'rowOptions' => ['class' => 'bg-green'],
                // 'groupOptions' => ['class' => 'text-center']
                    ],
                    'fisik_a',
                    'bakat_a',
                    'kepribadian_a',
                    // 'id_quran_a',
                    // 'id_buku_a',
                    // 'jilid_a',
                    [
                        'label' => 'Pencapaian Jilid',
                        'attribute' => 'jilid_a',
                        'format' => 'raw',
                        'value' => $model->jilid_a,
                    ],
                    // 'surat_a',
                    [
                        'attribute' => 'surat_a',
                        'format' => 'raw',
                        'value' => $model->getSurat()
                    ],
                    'alpabet_a',
                    [
                        'attribute' => 'k_1',
                        'format' => 'raw',
                        'value' => $model->getKemampuan1(),
                    ],
                    [
                        'attribute' => 'k_2',
                        'format' => 'raw',
                        'value' => $model->getKemampuan2(),
                    ],
                    [
                        'attribute' => 'k_3',
                        'format' => 'raw',
                        'value' => $model->getKemampuan3(),
                    ],
                    [
                        'attribute' => 'k_4',
                        'format' => 'raw',
                        'value' => $model->getKemampuan4(),
                    ],
                    [
                        'attribute' => 'k_5',
                        'format' => 'raw',
                        'value' => $model->getKemampuan5(),
                    ],
                    [
                        'attribute' => 'k_6',
                        'format' => 'raw',
                        'value' => $model->getKemampuan6(),
                    ],
                    [
                        'attribute' => 'k_7',
                        'format' => 'raw',
                        'value' => $model->getKemampuan7(),
                    ],
                    [
                        'attribute' => 'k_8',
                        'format' => 'raw',
                        'value' => $model->getKemampuan8(),
                    ],
                    [
                        'attribute' => 'k_9',
                        'format' => 'raw',
                        'value' => $model->getKemampuan9(),
                    ],
                    [
                        'attribute' => 'k_10',
                        'format' => 'raw',
                        'value' => $model->getKemampuan10(),
                    ],
                    // 'k_1',
                    // 'k_2',
                    // 'k_3',
                    // 'k_4',
                    // 'k_5',
                    // 'k_6',
                    // 'k_7',
                    // 'k_8',
                    // 'k_9',
                    // 'k_10',
                    [
                        'label'=>'Download Formulir',
                        'format' => 'raw',
                        'value' =>  Html::a('<i class="fa fa-print"></i> Download Formulir', ['pdf', 'id' => $model->id], ['class' => 'btn btn-success btn-flat','target' => '_blank']) 
                    ],
                ],
            ]) ?>
        </div>
    </div>
    <div class="box-footer">
        <a href="javascript:window.open('','_self').close();" class="btn btn-primary">close</a>
    </div>
</div>

<script type="text/javascript">
    $('#close').on('click',function(e){
        e.preventDefault();
        window.open('','_parent','');
        window.close();
    });
</script>