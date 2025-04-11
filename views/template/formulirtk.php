<?php
use yii\helpers\Html;
use app\components\Helper;
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORMULIR PENDAFTARAN TKIT AL-IZZAH</title>
<link rel="shortcut icon" type="image/jpg" href="images/original.jpg">
</head>

<body>
	<!-- KOP SURAT -->
	<table align="center">
		<tr>
			<td width="25" align="left"><img src="images/tk.jpg" width="20%" height="20%"></td>
			<td align="center" style="font-family: Georgia;">
				<h2 style="font-style: bold;">SEKOLAH QURAN TERPADU AL-IZZAH<br></h2>
				<h2>KECAMATAN PONDOK AREN</h2>
				<h2>TANGERANG SELATAN</h2>
				<p>Alamat: Jl. Pondok Belimbing No.88 Kel. Jurang Mangu Barat, Kec. Pondok Aren, Kota Tangerang Selatan, Banten 15223. </p>
			</td>
		</tr>
	</table>
	<hr size="100%">

	<!-- ISI -->
	<!-- <br> -->
	<h3 align="center"><b>Formulir Pendaftaran TKIT AL-Izzah</b></h3>
	<br>
	<?php { ?>
		<table cellpadding="1" cellspacing="1" style="left: 30%;">
			<tr>
				<td><b>Nomor Pendaftaran</b></td>
				<td>:</td>
				<td> <?= @$model->no_daftar ?></td>
			</tr>
			<tr>
				<td><b>Tanggal Pendaftaran</b></td>
				<td>:</td>
				<td><?= @$model->tgl_daftar ?></td>
			</tr>
			<tr>
				<td><b>Tahun Pelajaran</b></td>
				<td>:</td>
				<td> <?= @$model->tahun->nama ?></td>
			</tr>
		</table>
		<br>
		<h3><b>A. Anak</b></h3>
		<table cellpadding="1" cellspacing="1" style="left: 30%;">
			<tr>
				<td>Nomor Pendaftaran</td>
				<td>:</td>
				<td> <?= @$model->no_daftar ?></td>
			</tr>
			<tr>
				<td>Tanggal Pendaftaran</td>
				<td>:</td>
				<td> <?= @$model->tgl_daftar ?></td>
			</tr>
			<tr>
				<td>Tahun Pelajaran</td>
				<td>:</td>
				<td> <?= @$model->tahun->nama ?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td> <?= @$model->nama_a ?></td>
			</tr>
			<tr>
				<td>Nama Panggilan</td>
				<td>:</td>
				<td> <?= @$model->pnggil_a ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td> <?= @$model->tmptlahir_a ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td> <?= @$model->tgllahir_a ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td> <?= @$model->jk->jk ?></td>
			</tr>
			<tr>
				<td>Jumlah Saudara Kandung</td>
				<td>:</td>
				<td> <?= @$model->saudara_a ?></td>
			</tr>
			<tr>
				<td>Tinggi Anak</td>
				<td>:</td>
				<td> <?= @$model->tnggi_a. ' CM' ?></td>
			</tr>
			<tr>
				<td>Berat Anak</td>
				<td>:</td>
				<td> <?= @$model->berat_a. ' KG' ?></td>
			</tr>
			<tr>
				<td>Penyakit Anak</td>
				<td>:</td>
				<td> <?= @$model->penyakit_a ?></td>
			</tr>
			<tr>
				<td>Imun Anak</td>
				<td>:</td>
				<td> <?= @$model->imun_a ?></td>
			</tr>
		</table>
		<br>
		<br>
		<h3><b>A. Orang Tua/Wali</b></h3>
		<table cellpadding="1" cellspacing="1" style="left: 30%;">
			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td> <?= @$model->nama_b ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir Ayah</td>
				<td>:</td>
				<td> <?= @$model->tmptlahir_b ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir Ayah</td>
				<td>:</td>
				<td> <?= @$model->tgllahir_b ?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td> <?= @$model->pendidikan_b ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td> <?= @$model->pekerjaan_b ?></td>
			</tr>
			<tr>
				<td>Penghasilan</td>
				<td>:</td>
				<td> <?= @$model->penghasilan_b ?></td>
			</tr>
			<tr>
				<td>Alamat </td>
				<td>:</td>
				<td> <?= @$model->alamat_b ?></td>
			</tr>
			<tr>
				<td>Telp</td>
				<td>:</td>
				<td> <?= @$model->hp_b ?></td>

			</tr>
			<tr><td><br></td>></tr>
			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td> <?= @$model->nama_i ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td> <?= @$model->tmptlahir_i ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir Ibu</td>
				<td>:</td>
				<td> <?= @$model->tgllahir_i ?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td> <?= @$model->pendidikan_i ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td> <?= @$model->pekerjaan_i ?></td>
			</tr>
			<tr>
				<td>Penghasilan</td>
				<td>:</td>
				<td> <?= @$model->penghasilan_i ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td> <?= @$model->alamat_i ?></td>
			</tr>
			<tr>
				<td>Telp</td>
				<td>:</td>
				<td> <?= @$model->penghasilan_i ?></td>
			</tr>
		</table>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<table>
			<tr>
				<td width="25" align="left"><img src="images/tk.jpg" width="20%" height="20%"></td>
				<td align="center" style="font-family: Georgia;">
					<h2 style="font-style: bold;">SEKOLAH QURAN TERPADU AL-IZZAH<br></h2>
					<h2>KECAMATAN PONDOK AREN</h2>
					<h2>TANGERANG SELATAN</h2>
					<p>Alamat: Jl. Pondok Belimbing No.88 Kel. Jurang Mangu Barat, Kec. Pondok Aren, Kota Tangerang Selatan, Banten 15223. </p>
				</td>
			</tr>
		</table>
		<hr size="100%">
		<h3><b>A. Kemampuan Anak</b></h3>
		<table cellpadding="1" cellspacing="1" style="left: 30%;">
			<tr>
				<td>Ciri fisik yang Menonjol</td>
				<td>:</td>
				<td> <?= @$model->fisik_a ?></td>
			</tr>
			<tr>
				<td>Bakat Khusus yang Menonjol</td>
				<td>:</td>
				<td> <?= @$model->bakat_a ?></td>
			</tr>
			<tr>
				<td>Kepribadian yang Menonjol</td>
				<td>:</td>
				<td> <?= @$model->kepribadian_a ?></td>
			</tr>
			<tr>
				<td>Belajar Baca Quran</td>
				<td>:</td>
				<td> <?= @$model->quran_a ?></td>
			</tr>
			<tr>
				<td>Buku yang Digunakan</td>
				<td>:</td>
				<td> <?= @$model->buku_a ?></td>
			</tr>
			<tr>
				<td>Pencapaian Jilid</td>
				<td>:</td>
				<td> <?= @$model->jilid_a ?></td>
			</tr>
			<tr>
				<td>Surat Pendek yang di Hafal</td>
				<td>:</td>
				<td> <?= @$model->getSurat()?></td>
			</tr>
			<tr>
				<td>Mengenal Huruf Alphabet</td>
				<td>:</td>
				<td> <?= @$model->alpabet_a ?></td>
			</tr>
			<tr>
				<td>Bangun Tidur Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan1() ?></td>
			</tr>
			<tr>
				<td>Membersihkan Tempat Tidur Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan2() ?></td>
			</tr>
			<tr>
				<td>Mandi Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan3() ?></td>
			</tr>
			<tr>
				<td>Gosok Gigi Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan4() ?></td>
			</tr>
			<tr>
				<td>Mengenakan Pakaian Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan5() ?></td>
			</tr>
			<tr>
				<td>Memakai Sepatu Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan6() ?></td>
			</tr>
			<tr>
				<td>Makan Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan7() ?></td>
			</tr>
			<tr>
				<td>Tidur Tidak Ditemani</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan8() ?></td>
			</tr>
			<tr>
				<td>Bermain Kerumah Tetangga</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan9() ?></td>
			</tr>
			<tr>
				<td>Bermain Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getKemampuan10() ?></td>
			</tr>
		</table>
		<br>
		<br>
		<table align="left" width="100%">
			<tr>
				<td style="text-align: left;">Pondok Aren, <?= date('j F Y'); ?><br><br>Yang bertanda tangan di bawah ini</td>
			</tr>

				<!-- <tr>
					<td style="text-align: center;"></td>
					<td style="text-align: center;">Sekdes</td>
				</tr> -->
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<tr>
					<td style="text-align: left;"><b><u>Nama dan tanda tangan orang tua/wali</u></b></td>
				</tr>
			</table>
		<?php } ?>
	</table>
</body>
</html>