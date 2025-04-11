<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User SD';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sd-index box box-primary">
    <div class="box-header with-border">
        
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

                // 'id',
                'nama',
                'email:email',
                'telp',
                [
                        'attribute' => 'foto',
                        'format' => 'raw',
                        'contentOptions' => ['style' => 'text-align:center'],
                        'headerOptions' => ['style' => 'text-align:center', 'width' => '20'],
                        'value' => function ($model)
                        {
                            if ($model->foto !== '') {
                                return Html::img('@web/user/' . $model->foto, ['style'=>'height:80px', 'width:100px;']);
                            }
                            else{
                                return '<div align="center"><h1>File tidak ada</h1></div>';
                            }
                        },   
                    ],
                // 'id_kelola',
                // 'foto',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'contentOptions' => ['style' => 'text-align:center;width:80px']
                ],
            ],
        ]); ?>
    </div>
</div>
