<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;
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
/* @var $this yii\web\View */
/* @var $searchModel app\models\FormSdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pendaftaran SD';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-sd-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Export Excel <i class="fa fa-file-excel-o"></i>', ['form-sd/export-excel'], ['class' => 'btn btn-success']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'header' => 'No',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'contentOptions' => ['style' => 'text-align:center']
                ],
                [
                    'class' => 'kartik\grid\ExpandRowColumn',
                    'expandAllTitle' => 'Expand all',
                    'collapseTitle' => 'Collapse all',
                    'expandIcon'=>'<span class="glyphicon glyphicon-expand"></span>',
                    'value' => function ($model, $key, $index, $column) {
                        return GridView::ROW_COLLAPSED;
                    },
                    'detail'=>function ($model, $key, $index, $column) {
                        return Yii::$app->controller->renderPartial('_detail.php', ['model'=>$model]);
                    },
                ],
                // 'id',
                'no_daftar',
                [
                    'attribute' => 'id_thn',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'filter' => Tahun::getList(),
                    'contentOptions' => ['style' =>'text-align:center;'],
                    'value' => function ($data) {
                        $model = Tahun::findOne(['id' => $data->id_thn]);
                        return $model->nama;
                    }
                ],
                // 'nama_w',
                // 'usia_w',
                // 'pekerjaan_w',
                // 'alamat_w:ntext',
                // 'alamatkantor_w:ntext',
                // 'nm_lengkap_a',
                // 'panggilan_a',
                // 'tll_a',
                // 'id_kelas',
                'lengkap_c',
                // 'panggilan_c',
                [
                    'attribute' => 'id_jk_c',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'filter' => Jk::getList(),
                    'contentOptions' => ['style' =>'text-align:center;'],
                    'value' => function ($data) {
                        $model = Jk::findOne(['id' => $data->id_jk_c]);
                        return $model->jk;
                    }
                ],
                // 'id_jk_c',
                // 'ttl_c',
                // 'id_agama_c',
                // [
                //     'attribute' => 'id_agama_c',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Agama::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Agama::findOne(['id' => $data->id_agama_c]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_khusus_c',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Khusus::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Khusus::findOne(['id' => $data->id_khusus_c]);
                //         return $model->nama;
                //     }
                // ],
                // // 'id_khusus_c',
                // // 'alamat_c:ntext',
                // [
                //     'attribute' => 'id_jenis_tnggl',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => JenisTinggal::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = JenisTinggal::findOne(['id' => $data->id_jenis_tnggl]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_transport_c',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Transport::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Transport::findOne(['id' => $data->id_transport_c]);
                //         return $model->nama;
                //     }
                // ],
                // 'id_jenis_tnggl',
                // 'id_transport_c',
                // 'no_c',
                'email_c:email',
                'nama_b',
                // 'thnlahir_b',
                // [
                //     'attribute' => 'id_pendidikan_b',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Pendidikan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Pendidikan::findOne(['id' => $data->id_pendidikan_b]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_pekerjaan_b',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Pekerjaan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Pekerjaan::findOne(['id' => $data->id_pekerjaan_b]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_penghasilan_b',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Penghasilan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Penghasilan::findOne(['id' => $data->id_penghasilan_b]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_khusus_b',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Khusus::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Khusus::findOne(['id' => $data->id_khusus_b]);
                //         return $model->nama;
                //     }
                // ],
                // 'id_pendidikan_b',
                // 'id_pekerjaan_b',
                'id_penghasilan_b',
                // 'id_khusus_b',
                // 'nama_i',
                // 'thnlahir_i',
                // [
                //     'attribute' => 'id_pendidikan_i',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Pendidikan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Pendidikan::findOne(['id' => $data->id_pendidikan_i]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_pekerjaan_i',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Pekerjaan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Pekerjaan::findOne(['id' => $data->id_pekerjaan_i]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_penghasilan_i',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Penghasilan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Penghasilan::findOne(['id' => $data->id_penghasilan_i]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_khusus_i',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Khusus::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Khusus::findOne(['id' => $data->id_khusus_i]);
                //         return $model->nama;
                //     }
                // ],
                // 'pendidikan_i',
                // 'pekerjaan_i',
                // 'penghasilan_i',
                // 'id_khusus_i',
                // 'nama_wl',
                // 'thnlahir_w',
                // [
                //     'attribute' => 'id_pendidikan_wl',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Pendidikan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Pendidikan::findOne(['id' => $data->id_pendidikan_wl]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_pekerjaan_wl',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Pekerjaan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Pekerjaan::findOne(['id' => $data->id_pekerjaan_wl]);
                //         return $model->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'id_penghasilan_wl',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Penghasilan::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Penghasilan::findOne(['id' => $data->id_penghasilan_wl]);
                //         return $model->nama;
                //     }
                // ],
                // 'pendidikan_wl',
                // 'pekerjaan_wl',
                // 'penghasilan_wl',
                // 'tinggi_a',
                // [
                //     'attribute' => 'tinggi_a',
                //     'value' => function ($model) {
                //         return $model->tinggi_a. ' CM';
                //     },
                // ],
                // // 'berat_a',
                // [
                //     'attribute' => 'berat_a',
                //     'value' => function ($model) {
                //         return $model->fre1. ' KG';
                //     },
                // ],
                // // 'jarak_a',
                // [
                //     'attribute' => 'jarak_a',
                //     'value' => function ($model) {
                //         return $model->jarak_a. ' Meter';
                //     },
                // ],
                // // 'waktu_tempuh',
                // [
                //     'attribute' => 'berat_a',
                //     'value' => function ($model) {
                //         return $model->waktu_tempuh. ' Menit';
                //     },
                // ],
                // // 'saudara_a',
                // [
                //     'attribute' => 'saudara_a',
                //     'value' => function ($model) {
                //         return $model->saudara_a. ' Saudara';
                //     },
                // ],
                // [
                //     'attribute' => 'kem_1',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_2',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_3',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_4',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_5',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_6',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_7',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_8',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_9',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],[
                //     'attribute' => 'kem_10',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_11',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // [
                //     'attribute' => 'kem_12',
                //     'format' => 'raw',
                //     'headerOptions' => ['style' => 'text-align:center'],
                //     'filter' => Question::getList(),
                //     'contentOptions' => ['style' =>'text-align:center;'],
                //     'value' => function ($data) {
                //         $model = Question::findOne(['id' => $data->id_jk_c]);
                //         return $model->nama;
                //             // return @$data->bebanminimal->nama;
                //     }
                // ],
                // 'kem_1',
                // 'kem_2',
                // 'kem_3',
                // 'kem_4',
                // 'kem_5',
                // 'kem_6',
                // 'kem_7',
                // 'kem_8',
                // 'kem_9',
                // 'kem_10',
                // 'kem_11',
                // 'kem_12',
                // 'sos1',
                // 'sos2',
                // [
                //     'attribute' => 'sosa',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],
                // [
                //     'attribute' => 'sosb',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],
                // [
                //     'attribute' => 'sosc',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],
                // [
                //     'attribute' => 'sosd',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],
                // [
                //     'attribute' => 'sose',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],
                // [
                //     'attribute' => 'sosf',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],
                // [
                //     'attribute' => 'sosg',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],
                // [
                //     'attribute' => 'sosh',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],
                // [
                //     'attribute' => 'sosi',
                //     'value' => function ($model) {
                //         if ($model->sosa == 0) {
                //             return "Baik";
                //         };
                //         if ($model->sosa == 1) {
                //             return "Cukup";
                //         };
                //         if ($model->sosa == 2) {
                //             return "Kurang";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Baik',
                //         1 => 'Cukup',
                //         2 => 'Kurang',
                //     ],
                // ],

                // 'sosa',
                // 'sosb',
                // 'sosc',
                // 'sosd',
                // 'sose',
                // 'sosf',
                // 'sosg',
                // 'sosh',
                // 'sosi',
                // [
                //     'attribute' => 'kep',
                //     'value' => function ($model) {
                //         if ($model->kep == 0) {
                //             return "Harus Disuruh";
                //         };
                //         if ($model->kep == 1) {
                //             return "Penakut";
                //         };
                //         if ($model->kep == 2) {
                //             return "Pendiam";
                //         };
                //         if ($model->kep == 3) {
                //             return "Pemberani";
                //         };
                //         if ($model->kep == 4) {
                //             return "Perasa";
                //         };
                //         if ($model->kep == 5) {
                //             return "Banyak Bicara";
                //         };
                //         if ($model->kep == 6) {
                //             return "Emosional";
                //         };
                //         if ($model->kep == 7) {
                //             return "Tak Mau Mengalah";
                //         };
                //         if ($model->kep == 8) {
                //             return "Pemalu";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Harus Disuruh',
                //         1 => 'Penakut',
                //         2 => 'Pendiam',
                //         3 => 'Pemberani',
                //         4 => 'Perasa',
                //         4 => 'Banyak Bicara',
                //         4 => 'Emosional',
                //         4 => 'Tak Mau Mengalah',
                //         4 => 'Pemalu',
                //     ],
                // ],
                // // 'kep',
                // 'kes1',
                // 'kes2',
                // 'kes3',
                // 'kes4',
                // 'kes5',
                // 'kes6',
                // 'kes7',
                // [
                //     'attribute' => 'fre1',
                //     'value' => function ($model) {
                //         return $model->fre1. '%';
                //     },
                // ],
                // // 'fre1',
                // [
                //     'attribute' => 'fre2',
                //     'value' => function ($model) {
                //         return $model->fre1. '%';
                //     },
                // ],
                // [
                //     'attribute' => 'fre3',
                //     'value' => function ($model) {
                //         return $model->fre1. '%';
                //     },
                // ],
                // [
                //     'attribute' => 'fre4',
                //     'value' => function ($model) {
                //         return $model->fre1. '%';
                //     },
                // ],
                // 'as1',
                // 'as2',
                // 'as3',
                // 'as4',
                // 'as5',
                // 'as6',
                // 'as7',
                // 'as8',
                // 'as9',
                // 'as10',
                // 'ket1',
                // 'ket2',
                // 'ket3',
                // 'ket4',

                // [
                //     'attribute' => 'ket4',
                //     'value' => function ($model) {
                //         if ($model->ket4 == 0) {
                //             return "Teman/Saudara";
                //         };
                //         if ($model->ket4 == 1) {
                //             return "Brosur";
                //         };
                //         if ($model->ket4 == 2) {
                //             return "Spanduk";
                //         };
                //     },
                //     'filter'=>[

                //         0 => 'Teman/Saudara',
                //         1 => 'Brosur',
                //         2 => 'Spanduk',
                //     ],
                // ],
                // 'jenis_prestasi',
                // 'tingkat_prestasi',
                // 'nm_prestasi',
                // 'thn_prestasi',
                // 'penyelenggara_prestasi',
                // 'jenis_beasiswa',
                // 'ket_beasiswa',
                // 'thn_m_beasiswa',
                // 'thn_s_beasiswa',
                // 'id_jenis_imun',
                // 'usia_imun',
                // 'ket_imun',
                // 'per_1',
                // 'per2',
                // 'per3',
                // 'per4',
                // 'per5',
                // 'per6',
                // 'id_jns_penyakit',
                // 'usia_penyakit',
                // 'lama_penyakit',
                // 'obat_penyakit',
                // 'status_penyakit',
                // 'id_jns_makanan',
                // 'usia_makanan',
                // 'akibat_makanan',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{delete} {view}',
                    'contentOptions' => ['style' => 'text-align:center;width:80px']
                ],
            ],
        ]); ?>
    </div>
</div>
