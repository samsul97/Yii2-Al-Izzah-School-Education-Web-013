<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use app\models\Jk;
use app\models\Tahun;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormTkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pendaftaran TK';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-tk-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Export Excel <i class="fa fa-file-excel-o"></i>', ['form-tk/export-excel'], ['class' => 'btn btn-success']) ?>
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
                'nama_a',
                // 'pnggil_a',
                // 'ttl_a',
                // 'id_jk_a',
                [
                    'attribute' => 'id_jk_a',
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'filter' => Jk::getList(),
                    'contentOptions' => ['style' =>'text-align:center;'],
                    'value' => function ($data) {
                        $model = Jk::findOne(['id' => $data->id_jk_a]);
                        return $model->jk;
                            // return @$data->bebanminimal->nama;
                    }
                ],
                // 'saudara_a',
                // 'tnggi_a',
                // 'berat_a',
                // 'penyakit_a',
                // 'imun_a',
                'nama_b',
                // 'ttl_b',
                // 'pendidikan_b',
                'pekerjaan_b',
                // 'penghasilan_b',
                [
                    'attribute' => 'penghasilan_b',
                    'format' => 'raw',
                    'value' => function ($model) {
                        return '<b>Rp. </b>' . number_format($model->penghasilan_b, 2);
                    },
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:left;'],
                ],
                // 'alamat_b:ntext',
                // 'hp_b',
                // 'nama_i',
                // 'ttl_i',
                // 'pendidikan_i',
                // 'pekerjaan_i',
                // 'penghasilan_i',
                // 'alamat_i:ntext',
                // 'hp_i',
                // 'fisik_a',
                // 'bakat_a',
                // 'kepribadian_a',
                // 'id_quran_a',
                // 'id_buku_a',
                // 'jilid_a',
                // 'surat_a',
                // 'id_alpabet_a',
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
                    'attribute' => 'status',
                    'format' => 'raw',
                    'value' => function ($model) {
                        return Html::a('<button class ="btn btn-'. ($model->status == 1 ? 'success' : 'danger') .'"> '. ($model->status == 1 ? '' : 'Belum ') .'Lunas </button>', ['form-tk/edit-status', 'id' => $model->id, 'status' => ($model->status == 1 ? 2 : 1)], ['data' => ['confirm' => 'Apa Anda yakin ingin mengubah status ini?'],]);
                    },
                    'filter'=> [

                        '1' => 'Aktif',
                        '2' => 'Tidak Aktif',
                    ],
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{delete} {view}',
                    'contentOptions' => ['style' => 'text-align:center;width:80px']
                ],
            ],
        ]); ?>
    </div>
</div>
