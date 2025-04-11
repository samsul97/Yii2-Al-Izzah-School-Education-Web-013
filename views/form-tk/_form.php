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
use app\models\FormTk;
use app\models\Pendidikan;
use app\models\Pekerjaan;
use kartik\number\NumberControl;
use yii\helpers\BaseStringHelper;
/* @var $this yii\web\View */
/* @var $model app\models\FormTk */
/* @var $form yii\widgets\ActiveForm */

$code_       = date('Ymd');
$code_digit  = 4;
$code_prefix = $code_ . 'TKAI_';
$code_model  = FormTk::find()->where(['LIKE', 'no_daftar', $code_prefix . '%', false])->max('no_daftar');
$code_init   = (int) BaseStringHelper::byteSubstr($code_model, strlen($code_prefix), strlen($code_prefix) + $code_digit);
$code_seq    = str_pad($code_init + 1 , $code_digit, '0', STR_PAD_LEFT);
$code_gen    = $code_prefix . $code_seq;
?>



<div class="form-tk-form box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <div class="box-body table-responsive">
        <center><h2><b>PENDAFTARAN ONLINE TKIT AL-IZZAH</b></h2></center>
        <br>
        <div class='col-xs-12 col-sm-12 col-md-4'>
            <h3><b>A. ANAK</b></h3>
            <br>

            <?= $form->field($model, 'no_daftar')->textInput(['maxlength' => true, 'readonly' => true, 'autonumber', 'value' => $code_gen , 'digit' => 4]) ?>

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

                <?= $form->field($model, 'nama_a')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'pnggil_a')->textInput(['maxlength' => true]) ?>


                <div class="row">
                  <div class="col-lg-6">

                    <?= $form->field($model, 'tmptlahir_a')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Tangerang']) ?>

                </div>

                <div class="col-lg-6">

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
             </div>

             <?= $form->field($model, 'id_jk_a')->widget(Select2::classname(),
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

                <?= $form->field($model, 'saudara_a')->textInput(['maxlength' => true, 'placeholder' => 'Jumlah Saudara Kandung']) ?>

                <div class="row">
                  <div class="col-lg-6">

                    <?= $form->field($model, 'tnggi_a', [ 'template' => '
                        {label}
                        <div class="input-group">
                        {input}
                        <span class="input-group-addon" id="basic-addon2">CM</span>
                        </div>
                        {hint}
                        {error}',
                        'options' => ['class' => 'has-feedback']])->textInput(['maxlength' => true]) ?>

                    </div>

                    <div class="col-lg-6">

                        <?= $form->field($model, 'berat_a', [ 'template' => '
                            {label}
                            <div class="input-group">
                            {input}
                            <span class="input-group-addon" id="basic-addon2">KG</span>
                            </div>
                            {hint}
                            {error}',
                            'options' => ['class' => 'has-feedback']])->textInput(['maxlength' => true]) ?>

                        </div>
                    </div>

                    <?= $form->field($model, 'penyakit_a')->textInput(['maxlength' => true, 'placeholder' => 'Boleh dikosongkan jika tidak ada']) ?>
                    <?= $form->field($model, 'imun_a')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Hepatitis, Campak, Cacar']) ?>


                </div>

                <div class='col-xs-12 col-sm-12 col-md-4'>

                    <h3><b>B. ORANG TUA/WALI</b></h3>
                    <br>

                    <?= $form->field($model, 'nama_b')->textInput(['maxlength' => true]) ?>

                    <div class="row">
                      <div class="col-lg-6">

                        <?= $form->field($model, 'tmptlahir_b')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Tangerang']) ?>
                    </div>

                    <div class="col-lg-6">
                        <?= $form->field($model, 'tgllahir_b')->widget(DatePicker::classname(), [
                           'removeButton' => false,
                           'value' => date('Y-m-d'),
                           'options' => ['placeholder' => 'Tanggal Lahir Ayah'],
                           'pluginOptions' => [
                             'autoclose'=>true,
                             'format' => 'yyyy-mm-dd'
                         ]])
                         ?>
                     </div>
                 </div>

                 <div class="form-group">
                    <?= Html::label('Pendidikan Ayah', 'select_pendidikan_b') ?>
                    <?= Select2::widget(
                        [
                            'id' => 'select_pendidikan_b',
                            'name' => 'select_pendidikan_b',
                            'data' => Pendidikan::getList(),
                            'options' => [
                                'placeholder' => '-Pilih Pendidikan-',
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]);
                        ?>
                    </div>

                    <?= $form->field($model, 'pendidikan_b')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                    <div class="form-group">
                        <?= Html::label('Pekerjaan Bapak', 'select_pekerjaan_b') ?>
                        <?= Select2::widget(
                            [
                                'id' => 'select_pekerjaan_b',
                                'name' => 'select_pekerjaan_b',
                                'data' => Pekerjaan::getList(),
                                'options' => [
                                    'placeholder' => '-Pilih Pekerjaan-',
                                ],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]);
                            ?>
                        </div>

                        <?= $form->field($model, 'pekerjaan_b')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                        <?= $form->field($model, 'penghasilan_b')->widget(NumberControl::classname(), [
                            'data' => 'number-decimal',
                            'options' => ['placeholder' => 'Perbulan'],
                        // 'options' => $saveOptions,
                            'maskedInputOptions' => [
                                'digits' => 0,
                                'alias' => 'numeric',
                                'groupSeparator' => ',',
                                'autoGroup' => true,
                                'autoUnmask' => true,
                                'unmaskAsNumber' => true,
                            ],
                        ]); ?>

                        <?= $form->field($model, 'alamat_b')->textarea(['rows' => 6, 'placeholder' => 'Jl. Japos Raya, No.10, Tangerang Selatan']) ?>

                        <?= $form->field($model, 'hp_b')->textInput(['maxlength' => true, 'placeholder' => 'Harus berupa angka']) ?>

                        <?= $form->field($model, 'nama_i')->textInput(['maxlength' => true]) ?>

                        <div class="row">
                          <div class="col-lg-6">

                            <?= $form->field($model, 'tmptlahir_i')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Tangerang']) ?>

                        </div>

                        <div class="col-lg-6">


                            <?= $form->field($model, 'tgllahir_i')->widget(DatePicker::classname(), [
                               'removeButton' => false,
                               'value' => date('Y-m-d'),
                               'options' => ['placeholder' => 'Tanggal Lahir Ibu'],
                               'pluginOptions' => [
                                 'autoclose'=>true,
                                 'format' => 'yyyy-mm-dd'
                             ]])
                             ?>

                         </div>
                     </div>

                     <div class="form-group">
                        <?= Html::label('Pendidikan Ibu', 'select_pendidikan_i') ?>
                        <?= Select2::widget(
                            [
                                'id' => 'select_pendidikan_i',
                                'name' => 'select_pendidikan_i',
                                'data' => Pendidikan::getList(),
                                'options' => [
                                    'placeholder' => '-Pilih Pendidikan-',
                                ],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]);
                            ?>
                        </div>

                        <?= $form->field($model, 'pendidikan_i')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                        <div class="form-group">
                            <?= Html::label('Pekerjaan Ibu', 'select_pekerjaan_i') ?>
                            <?= Select2::widget(
                                [
                                    'id' => 'select_pekerjaan_i',
                                    'name' => 'select_pekerjaan_i',
                                    'data' => Pekerjaan::getList(),
                                    'options' => [
                                        'placeholder' => '-Pilih Pekerjaan-',
                                    ],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]);
                                ?>
                            </div>

                            <?= $form->field($model, 'pekerjaan_i')->hiddenInput(['maxlength' => true, 'placeholder' => 'Lainnya'])->label(false) ?>

                            <?= $form->field($model, 'penghasilan_i')->widget(NumberControl::classname(), [
                                'data' => 'number-decimal',
                                'options' => ['placeholder' => 'Perbulan'],
                        // 'options' => $saveOptions,
                                'maskedInputOptions' => [
                                    'digits' => 0,
                                    'alias' => 'numeric',
                                    'groupSeparator' => ',',
                                    'autoGroup' => true,
                                    'autoUnmask' => true,
                                    'unmaskAsNumber' => true,
                                ],
                            ]); ?>

                            <?= $form->field($model, 'alamat_i')->textarea(['rows' => 6, 'placeholder' => 'Jl. Japos Raya, No.10, Tangerang Selatan']) ?>

                            <?= $form->field($model, 'hp_i')->textInput(['maxlength' => true, 'placeholder' => 'Harus berupa angka']) ?>

                        </div>

                        <div class='col-xs-12 col-sm-12 col-md-4'>

                            <h3><b>C. KEPRIBADIAN ANAK</b></h3>
                            <br>

                            <?= $form->field($model, 'fisik_a')->textInput(['maxlength' => true, 'placeholder' => 'Contoh : Mata Berkedip']) ?>

                            <?= $form->field($model, 'bakat_a')->textInput(['maxlength' => true, 'placeholder' => 'Bermain Bola']) ?>

                            <?= $form->field($model, 'kepribadian_a')->textInput(['maxlength' => true, 'placeholder' => 'Berani']) ?>

                            <div class="row">
                              <div class="col-lg-6">

                                <?= $form->field($model, 'quran_a')->widget(Select2::classname(),
                                    [
                                        'data' => ['Sudah Pernah' => 'Sudah Pernah', 'Belum Pernah' => 'Belum Pernah'],
                                        'options' => [
                                            'placeholder' => '-Belajar Baca Quran-',
                                        ],
                                        'pluginOptions' => [
                                            'allowClear' => true
                                        ],
                                    ]);
                                    ?>
                                </div>

                                <div class="col-lg-6">

                                    <?= $form->field($model, 'buku_a')->widget(Select2::classname(),
                                        [
                                            'data' => ['Iqro' => 'Iqro', 'Qiroati' => 'Qiroati'],
                                            'options' => [
                                                'placeholder' => '-Buku yang Digunakan-',
                                            ],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],
                                        ]);
                                        ?>

                                    </div>
                                </div>

                                <?= $form->field($model, 'jilid_a')->textInput(['maxlength' => true, 'placeholder' => '4 Jilid']) ?>

                                <?php $list = [0 => 'Al-Fatihah', 1 => 'An-Nas', 2 => 'Al-Falaq', 3 => 'Al-Ikhlas']; echo $form->field($model, 'surat_a')->radioList($list); ?>

                                <?= $form->field($model, 'alpabet_a')->widget(Select2::classname(),
                                    [
                                        'data' => ['Ya' => 'Ya', 'Tidak' => 'Tidak'],
                                        'options' => [
                                            'placeholder' => '-Mengenal Huruf Alfabet-',
                                        ],
                                        'pluginOptions' => [
                                            'allowClear' => true
                                        ],
                                    ]);
                                    ?>

                                    <br>
                                    <h3><b>D. KEMAMPUAN ANAK</b></h3>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_1')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_2')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_3')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_4')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_5')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_6')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_7')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_8')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_9')->radioList($list); ?>

                                    <?php $list = [0 => 'Selalu', 1 => 'Sering', 2 => 'Kadang', 3 => 'Tidak Pernah']; echo $form->field($model, 'k_10')->radioList($list); ?>
                                </div>

                                <div class="box-footer">
                                    <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
                                </div>
                                <?php ActiveForm::end(); ?>
                            </div>

                            <script>
                                $('#select_pekerjaan_i').on('change', function(e){
                                    $('#formtk-pekerjaan_i').val($(this).val());
                                    if ($(this).val() == 'Lainya') {
                                        $('#formtk-pekerjaan_i').attr('type','input');
                                        $('#formtk-pekerjaan_i').val('');
                                    } else {
                                        $('#formtk-pekerjaan_i').attr('type','hidden');
                                    }
                                    $('#formtk-pekerjaan_i').focus();
                                });

                                $('#select_pendidikan_i').on('change', function(e){
                                    $('#formtk-pendidikan_i').val($(this).val());
                                    if ($(this).val() == 'Lainya') {
                                        $('#formtk-pendidikan_i').attr('type','input');
                                        $('#formtk-pendidikan_i').val('');
                                    } else {
                                        $('#formtk-pendidikan_i').attr('type','hidden');
                                    }
                                    $('#formtk-pendidikan_i').focus();
                                });

                                $('#select_pendidikan_b').on('change', function(e){
                                    $('#formtk-pendidikan_b').val($(this).val());
                                    if ($(this).val() == 'Lainya') {
                                        $('#formtk-pendidikan_b').attr('type','input');
                                        $('#formtk-pendidikan_b').val('');
                                    } else {
                                        $('#formtk-pendidikan_b').attr('type','hidden');
                                    }
                                    $('#formtk-pendidikan_b').focus();
                                });

                                $('#select_pekerjaan_b').on('change', function(e){
                                    $('#formtk-pekerjaan_b').val($(this).val());
                                    if ($(this).val() == 'Lainya') {
                                        $('#formtk-pekerjaan_b').attr('type','input');
                                        $('#formtk-pekerjaan_b').val('');
                                    } else {
                                        $('#formtk-pekerjaan_b').attr('type','hidden');
                                    }
                                    $('#formtk-pekerjaan_b').focus();
                                });
                            </script>