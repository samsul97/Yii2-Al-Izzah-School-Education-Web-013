<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\FormSmp;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\file\fileInput;
use kartik\date\DatePicker;
use kartik\time\TimePicker;
use kartik\datecontrol\DateControl;
use app\models\Tahun;
use app\models\Jk;
use app\models\Agama;
use app\models\Khusus;
use app\models\JenisTinggal;
use app\models\Transport;
use app\models\Pendidikan;
use app\models\Pekerjaan;
use app\models\Penghasilan;
use app\models\Question;
use kartik\number\NumberControl;
use yii\helpers\BaseStringHelper;
/* @var $this yii\web\View */
/* @var $model app\models\FormSmp */
/* @var $form yii\widgets\ActiveForm */

$code_       = date('Ymd');
$code_digit  = 4;
$code_prefix = $code_ . 'SMPAI_';
$code_model  = FormSmp::find()->where(['LIKE', 'no_daftar', $code_prefix . '%', false])->max('no_daftar');
$code_init   = (int) BaseStringHelper::byteSubstr($code_model, strlen($code_prefix), strlen($code_prefix) + $code_digit);
$code_seq    = str_pad($code_init + 1 , $code_digit, '0', STR_PAD_LEFT);
$code_gen    = $code_prefix . $code_seq;

// $code_       = date('Ymd');
// $code_digits  = 2;
// $code_models  = FormSmp::find()->where(['LIKE', 'as1', $code_prefixs . '%', false])->max('as1');
// $code_inits   = (int) BaseStringHelper::byteSubstr($code_models, strlen($code_prefixs), strlen($code_prefixs) + $code_digits);
// $code_seqs    = str_pad($code_inits + 1 , $code_digits, '0', STR_PAD_LEFT);
$code_prefixs = 'SD';
$code_gens    = $code_prefixs;
?>

