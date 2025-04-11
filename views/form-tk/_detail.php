<?php 
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\Helper;
?>

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"></h3>
	</div>

	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('fisik_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('bakat_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kepribadian_a') ?>
					</th>					
					<th style="text-align: center">
						<?= $model->getAttributeLabel('quran_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('buku_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('jilid_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('surat_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('alpabet_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_1') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_2') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_3') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_4') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_5') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_6') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_7') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_8') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_9') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('k_10') ?>
					</th>
				</tr>
				<tr>
					<td style="text-align: center;">
						<?= $model->fisik_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->bakat_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kepribadian_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->quran_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->buku_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->jilid_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSurat() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->alpabet_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan1() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan2() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan3() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan4() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan5() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan6() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan7() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan8() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan9() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKemampuan10() ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>