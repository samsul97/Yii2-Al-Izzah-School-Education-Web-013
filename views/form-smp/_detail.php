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
						<?= $model->getAttributeLabel('tmptlahir_c') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('tgllahir_c') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('id_agama_c') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('id_khusus_c') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('alamat_c') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('id_jenis_tnggl') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('id_transport_c') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('tinggi_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('berat_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('jarak_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('waktu_tempuh') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('saudara_a') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as1') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as2') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as3') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as4') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as5') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as6') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as7') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as8') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('as9') ?>
					</th>
				</tr>
				<tr>
					<td style="text-align: center;">
						<?= $model->tmptlahir_c ?>
					</td>
					<td style="text-align: center;">
						<?= $model->tgllahir_c ?>
					</td>
					<td style="text-align: center;">
						<?= $model->id_agama_c ?>
					</td>
					<td style="text-align: center;">
						<?= $model->id_khusus_c ?>
					</td>
					<td style="text-align: center;">
						<?= $model->alamat_c ?>
					</td>
					<td style="text-align: center;">
						<?= $model->id_jenis_tnggl ?>
					</td>
					<td style="text-align: center;">
						<?= $model->id_transport_c ?>
					</td>
					<td style="text-align: center;">
						<?= $model->tinggi_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->berat_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->jarak_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->waktu_tempuh ?>
					</td>
					<td style="text-align: center;">
						<?= $model->saudara_a ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as1 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as2 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as3 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as4 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as5 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as6 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as7 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as8 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->as9 ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>