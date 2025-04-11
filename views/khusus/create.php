<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Khusus */

$this->title = 'Create Khusus';
$this->params['breadcrumbs'][] = ['label' => 'Khususes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khusus-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