<div class="form-smp-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">
        <center><h2><b>PENDAFTARAN ONLINE SMPIT AL-IZZAH</b></h2></center>
        <br>
        <div class='col-xs-12 col-sm-12 col-md-12'>

            <h3><b>A. Data Calon Wali Murid</b></h3>
            <br>
            
            <div class="row">
                  <div class="col-lg-6">

            <?= $form->field($model, 'no_daftar')->textInput(['maxlength' => true, 'readonly' => true, 'autonumber', 'value' => $code_gen, 'digit' => 4]) ?>
            </div>
            
                  <div class="col-lg-6">
            <?= $form->field($model, 'id_thn')->widget(Select2::classname(),
                [
                    'data' => Tahun::getList(),
                    'options' => [
                        'placeholder' => '-Pilih Tahun Pelajaran-',
                    ],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>
                
                </div>
                
                </div>

                <?= $form->field($model, 'nama_w')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'usia_w')->textInput(['maxlength' => true, 'placeholder' => '21 Tahun']) ?>
                
                <?= $form->field($model, 'thnlahir_w')->widget(DatePicker::classname(), [
                                                                     'removeButton' => false,
                                                                     'value' => date('Y-m-d'),
                                                                     'options' => ['placeholder' => 'Tahun Lahir Wali'],
                                                                     'pluginOptions' => [
                                                                       'autoclose'=>true,
                                                                       'format' => 'yyyy-mm-dd'
                                                                   ]])
                                                                   ?>

                                                                   <div class="form-group">
                                                                    <?= Html::label('Pendidikan Wali', 'select_id_pendidikan_wl') ?>
                                                                    <?= Select2::widget(
                                                                        [
                                                                            'id' => 'select_id_pendidikan_wl',
                                                                            'name' => 'select_id_pendidikan_wl',
                                                                            'data' => Pendidikan::getList(),
                                                                            'options' => [
                                                                                'placeholder' => '-Pilih Pendidikan Wali-',
                                                                            ],
                                                                            'pluginOptions' => [
                                                                                'allowClear' => true
                                                                            ],
                                                                        ]);
                                                                        ?>
                                                                    </div>

                                                                    <?= $form->field($model, 'id_pendidikan_wl')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                                                    <div class="form-group">
                                                                        <?= Html::label('Pekerjaan Wali', 'select_id_pekerjaan_wl') ?>
                                                                        <?= Select2::widget(
                                                                            [
                                                                                'id' => 'select_id_pekerjaan_wl',
                                                                                'name' => 'select_id_pekerjaan_wl',
                                                                                'data' => Pekerjaan::getList(),
                                                                                'options' => [
                                                                                    'placeholder' => '-Pilih Pekerjaan Wali-',
                                                                                ],
                                                                                'pluginOptions' => [
                                                                                    'allowClear' => true
                                                                                ],
                                                                            ]);
                                                                            ?>
                                                                        </div>

                                                                        <?= $form->field($model, 'id_pekerjaan_wl')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                                                        <div class="form-group">
                                                                            <?= Html::label('Penghasilan Wali', 'select_id_penghasilan_wl') ?>
                                                                            <?= Select2::widget(
                                                                                [
                                                                                    'id' => 'select_id_penghasilan_wl',
                                                                                    'name' => 'select_id_penghasilan_wl',
                                                                                    'data' => Penghasilan::getList(),
                                                                                    'options' => [
                                                                                        'placeholder' => '-Pilih Penghasilan Wali-',
                                                                                    ],
                                                                                    'pluginOptions' => [
                                                                                        'allowClear' => true
                                                                                    ],
                                                                                ]);
                                                                                ?>
                                                                            </div>

                                                                            <?= $form->field($model, 'id_penghasilan_wl')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                    <?= $form->field($model, 'alamat_w')->textarea(['rows' => 6, 'placeholder' => 'Isi Alamat Lengkap']) ?>

                    <?= $form->field($model, 'alamatkantor_w')->textarea(['rows' => 6, 'placeholder' => 'Boleh dikosongkan jika tidak ada']) ?>

               </div>

               <div class='col-xs-12 col-sm-12 col-md-12'>

                <h3><b>B. Data Calon Peserta Didik</b></h3>
                <br>

                <div class="col-xs-12 col-sm-12 col-md-6">

                    <button class="btn btn-success">1. Biodata Siswa</button>
                    <br>
                    <br>

                    <?= $form->field($model, 'lengkap_c')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'panggilan_c')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'id_jk_c')->widget(Select2::classname(),
                        [
                            'data' => Jk::getList(),
                            'options' => [
                                'placeholder' => '-Pilih Jenis Kelamin-',
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]);
                        ?>

                        <?= $form->field($model, 'tmptlahir_c')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Jakarta, 21 Oktober 2004']) ?>

                        <?= $form->field($model, 'tgllahir_c')->widget(DatePicker::classname(), [
                         'removeButton' => false,
                         'value' => date('Y-m-d'),
                         'options' => ['placeholder' => 'Tanggal Lahir Calon Siswa'],
                         'pluginOptions' => [
                           'autoclose'=>true,
                           'format' => 'yyyy-mm-dd'
                       ]])
                       ?>

                       <?= $form->field($model, 'id_agama_c')->widget(Select2::classname(),
                        [
                            'data' => Agama::getList(),
                            'options' => [
                                'placeholder' => '-Pilih Agama-',
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]);
                        ?>

                        <div class="form-group">
                            <?= Html::label('Kebutuhan Khusus', 'select_id_khusus_c') ?>
                            <?= Select2::widget(
                                [
                                    'id' => 'select_id_khusus_c',
                                    'name' => 'select_id_khusus_c',
                                    'data' => Khusus::getList(),
                                    'options' => [
                                        'placeholder' => '-Pilih Kebutuhan Khusus Calon Siswa-',
                                    ],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]);
                                ?>
                            </div>

                            <?= $form->field($model, 'id_khusus_c')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                            <?= $form->field($model, 'alamat_c')->textarea(['rows' => 6, 'placeholder' => 'Contoh : Jl. Japos Raya, No.31, Kel.Jurbar, Kec.Pondok Aren, Tangerang Selatan']) ?>

                            <div class="form-group">
                                <?= Html::label('Jenis Tinggal', 'select_id_jenis_tnggl') ?>
                                <?= Select2::widget(
                                    [
                                        'id' => 'select_id_jenis_tnggl',
                                        'name' => 'select_id_jenis_tnggl',
                                        'data' => JenisTinggal::getList(),
                                        'options' => [
                                            'placeholder' => '-Pilih Transport Calon Siswa-',
                                        ],
                                        'pluginOptions' => [
                                            'allowClear' => true
                                        ],
                                    ]);
                                    ?>
                                </div>

                                <?= $form->field($model, 'id_jenis_tnggl')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>                            

                                <div class="form-group">
                                    <?= Html::label('Transport Anak', 'select_id_transport_c') ?>
                                    <?= Select2::widget(
                                        [
                                            'id' => 'select_id_transport_c',
                                            'name' => 'select_id_transport_c',
                                            'data' => Transport::getList(),
                                            'options' => [
                                                'placeholder' => '-Pilih Transport Calon Siswa-',
                                            ],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],
                                        ]);
                                        ?>
                                    </div>

                                    <?= $form->field($model, 'id_transport_c')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                    <?= $form->field($model, 'no_c')->textInput(['placeholder' => 'Jika tidak ada, gunakan nomor orang tua yang aktif']) ?>

                                    <?= $form->field($model, 'email_c')->textInput(['maxlength' => true, 'placeholder' => 'Format Email Harus Sesuai. Contoh : rani@gmail.com']) ?>

                                    <?= $form->field($model, 'tinggi_a')->textInput(['placeholder' => 'CM']) ?>

                                    <?= $form->field($model, 'berat_a')->textInput(['placeholder' => 'KG']) ?>

                                    <?= $form->field($model, 'jarak_a')->textInput(['placeholder' => 'M']) ?>

                                    <?= $form->field($model, 'waktu_tempuh')->textInput(['placeholder' => 'Menit']) ?>

                                    <?= $form->field($model, 'saudara_a')->textInput(['maxlength' => true, 'placeholder' => 'Jumlah saudara kandung']) ?>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6">

                                    <button class="btn btn-danger">2. Asal Sekolah & Keterangan Orang Tua</button>
                                    <br>
                                    <br>

                                    <?= $form->field($model, 'as1')->textInput(['maxlength' => true, 'readonly' => true, 'autonumber', 'value' => $code_gens]) ?>

                                    <?= $form->field($model, 'as2')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'as3')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : 6 Tahun']) ?>

                                    <?= $form->field($model, 'as4')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'as5')->textInput(['maxlength' => true, 'placeholder' => 'Wajib di Isi']) ?>

                                    <?= $form->field($model, 'as6')->widget(DatePicker::classname(), [
                                       'removeButton' => false,
                                       'value' => date('Y-m-d'),
                                       'options' => ['placeholder' => 'Tanggal Pindah'],
                                       'pluginOptions' => [
                                         'autoclose'=>true,
                                         'format' => 'yyyy-mm-dd'
                                     ]])
                                     ?>

                                     <?= $form->field($model, 'as7')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : 6A']) ?>

                                     <?= $form->field($model, 'as8')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Lomba Baca Al-Quran di SDN JURBAR 01']) ?>

                                     <?= $form->field($model, 'as9')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Lomba Baca Al-Quran']) ?>

                                 </div>
                             </div>

                             <div class='col-xs-12 col-sm-12 col-md-12'>

                                <h3><b>C. Data Orang Tua/Wali</b></h3>
                                <br>

                                <?= $form->field($model, 'nama_b')->textInput(['maxlength' => true]) ?>

                                <div class="form-group">
                                    <?= Html::label('Pendidikan Ayah', 'select_id_pendidikan_b') ?>
                                    <?= Select2::widget(
                                        [
                                            'id' => 'select_id_pendidikan_b',
                                            'name' => 'select_id_pendidikan_b',
                                            'data' => Pendidikan::getList(),
                                            'options' => [
                                                'placeholder' => '-Pilih Pendidikan Ayah-',
                                            ],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],
                                        ]);
                                        ?>
                                    </div>

                                    <?= $form->field($model, 'id_pendidikan_b')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                    <div class="form-group">
                                        <?= Html::label('Pekerjaan Ayah', 'select_id_pekerjaan_b') ?>
                                        <?= Select2::widget(
                                            [
                                                'id' => 'select_id_pekerjaan_b',
                                                'name' => 'select_id_pekerjaan_b',
                                                'data' => Pekerjaan::getList(),
                                                'options' => [
                                                    'placeholder' => '-Pilih Pekerjaan Ayah-',
                                                ],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                            ]);
                                            ?>
                                        </div>

                                        <?= $form->field($model, 'id_pekerjaan_b')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                        <div class="form-group">
                                            <?= Html::label('Penghasilan Ayah', 'select_id_penghasilan_b') ?>
                                            <?= Select2::widget(
                                                [
                                                    'id' => 'select_id_penghasilan_b',
                                                    'name' => 'select_id_penghasilan_b',
                                                    'data' => Penghasilan::getList(),
                                                    'options' => [
                                                        'placeholder' => '-Pilih Penghasilan Ayah-',
                                                    ],
                                                    'pluginOptions' => [
                                                        'allowClear' => true
                                                    ],
                                                ]);
                                                ?>
                                            </div>

                                            <?= $form->field($model, 'id_penghasilan_b')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>


                                                <?= $form->field($model, 'thnlahir_b')->widget(DatePicker::classname(), [
                                                   'removeButton' => false,
                                                   'value' => date('Y-m-d'),
                                                   'options' => ['placeholder' => 'Tahun Lahir Ayah'],
                                                   'pluginOptions' => [
                                                     'autoclose'=>true,
                                                     'format' => 'yyyy-mm-dd'
                                                 ]])
                                                 ?>

                                                 <?= $form->field($model, 'nama_i')->textInput(['maxlength' => true]) ?>

                                                 <div class="form-group">
                                                    <?= Html::label('Pendidikan Ibu', 'select_id_pendidikan_i') ?>
                                                    <?= Select2::widget(
                                                        [
                                                            'id' => 'select_id_pendidikan_i',
                                                            'name' => 'select_id_pendidikan_i',
                                                            'data' => Pendidikan::getList(),
                                                            'options' => [
                                                                'placeholder' => '-Pilih Pendidikan Ibu-',
                                                            ],
                                                            'pluginOptions' => [
                                                                'allowClear' => true
                                                            ],
                                                        ]);
                                                        ?>
                                                    </div>

                                                    <?= $form->field($model, 'id_pendidikan_i')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                                    <div class="form-group">
                                                        <?= Html::label('Pekerjaan Ibu', 'select_id_pekerjaan_i') ?>
                                                        <?= Select2::widget(
                                                            [
                                                                'id' => 'select_id_pekerjaan_i',
                                                                'name' => 'select_id_pekerjaan_i',
                                                                'data' => Pekerjaan::getList(),
                                                                'options' => [
                                                                    'placeholder' => '-Pilih Pekerjaan Ibu-',
                                                                ],
                                                                'pluginOptions' => [
                                                                    'allowClear' => true
                                                                ],
                                                            ]);
                                                            ?>
                                                        </div>

                                                        <?= $form->field($model, 'id_pekerjaan_i')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                                        <div class="form-group">
                                                            <?= Html::label('Penghasilan Ibu', 'select_id_penghasilan_i') ?>
                                                            <?= Select2::widget(
                                                                [
                                                                    'id' => 'select_id_penghasilan_i',
                                                                    'name' => 'select_id_penghasilan_i',
                                                                    'data' => Penghasilan::getList(),
                                                                    'options' => [
                                                                        'placeholder' => '-Pilih Penghasilan Ibu-',
                                                                    ],
                                                                    'pluginOptions' => [
                                                                        'allowClear' => true
                                                                    ],
                                                                ]);
                                                                ?>
                                                            </div>

                                                            <?= $form->field($model, 'id_penghasilan_i')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                                                <?= $form->field($model, 'thnlahir_i')->widget(DatePicker::classname(), [
                                                                   'removeButton' => false,
                                                                   'value' => date('Y-m-d'),
                                                                   'options' => ['placeholder' => 'Tahun Lahir Ibu'],
                                                                   'pluginOptions' => [
                                                                     'autoclose'=>true,
                                                                     'format' => 'yyyy-mm-dd'
                                                                 ]])
                                                                 ?>

                                                                        </div>

                                                                    </div>
                                                                    <div class="box-footer">
                                                                        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
                                                                    </div>
                                                                    <?php ActiveForm::end(); ?>
                                                                </div>

                                                                <script>

                                                                    $('#select_id_khusus_c').on('change', function(e){
                                                                        $('#formsmp-id_khusus_c').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_khusus_c').attr('type','input');
                                                                            $('#formsmp-id_khusus_c').val('');
                                                                        } else {
                                                                            $('#formsmp-id_khusus_c').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_khusus_c').focus();
                                                                    });

                                                                    $('#select_pekerjaan_w').on('change', function(e){
                                                                        $('#formsmp-pekerjaan_w').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-pekerjaan_w').attr('type','input');
                                                                            $('#formsmp-pekerjaan_w').val('');
                                                                        } else {
                                                                            $('#formsmp-pekerjaan_w').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-pekerjaan_w').focus();
                                                                    });

                                                                    $('#select_id_penghasilan_b').on('change', function(e){
                                                                        $('#formsmp-id_penghasilan_b').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_penghasilan_b').attr('type','input');
                                                                            $('#formsmp-id_penghasilan_b').val('');
                                                                        } else {
                                                                            $('#formsmp-id_penghasilan_b').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_penghasilan_b').focus();
                                                                    });

                                                                    $('#select_id_khusus_b').on('change', function(e){
                                                                        $('#formsmp-id_khusus_b').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_khusus_b').attr('type','input');
                                                                            $('#formsmp-id_khusus_b').val('');
                                                                        } else {
                                                                            $('#formsmp-id_khusus_b').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_khusus_b').focus();
                                                                    });

                                                                    $('#select_id_pendidikan_b').on('change', function(e){
                                                                        $('#formsmp-id_pendidikan_b').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_pendidikan_b').attr('type','input');
                                                                            $('#formsmp-id_pendidikan_b').val('');
                                                                        } else {
                                                                            $('#formsmp-id_pendidikan_b').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_pendidikan_b').focus();
                                                                    });

                                                                    $('#select_id_pekerjaan_b').on('change', function(e){
                                                                        $('#formsmp-id_pekerjaan_b').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_pekerjaan_b').attr('type','input');
                                                                            $('#formsmp-id_pekerjaan_b').val('');
                                                                        } else {
                                                                            $('#formsmp-id_pekerjaan_b').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_pekerjaan_b').focus();
                                                                    });

                                                                    $('#select_id_pekerjaan_i').on('change', function(e){
                                                                        $('#formsmp-id_pekerjaan_i').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_pekerjaan_i').attr('type','input');
                                                                            $('#formsmp-id_pekerjaan_i').val('');
                                                                        } else {
                                                                            $('#formsmp-id_pekerjaan_i').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_pekerjaan_i').focus();
                                                                    });

                                                                    $('#select_id_pendidikan_i').on('change', function(e){
                                                                        $('#formsmp-id_pendidikan_i').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_pendidikan_i').attr('type','input');
                                                                            $('#formsmp-id_pendidikan_i').val('');
                                                                        } else {
                                                                            $('#formsmp-id_pendidikan_i').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_pendidikan_i').focus();
                                                                    });

                                                                    $('#select_id_penghasilan_i').on('change', function(e){
                                                                        $('#formsmp-id_penghasilan_i').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_penghasilan_i').attr('type','input');
                                                                            $('#formsmp-id_penghasilan_i').val('');
                                                                        } else {
                                                                            $('#formsmp-id_penghasilan_i').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_penghasilan_i').focus();
                                                                    });

                                                                    $('#select_id_khusus_i').on('change', function(e){
                                                                        $('#formsmp-id_khusus_i').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_khusus_i').attr('type','input');
                                                                            $('#formsmp-id_khusus_i').val('');
                                                                        } else {
                                                                            $('#formsmp-id_khusus_i').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_khusus_i').focus();
                                                                    });

                                                                    $('#select_id_pekerjaan_wl').on('change', function(e){
                                                                        $('#formsmp-id_pekerjaan_wl').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_pekerjaan_wl').attr('type','input');
                                                                            $('#formsmp-id_pekerjaan_wl').val('');
                                                                        } else {
                                                                            $('#formsmp-id_pekerjaan_wl').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_pekerjaan_wl').focus();
                                                                    });

                                                                    $('#select_id_pendidikan_wl').on('change', function(e){
                                                                        $('#formsmp-id_pendidikan_wl').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_pendidikan_wl').attr('type','input');
                                                                            $('#formsmp-id_pendidikan_wl').val('');
                                                                        } else {
                                                                            $('#formsmp-id_pendidikan_wl').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_pendidikan_wl').focus();
                                                                    });

                                                                    $('#select_id_penghasilan_wl').on('change', function(e){
                                                                        $('#formsmp-id_penghasilan_wl').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_penghasilan_wl').attr('type','input');
                                                                            $('#formsmp-id_penghasilan_wl').val('');
                                                                        } else {
                                                                            $('#formsmp-id_penghasilan_wl').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_penghasilan_wl').focus();
                                                                    });

                                                                    $('#select_id_transport_c').on('change', function(e){
                                                                        $('#formsmp-id_transport_c').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_transport_c').attr('type','input');
                                                                            $('#formsmp-id_transport_c').val('');
                                                                        } else {
                                                                            $('#formsmp-id_transport_c').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_transport_c').focus();
                                                                    });

                                                                    $('#select_id_jenis_tnggl').on('change', function(e){
                                                                        $('#formsmp-id_jenis_tnggl').val($(this).val());
                                                                        if ($(this).val() == 'Lainya') {
                                                                            $('#formsmp-id_jenis_tnggl').attr('type','input');
                                                                            $('#formsmp-id_jenis_tnggl').val('');
                                                                        } else {
                                                                            $('#formsmp-id_jenis_tnggl').attr('type','hidden');
                                                                        }
                                                                        $('#formsmp-id_jenis_tnggl').focus();
                                                                    });
                                                                </script>