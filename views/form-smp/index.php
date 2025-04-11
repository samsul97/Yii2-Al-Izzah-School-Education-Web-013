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

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormSmpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pendaftaran SMP';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-smp-index box box-primary">
    <div class="box-header with-border">
        
        <?= Html::a('Export Excel <i class="fa fa-file-excel-o"></i>', ['form-smp/export-excel'], ['class' => 'btn btn-success']) ?>
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
                // 'tgl_daftar',
                [
                    'attribute' => 'id_thn',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'filter' => Tahun::getList(),
                    'contentOptions' => ['style' =>'text-align:center;'],
                    'value' => function ($data) {
                        $model = Tahun::findOne(['id' => $data->id_thn]);
                        return $model->nama;
                            // return @$data->bebanminimal->nama;
                    }
                ],
                'nama_w',
                // 'usia_w',
                'pekerjaan_w',
                // 'alamat_w:ntext',
                // 'alamatkantor_w:ntext',
                // 'nm_lengkap_a',
                // 'panggilan_a',
                // 'tll_a',
                // 'id_kelas',
                // 'lengkap_c',
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
                            // return @$data->bebanminimal->nama;
                    }
                ],
                // 'ttl_c',
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
                // 'id_agama_c',
                // 'id_khusus_c',
                // 'alamat_c:ntext',
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
                // 'nama_b',
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
                // 'id_penghasilan_b',
                // 'id_khusus_b',
                // 'nama_i',
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
                // 'id_pendidikan_i',
                // 'id_pekerjaan_i',
                // 'id_penghasilan_i',
                // 'id_khusus_i',
                // 'thnlahir_i',
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
                // 'id_pendidikan_wl',
                // 'id_pekerjaan_wl',
                // 'id_penghasilan_wl',
                // 'tinggi_a',
                // 'berat_a',
                // 'jarak_a',
                // 'waktu_tempuh',
                // 'saudara_a',
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

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{delete} {view}',
                    'contentOptions' => ['style' => 'text-align:center;width:80px']
                ],
            ],
        ]); ?>
    </div>
</div>
