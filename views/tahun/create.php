<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tahun */

$this->title = 'Create Tahun';
$this->params['breadcrumbs'][] = ['label' => 'Tahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
