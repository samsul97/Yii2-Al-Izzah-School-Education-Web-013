<?php
use yii\helpers\Html;
use app\components\Helper;
error_reporting(0);
?>
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
	<h3 align="center"><b>Formulir Pendaftaran SDIT AL-Izzah</b></h3>
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
		<h3><b>A. Data Calon Wali Murid</b></h3>
		<table cellpadding="1" cellspacing="1" style="left: 30%;">
			<tr>
				<td><h4><b>Bismillahirrahmanirrahim</b></h4></td>
			</tr>
			<tr>
				<td><h4><b>Assalamualaikum Warahmatullah Wabarakatuh</b></h4></td>
			</tr>
			<br>
			<tr>
				<td><p>Yang bertanda tangan di bawah ini : </p></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td> <?= @$model->nama_w ?></td>
			</tr>
			<tr>
				<td>Usia</td>
				<td>:</td>
				<td> <?= @$model->usia_w ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td> <?= @$model->pekerjaan_w ?></td>
			</tr>
			<tr>
				<td>Alamat Rumah</td>
				<td>:</td>
				<td> <?= @$model->alamat_w ?></td>
			</tr>
			<tr>
				<td>Alamat Kantor</td>
				<td>:</td>
				<td> <?= @$model->alamatkantor_w ?></td>
			</tr>
			<br>
			<tr><td><br></td></tr>
			<tr>
				<td>
					<p>Mengajukan permohonan kepada panitia PCMB SDIT AL-IZZAH untuk dapat menerima anak kandung/asuh/istri*) kami :</p>
				</td>
			</tr>
			<br>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><?= @$model->nm_lengkap_a ?></td>
			</tr>
			<tr>
				<td>Nama Panggilan</td>
				<td>:</td>
				<td><?= @$model->panggilan_a ?></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td><?= @$model->tmptlahir_a ?></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td><?= @$model->tgllahir_a ?></td>
			</tr>
			<br>
			<tr>
				<td>
					<p>Sebagai Murid SDIT AL-IZZAH kelas VII/VIII/IX*)</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>Demikianlah permohonan ini, atas perhatian yang diberikan kami mengucapkan terima kasih.</p>
				</td>
			</tr>
			<br>
			<tr>
				<td>
					<h4><b>Wassalamualaikum Warahmatullah Wabarakatuh</b></h4>
				</td>
			</tr>
		</table>
		<br>
		<table align="left" width="100%">
			<tr>
				<td style="text-align: left;">Pondok Aren, <?= date('j F Y'); ?><br>Yang bertanda tangan di bawah ini</td>
			</tr>
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
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<h3><b>B. Data Calon Peserta Didik</b></h3>
		<table cellpadding="1" cellspacing="1" style="left: 30%;">
			<tr>
				<td>Nama Lengkap Calon Peserta Didik</td>
				<td>:</td>
				<td> <?= @$model->lengkap_c ?></td>
			</tr>
			<tr>
				<td>Panggilan</td>
				<td>:</td>
				<td> <?= @$model->panggilan_c ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td> <?= @$model->jk->jk ?></td>
			</tr>
			<tr>
				<td>Tempat/Tanggal Lahir</td>
				<td>:</td>
				<td> <?= @$model->tmptlahir_c ?></td>
			</tr>
			<tr>
				<td>Tempat/Tanggal Lahir</td>
				<td>:</td>
				<td> <?= @$model->tgllahir_c ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td> <?= @$model->agama->nama ?></td>
			</tr>
			<tr>
				<td>Kebutuhan Khusus </td>
				<td>:</td>
				<td> <?= @$model->id_khusus_c ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td> <?= @$model->alamat_c ?></td>
			</tr>
			<tr>
				<td>Jenis Tinggal</td>
				<td>:</td>
				<td> <?= @$model->id_jenis_tnggl ?></td>
			</tr>
			<tr>
				<td>Transport</td>
				<td>:</td>
				<td> <?= @$model->id_transport_c ?></td>
			</tr>
			<tr>
				<td>Telp/HP</td>
				<td>:</td>
				<td> <?= @$model->no_c ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td> <?= @$model->email_c ?></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td>
					<b><p>Identitas Orang Tua/Wali</p></b>
				</td>
			</tr>
			<br>
			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td> <?= @$model->nama_b ?></td>
			</tr>
			<tr>
				<td>Tahun Lahir</td>
				<td>:</td>
				<td> <?= @$model->thnlahir_b ?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td> <?= @$model->id_pendidikan_b ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td> <?= @$model->id_pekerjaan_b ?></td>
			</tr>
			<tr>
				<td>Penghasilan Bulanan</td>
				<td>:</td>
				<td> <?= @$model->id_penghasilan_b ?></td>
			</tr>
			<tr>
				<td>Kebutuhan Khusus</td>
				<td>:</td>
				<td> <?= @$model->id_khusus_b ?></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td> <?= @$model->nama_i ?></td>
			</tr>
			<tr>
				<td>Tempat/Tanggal Lahir</td>
				<td>:</td>
				<td> <?= @$model->thnlahir_i ?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td> <?= @$model->id_pendidikan_i ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td> <?= @$model->id_pekerjaan_i ?></td>
			</tr>
			<tr>
				<td>Penghasilan Bulanan</td>
				<td>:</td>
				<td> <?= @$model->id_penghasilan_i ?></td>
			</tr>
			<tr>
				<td>Kebutuhan Khusus</td>
				<td>:</td>
				<td> <?= @$model->id_khusus_i ?></td>
			</tr>

			<tr>
				<td>Nama Wali</td>
				<td>:</td>
				<td> <?= @$model->nama_wl ?></td>
			</tr>
			<tr>
				<td>Tempat/Tanggal Lahir</td>
				<td>:</td>
				<td> <?= @$model->thnlahir_w ?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td> <?= @$model->id_pendidikan_wl ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td> <?= @$model->id_pekerjaan_wl ?></td>
			</tr>
			<tr>
				<td>Penghasilan Bulanan</td>
				<td>:</td>
				<td> <?= @$model->id_penghasilan_wl ?></td>
			</tr>
			<h3><b>Data Calon Peserta Didik</b></h3>
			<tr><td><br></td>></tr>
		</table>
		<br>
		<h3><b>C. Data Periodik Siswa</b></h3>
		<table cellpadding="1" cellspacing="1" style="left: 30%;">
			<tr>
				<td>Tinggi Anak</td>
				<td>:</td>
				<td> <?= @$model->tinggi_a. ' Centimeter' ?></td>
			</tr>
			<tr>
				<td>Berat Anak</td>
				<td>:</td>
				<td> <?= @$model->berat_a. ' Kilogram' ?></td>
			</tr>
			<tr>
				<td>Jarak dari Rumah ke Sekolah</td>
				<td>:</td>
				<td> <?= @$model->jarak_a. ' Meter' ?></td>
			</tr>
			<tr>
				<td>Waktu Tempuh dari Rumah ke Sekolah</td>
				<td>:</td>
				<td> <?= @$model->waktu_tempuh. ' Menit' ?></td>
			</tr>
			<tr>
				<td>Jumlah Saudara Kandung</td>
				<td>:</td>
				<td> <?= @$model->saudara_a. ' Saudara' ?></td>
			</tr>
			<tr><td></td></tr>
			<br>
			<tr><td><h3><b>D. Kemandirian</b></h3></td></tr>
			<tr>
				<td>Setiap Hari Libur Terpisah dari Orang Tua</td>
				<td>:</td>
				<td> <?= @$model->kem_1 ?></td>
			</tr>
			<tr>
				<td>Bangun Tidur Sendiri</td>
				<td>:</td>
				<td> <?= @$model->kem_2 ?></td>
			</tr>
			<tr>
				<td>Merapikan Tempat Tidur Sendiri</td>
				<td>:</td>
				<td> <?= @$model->kem_3 ?></td>
			</tr>
			<tr>
				<td>Mandi Sendiri</td>
				<td>:</td>
				<td> <?= @$model->kem_4 ?></td>
			</tr>
			<tr>
				<td>Makan Sendiri</td>
				<td>:</td>
				<td> <?= @$model->kem_5 ?></td>
			</tr>
			<tr>
				<td>Buang Air Besar/Kecil dan Menyucikanya Sendiri</td>
				<td>:</td>
				<td> <?= @$model->kem_6 ?></td>
			</tr>
			<tr>
				<td>Memakai Pakaian Sendiri</td>
				<td>:</td>
				<td> <?= @$model->kem_7 ?></td>
			</tr>
			<tr>
				<td>Menyiapkan Peralatan Sekolah Sendiri</td>
				<td>:</td>
				<td> <?= @$model->kem_8 ?></td>
			</tr>
			<tr>
				<td>Belajar di Rumah Selalu di Tunggu</td>
				<td>:</td>
				<td> <?= @$model->kem_9 ?></td>
			</tr>
			<tr>
				<td>Sholat/Ngaji Tanpa di Suruh</td>
				<td>:</td>
				<td> <?= @$model->kem_10 ?></td>
			</tr>
			<tr>
				<td>Suka Membantu Pekerjaan Ayah/Ibu</td>
				<td>:</td>
				<td> <?= @$model->kem_11 ?></td>
			</tr>
			<tr>
				<td>Siapakah Yang Sering Membantu Jika Tidak Dilakukan Sendiri?</td>
				<td>:</td>
				<td> <?= @$model->kem_12 ?></td>
			</tr>
			<br>
		<h3><b>D. Sosialisasi Emosi dan Psikologi</b></h3>
			<tr>
				<td>Ayah</td>
				<td>:</td>
				<td> <?= @$model->sos1 ?></td>
			</tr>
			<tr>
				<td>Bangun Tidur Sendiri</td>
				<td>:</td>
				<td> <?= @$model->sos2 ?></td>
			</tr>
			<tr>
				<td>Merapikan Tempat Tidur Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getSosa() ?></td>
			</tr>
			<tr>
				<td>Mandi Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getSosb() ?></td>
			</tr>
			<tr>
				<td>Makan Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getSosc() ?></td>
			</tr>
			<tr>
				<td>Buang Air Besar/Kecil dan Menyucikanya Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getSosd() ?></td>
			</tr>
			<tr>
				<td>Memakai Pakaian Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getSose() ?></td>
			</tr>
			<tr>
				<td>Menyiapkan Peralatan Sekolah Sendiri</td>
				<td>:</td>
				<td> <?= @$model->getSosf() ?></td>
			</tr>
			<tr>
				<td>Belajar di Rumah Selalu di Tunggu</td>
				<td>:</td>
				<td> <?= @$model->getSosg() ?></td>
			</tr>
			<tr>
				<td>Pernah Mengikuti Test Psikologi?</td>
				<td>:</td>
				<td> <?= @$model->getSosh() ?></td>
			</tr>
			<tr>
				<td>Intelegensi Berfungsi untuk Taraf (Normal/Sedang/Tinggi)</td>
				<td>:</td>
				<td> <?= @$model->getSosi() ?></td>
			</tr>
			<tr><td></td></tr>
			<br>
			<tr><td><h3><b>E. Kepribadian</b></h3></td></tr>
			<tr>
				<td>Kepribadian</td>
				<td>:</td>
				<td> <?= @$model->getKepribadian() ?></td>
			</tr>
			<tr><td></td></tr>
			<br>
			<tr><td><h3><b>F. Kesenangan</b></h3></td></tr>
			<tr>
				<td>Orang yang Disenangi</td>
				<td>:</td>
				<td> <?= @$model->kes1 ?></td>
			</tr>
			<tr>
				<td>Benda yang Disenangi</td>
				<td>:</td>
				<td> <?= @$model->kes2 ?></td>
			</tr>
			<tr>
				<td>Hewan yang Disenangi</td>
				<td>:</td>
				<td> <?= @$model->kes3 ?></td>
			</tr>
			<tr>
				<td>Jenis Mainan yang Disenangi</td>
				<td>:</td>
				<td> <?= @$model->kes4 ?></td>
			</tr>
			<tr>
				<td>Pelajaran yang Disenangi</td>
				<td>:</td>
				<td> <?= @$model->kes5 ?></td>
			</tr>
			<tr>
				<td>Pekerjaan yang Disenangi</td>
				<td>:</td>
				<td> <?= @$model->kes6 ?></td>
			</tr>
			<tr>
				<td>Acara TV yang Disenangi</td>
				<td>:</td>
				<td> <?= @$model->kes7 ?></td>
			</tr>
			<tr><td></td></tr>
			<br>
			<tr><td><h3><b>G. Frekuensi</b></h3></td></tr>
			<tr>
				<td>Sekolah/Belajar</td>
				<td>:</td>
				<td> <?= @$model->fre1. ' %' ?></td>
			</tr>
			<tr>
				<td>Tidur/Istirahat</td>
				<td>:</td>
				<td> <?= @$model->fre2. ' %' ?></td>
			</tr>
			<tr>
				<td>Bermain</td>
				<td>:</td>
				<td> <?= @$model->fre3. ' %' ?></td>
			</tr>
			<tr>
				<td>Nonton Televisi</td>
				<td>:</td>
				<td> <?= @$model->fre4. ' %' ?></td>
			</tr>
			<tr><td></td></tr>
			<br>
			<tr><td><h3><b>H. Asal Sekolah Calon Murid</b></h3></td></tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td> <?= @$model->as1 ?></td>
			</tr>
			<tr>
				<td>Nama Sekolah</td>
				<td>:</td>
				<td> <?= @$model->as2 ?></td>
			</tr>
			<tr>
				<td>Lama Belajar</td>
				<td>:</td>
				<td> <?= @$model->as3 ?></td>
			</tr>
			<tr>
				<td>Alamat Sekolah</td>
				<td>:</td>
				<td> <?= @$model->as4 ?></td>
			</tr>
			<tr>
				<td>Tgl.No.STTB</td>
				<td>:</td>
				<td> <?= @$model->as5 ?></td>
			</tr>
			<tr>
				<td>Tanggal Pindah Sekolah</td>
				<td>:</td>
				<td> <?= @$model->as6 ?></td>
			</tr>
			<tr>
				<td>Dari Kelas</td>
				<td>:</td>
				<td> <?= @$model->as7 ?></td>
			</tr>
			<tr>
				<td>Prestasi yang pernah di raih di Sekolah</td>
				<td>:</td>
				<td> <?= @$model->as8 ?></td>
			</tr>
			<tr>
				<td>Prestasi Luar Sekolah</td>
				<td>:</td>
				<td> <?= @$model->as9 ?></td>
			</tr>
			<tr><td></td></tr>
			<br>
			<tr><td><h3><b>I. Keterangan Orang Tua/Wali Murid</b></h3></td></tr>
			<tr>
				<td>Apa latar belakang dan harapan Bapak/Ibu Memasukkan anak SDIT AL-IZZAH?</td>
				<td>:</td>
				<td> <?= @$model->ket1 ?></td>
			</tr>
			<tr>
				<td>Setelah anak Bapak/Ibu diterima, kontribusi apa yang akan diberikan untuk kemajuan sekolah ini?</td>
				<td>:</td>
				<td> <?= @$model->ket2 ?></td>
			</tr>
			<tr>
				<td>Sejak kapan mendapatkan informasi tentang SDIT AL-IZZAH?</td>
				<td>:</td>
				<td> <?= @$model->ket3 ?></td>
			</tr>
			<tr>
				<td>Dari mana Anda mendapatkan informasi SDIT AL-IZZAH?</td>
				<td>:</td>
				<td> <?= @$model->getKeterangan4() ?></td>
			</tr>
			<tr><td><br></td>></tr>
		</table>
		<br>
		<tr><td></td></tr>
		<tr><td><p>Demikian keterangan yang dibuat dengan sejujurnya tentang diri anak kami,  semoga menjadi bahan rujukan dalam kelanjutan pembinaan di sekolah ini.</p></td></tr>
		<br>
		<tr><td></td></tr>
		<tr><td><p>Diisi dengan sejujurnya di..............................................tanggal <?= date('j F Y'); ?></p></td></tr>
		<br>
		<tr><td></td></tr>
		<tr><td><p>Orang tua/wali................................................... Tanda tangan..............................................</p></td></tr>
	<?php } ?>
</body>
