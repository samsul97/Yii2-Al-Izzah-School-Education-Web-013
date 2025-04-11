<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\file\fileInput;
use kartik\date\DatePicker;
use kartik\time\TimePicker;
use kartik\datecontrol\DateControl;
use app\models\Tahun;
use app\models\Jk;
use app\models\Agama;
use app\models\FormSd;
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
/* @var $model app\models\FormSd */
/* @var $form yii\widgets\ActiveForm */

$code_       = date('Ymd');
$code_digit  = 4;
$code_prefix = $code_ . 'SDAI_';
$code_model  = FormSd::find()->where(['LIKE', 'no_daftar', $code_prefix . '%', false])->max('no_daftar');
$code_init   = (int) BaseStringHelper::byteSubstr($code_model, strlen($code_prefix), strlen($code_prefix) + $code_digit);
$code_seq    = str_pad($code_init + 1 , $code_digit, '0', STR_PAD_LEFT);
$code_gen    = $code_prefix . $code_seq;

$code_prefixs = 'TK';
$code_gens    = $code_prefixs;
?>

<div class="form-sd-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">
        <center><h2><b>PENDAFTARAN ONLINE SDIT AL-IZZAH</b></h2></center>
        <br>
        <div class='col-xs-12 col-sm-12 col-md-12'>

            <h3><b>A. Data Calon Wali Murid</b></h3>
            <br>

            <div class="row">
                <div class="col-lg-6 col-sm-6 cl-xs-6">

                    <?= $form->field($model, 'no_daftar')->textInput(['maxlength' => true, 'readonly' => true, 'autonumber', 'value' => $code_gen , 'digit' => 4]) ?>
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

                <div class="form-group">
                    <?= Html::label('Pekerjaan Wali', 'select_pekerjaan_w') ?>
                    <?= Select2::widget(
                        [
                            'id' => 'select_pekerjaan_w',
                            'name' => 'select_pekerjaan_w',
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

                    <?= $form->field($model, 'pekerjaan_w')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                    <?= $form->field($model, 'alamat_w')->textarea(['rows' => 6, 'placeholder' => 'Jl. Pondok Belimbing, No.4']) ?>

                    <?= $form->field($model, 'alamatkantor_w')->textarea(['rows' => 6, 'placeholder' => 'Boleh kosong jika tidak ada']) ?>

                    <?= $form->field($model, 'nm_lengkap_a')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'panggilan_a')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'tmptlahir_a')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Jakarta']) ?>

                    <?= $form->field($model, 'tgllahir_a')->widget(DatePicker::classname(), [
                     'removeButton' => false,
                     'value' => date('Y-m-d'),
                     'options' => ['placeholder' => 'Tanggal Lahir Anak'],
                     'pluginOptions' => [
                       'autoclose'=>true,
                       'format' => 'yyyy-mm-dd'
                   ]])
                   ?>

               </div>

               <div class='col-xs-12 col-sm-12 col-md-12'>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h3><b>B. Data Calon Peserta Didik</b></h3>
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

                            <?= $form->field($model, 'alamat_c')->textarea(['rows' => 6]) ?>

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

                                    <?= $form->field($model, 'no_c')->textInput() ?>

                                    <?= $form->field($model, 'email_c')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'tinggi_a')->textInput(['placeholder' => 'CM']) ?>

                                    <?= $form->field($model, 'berat_a')->textInput(['placeholder' => 'KG']) ?>

                                    <?= $form->field($model, 'jarak_a')->textInput(['placeholder' => 'M']) ?>

                                    <?= $form->field($model, 'waktu_tempuh')->textInput(['placeholder' => 'Menit']) ?>

                                    <?= $form->field($model, 'saudara_a')->textInput(['maxlength' => true]) ?>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6">
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

                                                <div class="form-group">
                                                    <?= Html::label('Kebutuhan Khusus Ayah', 'select_id_khusus_b') ?>
                                                    <?= Select2::widget(
                                                        [
                                                            'id' => 'select_id_khusus_b',
                                                            'name' => 'select_id_khusus_b',
                                                            'data' => Khusus::getList(),
                                                            'options' => [
                                                                'placeholder' => '-Pilih Kebutuhan Khusus Ayah-',
                                                            ],
                                                            'pluginOptions' => [
                                                                'allowClear' => true
                                                            ],
                                                        ]);
                                                        ?>
                                                    </div>

                                                    <?= $form->field($model, 'id_khusus_b')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

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

                                                            <div class="form-group">
                                                                <?= Html::label('Kebutuhan Khusus Ibu', 'select_id_khusus_i') ?>
                                                                <?= Select2::widget(
                                                                    [
                                                                        'id' => 'select_id_khusus_i',
                                                                        'name' => 'select_id_khusus_i',
                                                                        'data' => Khusus::getList(),
                                                                        'options' => [
                                                                            'placeholder' => '-Pilih Kebutuhan Khusus Ibu-',
                                                                        ],
                                                                        'pluginOptions' => [
                                                                            'allowClear' => true
                                                                        ],
                                                                    ]);
                                                                    ?>
                                                                </div>

                                                                <?= $form->field($model, 'id_khusus_i')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                                                                <?= $form->field($model, 'thnlahir_i')->widget(DatePicker::classname(), [
                                                                   'removeButton' => false,
                                                                   'value' => date('Y-m-d'),
                                                                   'options' => ['placeholder' => 'Tahun Lahir Ibu'],
                                                                   'pluginOptions' => [
                                                                     'autoclose'=>true,
                                                                     'format' => 'yyyy-mm-dd'
                                                                 ]])
                                                                 ?>

                                                                 <?= $form->field($model, 'nama_wl')->textInput(['maxlength' => true]) ?>

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

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-footer">
                                                                <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
                                                            </div>
                                                            <?php ActiveForm::end(); ?>
                                                        </div>

                                                        <script>
                                                            $('#select_id_khusus_c').on('change', function(e){
                                                                $('#formsd-id_khusus_c').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_khusus_c').attr('type','input');
                                                                    $('#formsd-id_khusus_c').val('');
                                                                } else {
                                                                    $('#formsd-id_khusus_c').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_khusus_c').focus();
                                                            });
                                                            $('#select_pekerjaan_w').on('change', function(e){
                                                                $('#formsd-pekerjaan_w').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-pekerjaan_w').attr('type','input');
                                                                    $('#formsd-pekerjaan_w').val('');
                                                                } else {
                                                                    $('#formsd-pekerjaan_w').attr('type','hidden');
                                                                }
                                                                $('#formsd-pekerjaan_w').focus();
                                                            });

                                                            $('#select_id_penghasilan_b').on('change', function(e){
                                                                $('#formsd-id_penghasilan_b').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_penghasilan_b').attr('type','input');
                                                                    $('#formsd-id_penghasilan_b').val('');
                                                                } else {
                                                                    $('#formsd-id_penghasilan_b').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_penghasilan_b').focus();
                                                            });

                                                            $('#select_id_khusus_b').on('change', function(e){
                                                                $('#formsd-id_khusus_b').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_khusus_b').attr('type','input');
                                                                    $('#formsd-id_khusus_b').val('');
                                                                } else {
                                                                    $('#formsd-id_khusus_b').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_khusus_b').focus();
                                                            });

                                                            $('#select_id_pendidikan_b').on('change', function(e){
                                                                $('#formsd-id_pendidikan_b').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_pendidikan_b').attr('type','input');
                                                                    $('#formsd-id_pendidikan_b').val('');
                                                                } else {
                                                                    $('#formsd-id_pendidikan_b').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_pendidikan_b').focus();
                                                            });

                                                            $('#select_id_pekerjaan_b').on('change', function(e){
                                                                $('#formsd-id_pekerjaan_b').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_pekerjaan_b').attr('type','input');
                                                                    $('#formsd-id_pekerjaan_b').val('');
                                                                } else {
                                                                    $('#formsd-id_pekerjaan_b').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_pekerjaan_b').focus();
                                                            });
                                                            $('#select_id_pekerjaan_i').on('change', function(e){
                                                                $('#formsd-id_pekerjaan_i').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_pekerjaan_i').attr('type','input');
                                                                    $('#formsd-id_pekerjaan_i').val('');
                                                                } else {
                                                                    $('#formsd-id_pekerjaan_i').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_pekerjaan_i').focus();
                                                            });

                                                            $('#select_id_pendidikan_i').on('change', function(e){
                                                                $('#formsd-id_pendidikan_i').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_pendidikan_i').attr('type','input');
                                                                    $('#formsd-id_pendidikan_i').val('');
                                                                } else {
                                                                    $('#formsd-id_pendidikan_i').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_pendidikan_i').focus();
                                                            });

                                                            $('#select_id_penghasilan_i').on('change', function(e){
                                                                $('#formsd-id_penghasilan_i').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_penghasilan_i').attr('type','input');
                                                                    $('#formsd-id_penghasilan_i').val('');
                                                                } else {
                                                                    $('#formsd-id_penghasilan_i').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_penghasilan_i').focus();
                                                            });

                                                            $('#select_id_khusus_i').on('change', function(e){
                                                                $('#formsd-id_khusus_i').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_khusus_i').attr('type','input');
                                                                    $('#formsd-id_khusus_i').val('');
                                                                } else {
                                                                    $('#formsd-id_khusus_i').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_khusus_i').focus();
                                                            });

                                                            $('#select_id_pekerjaan_wl').on('change', function(e){
                                                                $('#formsd-id_pekerjaan_wl').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_pekerjaan_wl').attr('type','input');
                                                                    $('#formsd-id_pekerjaan_wl').val('');
                                                                } else {
                                                                    $('#formsd-id_pekerjaan_wl').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_pekerjaan_wl').focus();
                                                            });

                                                            $('#select_id_pendidikan_wl').on('change', function(e){
                                                                $('#formsd-id_pendidikan_wl').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_pendidikan_wl').attr('type','input');
                                                                    $('#formsd-id_pendidikan_wl').val('');
                                                                } else {
                                                                    $('#formsd-id_pendidikan_wl').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_pendidikan_wl').focus();
                                                            });

                                                            $('#select_id_penghasilan_wl').on('change', function(e){
                                                                $('#formsd-id_penghasilan_wl').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_penghasilan_wl').attr('type','input');
                                                                    $('#formsd-id_penghasilan_wl').val('');
                                                                } else {
                                                                    $('#formsd-id_penghasilan_wl').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_penghasilan_wl').focus();
                                                            });

                                                            $('#select_id_transport_c').on('change', function(e){
                                                                $('#formsd-id_transport_c').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_transport_c').attr('type','input');
                                                                    $('#formsd-id_transport_c').val('');
                                                                } else {
                                                                    $('#formsd-id_transport_c').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_transport_c').focus();
                                                            });

                                                            $('#select_id_jenis_tnggl').on('change', function(e){
                                                                $('#formsd-id_jenis_tnggl').val($(this).val());
                                                                if ($(this).val() == 'Lainya') {
                                                                    $('#formsd-id_jenis_tnggl').attr('type','input');
                                                                    $('#formsd-id_jenis_tnggl').val('');
                                                                } else {
                                                                    $('#formsd-id_jenis_tnggl').attr('type','hidden');
                                                                }
                                                                $('#formsd-id_jenis_tnggl').focus();
                                                            });

                                                        </script>