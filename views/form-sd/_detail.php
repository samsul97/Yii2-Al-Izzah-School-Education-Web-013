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
						<?= $model->getAttributeLabel('nama_w') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('usia_w') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('pekerjaan_w') ?>
					</th>					
					<th style="text-align: center">
						<?= $model->getAttributeLabel('alamat_w') ?>
					</th>
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
						<?= $model->getAttributeLabel('kem_1') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_2') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_3') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_4') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_5') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_6') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_7') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_8') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_9') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_10') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_11') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kem_12') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sos1') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sos2') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sosa') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sosb') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sosc') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sosd') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sose') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sosf') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sosg') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sosh') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('sosi') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kep') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kes1') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kes2') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kes3') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kes4') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kes5') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kes6') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('kes7') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('fre1') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('fre2') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('fre3') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('fre4') ?>
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
					<th style="text-align: center">
						<?= $model->getAttributeLabel('ket1') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('ket2') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('ket3') ?>
					</th>
					<th style="text-align: center">
						<?= $model->getAttributeLabel('ket4') ?>
					</th>
				</tr>
				<tr>
					<td style="text-align: center;">
						<?= $model->nama_w ?>
					</td>
					<td style="text-align: center;">
						<?= $model->usia_w ?>
					</td>
					<td style="text-align: center;">
						<?= $model->pekerjaan_w ?>
					</td>
					<td style="text-align: center;">
						<?= $model->alamat_w ?>
					</td>
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
						<?= $model->kem_1 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_2 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_3 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_4 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_5 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_6 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_7 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_8 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_9 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_10 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_11 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kem_12 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->sos1 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->sos2 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSosa() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSosb() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSosc() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSosd() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSose() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSosf() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSosg() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSosh() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getSosi() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKepribadian() ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kes1 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kes2 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kes3 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kes4 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kes5 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kes6 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->kes7 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->fre1 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->fre2 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->fre3 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->fre4 ?>
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
					<td style="text-align: center;">
						<?= $model->ket1 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->ket2 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->ket3 ?>
					</td>
					<td style="text-align: center;">
						<?= $model->getKeterangan4() ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>