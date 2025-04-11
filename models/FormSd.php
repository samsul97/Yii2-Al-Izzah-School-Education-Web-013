<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_sd".
 *
 * @property int $id
 * @property int $no_daftar
 * @property string $tgl_daftar
 * @property int $id_thn
 * @property string $nama_w
 * @property string $usia_w
 * @property string $pekerjaan_w
 * @property string $alamat_w
 * @property string $alamatkantor_w
 * @property string $nm_lengkap_a
 * @property string $panggilan_a
 * @property string $tmptlahir_a
 * @property int $id_kelas
 * @property string $lengkap_c
 * @property string $panggilan_c
 * @property int $id_jk_c
 * @property string $ttl_c
 * @property int $id_agama_c
 * @property int $id_khusus_c
 * @property string $alamat_c
 * @property int $id_jenis_tnggl
 * @property int $id_transport_c
 * @property int $no_c
 * @property string|null $email_c
 * @property string $nama_b
 * @property int $id_pendidikan_b
 * @property int $id_pekerjaan_b
 * @property int $id_penghasilan_b
 * @property int $id_khusus_b
 * @property string $nama_i
 * @property string $pendidikan_i
 * @property string $pekerjaan_i
 * @property string $penghasilan_i
 * @property int $id_khusus_i
 * @property string $thnlahir_b
 * @property string $thnlahir_i
 * @property string $nama_wl
 * @property string $thnlahir_w
 * @property string $pendidikan_wl
 * @property string $pekerjaan_wl
 * @property string $penghasilan_wl
 * @property int $tinggi_a
 * @property int $berat_a
 * @property int $jarak_a
 * @property int $waktu_tempuh
 * @property string $saudara_a
 * @property int $kem_1
 * @property int $kem_2
 * @property int $kem_3
 * @property int $kem_4
 * @property int $kem_5
 * @property int $kem_6
 * @property int $kem_7
 * @property int $kem_8
 * @property int $kem_9
 * @property int $kem_10
 * @property int $kem_11
 * @property int $kem_12
 * @property string $sos1
 * @property string $sos2
 * @property string $sosa
 * @property string $sosb
 * @property string $sosc
 * @property string $sosd
 * @property string $sose
 * @property string $sosf
 * @property string $sosg
 * @property string $sosh
 * @property string $sosi
 * @property string $kep
 * @property string $kes1
 * @property string $kes2
 * @property string $kes3
 * @property string $kes4
 * @property string $kes5
 * @property string $kes6
 * @property string $kes7
 * @property string $fre1
 * @property string $fre2
 * @property string $fre3
 * @property string $fre4
 * @property string $as1
 * @property string $as2
 * @property string $as3
 * @property string $as4
 * @property string $as5
 * @property string $as6
 * @property string $as7
 * @property string $as8
 * @property string $as9
 * @property string $as10
 * @property string $ket1
 * @property string $ket2
 * @property string $ket3
 * @property string $ket4
 * @property string|null $jenis_prestasi
 * @property string|null $tingkat_prestasi
 * @property string|null $nm_prestasi
 * @property string|null $thn_prestasi
 * @property string|null $penyelenggara_prestasi
 * @property string|null $jenis_beasiswa
 * @property string|null $ket_beasiswa
 * @property string|null $thn_m_beasiswa
 * @property string|null $thn_s_beasiswa
 * @property int|null $id_jenis_imun
 * @property string|null $usia_imun
 * @property string|null $ket_imun
 * @property string $per_1
 * @property string $per2
 * @property string $per3
 * @property string $per4
 * @property string $per5
 * @property string $per6
 * @property string $id_jns_penyakit
 * @property string $usia_penyakit
 * @property string $lama_penyakit
 * @property string $obat_penyakit
 * @property string $status_penyakit
 * @property int $id_jns_makanan
 * @property string $usia_makanan
 * @property string $akibat_makanan
 */
class FormSd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'form_sd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_daftar', 'tgl_daftar', 'id_thn', 'nama_w', 'usia_w', 'pekerjaan_w', 'alamat_w', 'nm_lengkap_a', 'email_c', 'panggilan_a', 'tmptlahir_a', 'tgllahir_a', 'lengkap_c', 'panggilan_c', 'id_jk_c', 'tmptlahir_c', 'id_agama_c', 'id_khusus_c', 'alamat_c', 'id_jenis_tnggl', 'id_transport_c', 'no_c', 'nama_b', 'id_pendidikan_b', 'id_pekerjaan_b', 'id_penghasilan_b', 'id_khusus_b', 'nama_i', 'id_pendidikan_i', 'id_pekerjaan_i', 'id_penghasilan_i', 'id_khusus_i', 'thnlahir_b', 'thnlahir_i', 'nama_wl', 'thnlahir_w', 'id_pendidikan_wl', 'id_pekerjaan_wl', 'id_penghasilan_wl', 'tinggi_a', 'berat_a', 'jarak_a', 'waktu_tempuh', 'saudara_a', 'kem_1', 'kem_2', 'kem_3', 'kem_4', 'kem_5', 'kem_6', 'kem_7', 'kem_8', 'kem_9', 'kem_10', 'kem_11', 'kem_12', 'sos1', 'sos2', 'sosa', 'sosb', 'sosc', 'sosd', 'sose', 'sosf', 'sosg', 'sosh', 'sosi', 'kep', 'kes1', 'kes2', 'kes3', 'kes4', 'kes5', 'kes6', 'kes7', 'fre1', 'fre2', 'fre3', 'fre4', 'as1', 'as2', 'as3', 'as4', 'as5', 'as6', 'as7', 'as8', 'as9', 'as10', 'ket1', 'ket2', 'ket3', 'ket4'], 'required', 'message'=> 'Data tidak boleh kosong'],
            [['id_thn', 'id_jk_c', 'id_agama_c', 'as10'], 'integer'],
            [['tgl_daftar', 'tgllahir_a', 'tgllahir_c', 'thnlahir_b', 'thnlahir_i', 'thnlahir_w'], 'safe'],
            [['alamat_w', 'alamatkantor_w', 'alamat_c', 'kem_1', 'kem_2', 'kem_3', 'kem_4', 'kem_5', 'kem_6', 'kem_7', 'kem_8', 'kem_9', 'kem_10', 'kem_11', 'kem_12'], 'string'],
            [['no_daftar', 'nama_w', 'no_c', 'usia_w', 'nm_lengkap_a', 'panggilan_a', 'tmptlahir_a', 'pekerjaan_w', 'id_khusus_c', 'id_pendidikan_b', 'id_pekerjaan_b', 'id_penghasilan_b', 'id_khusus_b', 'id_pendidikan_i', 'id_pekerjaan_i', 'id_penghasilan_i', 'id_pendidikan_wl', 'id_pekerjaan_wl', 'id_penghasilan_wl', 'lengkap_c', 'panggilan_c', 'tmptlahir_c', 'email_c', 'nama_b', 'nama_i', 'id_khusus_i', 'nama_wl', 'saudara_a', 'sos1', 'sos2', 'sosa', 'sosb', 'sosc', 'sosd', 'sose', 'sosf', 'sosg', 'sosh', 'sosi', 'kep', 'kes1', 'kes2', 'kes3', 'kes4', 'kes5', 'kes6', 'kes7', 'fre1', 'fre2', 'fre3', 'fre4', 'as1', 'as2', 'as3', 'as4', 'as5', 'as6', 'as7', 'as8', 'as9', 'ket1', 'ket2', 'ket3', 'ket4', 'id_jenis_tnggl', 'id_transport_c'], 'string', 'max' => 50],
            [['email_c'], 'unique'],
            ['no_c', 'match', 'pattern' => '/((\+[0-9]{6})|0)[-]?[0-9]{7}/', 'message' => 'Hanya dari nomor 0 sampai 9'],
            [['tinggi_a', 'berat_a', 'jarak_a', 'waktu_tempuh', 'saudara_a', 'fre1', 'fre2', 'fre3', 'fre4', 'as5', 'usia_w'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_daftar' => 'No Pendaftaran',
            'tgl_daftar' => 'Tanggal Daftar',
            'id_thn' => 'Tahun Pelajaran',
            'nama_w' => 'Nama Wali',
            'usia_w' => 'Usia Wali',
            'pekerjaan_w' => 'Pekerjaan Wali',
            'alamat_w' => 'Alamat Wali',
            'alamatkantor_w' => 'Alamat Kantor Wali',
            'nm_lengkap_a' => 'Nama Lengkap Anak',
            'panggilan_a' => 'Panggilan Anak',
            'tmptlahir_a' => 'Tempat Lahir Anak',
            'tgllahir_a' => 'Tanggal Lahir Anak',
            // 'id_kelas' => 'Penempatan Kelas Anak',
            'lengkap_c' => 'Nama Lengkap Calon Siswa',
            'panggilan_c' => 'Nama Panggilan',
            'id_jk_c' => 'Jenis Kelamin',
            'tmptlahir_c' => 'Tempat Lahir',
            'tgllahir_c' => 'Tanggal Lahir',
            'id_agama_c' => 'Agama',
            'id_khusus_c' => 'Kebutuhan Khusus',
            'alamat_c' => 'Alamat',
            'id_jenis_tnggl' => 'Jenis Tinggal',
            'id_transport_c' => 'Transport',
            'no_c' => 'No Handphone',
            'email_c' => 'Email',
            'nama_b' => 'Nama Ayah',
            'id_pendidikan_b' => 'Pendidikan Ayah',
            'id_pekerjaan_b' => 'Pekerjaan Ayah',
            'id_penghasilan_b' => 'Penghasilan Ayah',
            'id_khusus_b' => 'Kebutuhan Khusus Ayah',
            'nama_i' => 'Nama Ibu',
            'id_pendidikan_i' => 'Pendidikan Ibu',
            'id_pekerjaan_i' => 'Pekerjaan Ibu',
            'id_penghasilan_i' => 'Penghasilan Ibu',
            'id_khusus_i' => 'Kebutuhan Khusus Ibu',
            'thnlahir_b' => 'Tahun Lahir Ayah',
            'thnlahir_i' => 'Tahun Lahir Ibu',
            'nama_wl' => 'Nama Wali',
            'thnlahir_w' => 'Tahun Lahir Wali',
            'id_pendidikan_wl' => 'Pendidikan Wali',
            'id_pekerjaan_wl' => 'Pekerjaan Wali',
            'id_penghasilan_wl' => 'Penghasilan Wali',
            'tinggi_a' => 'Tinggi Anak',
            'berat_a' => 'Berat Anak',
            'jarak_a' => 'Jarak Tempat Tinggal ke Sekolah',
            'waktu_tempuh' => 'Waktu Tempuh ke Sekolah',
            'saudara_a' => 'Jumlah Saudara Kandung',
            'kem_1' => '1. Setiap Hari Libur Terpisah dari Orang Tua',
            'kem_2' => '2. Bangun Tidur Sendiri',
            'kem_3' => '3. Merapikan Tempat Tidur Sendiri',
            'kem_4' => '4. Mandi Sendiri',
            'kem_5' => '5. Makan Sendiri',
            'kem_6' => '6. Buang Air Besar/Kecil dan Menyucikanya Sendiri',
            'kem_7' => '7. Memakai Pakaian Sendiri',
            'kem_8' => '8. Menyiapkan Peralatan Sekolah Sendiri',
            'kem_9' => '9. Belajar di Rumah Selalu di Tunggu',
            'kem_10' => '10. Sholat/Ngaji Tanpa di Suruh',
            'kem_11' => '11. Suka Membantu Pekerjaan Ayah/Ibu',
            'kem_12' => '12. Siapakah Yang Sering Membantu Jika Tidak Dilakukan Sendiri?',
            'sos1' => 'Pernah Mengikuti Test Psikologi?',
            'sos2' => 'Intelegensi Berfungsi untuk Taraf (Normal/Sedang/Tinggi)',
            'sosa' => 'Ayah',
            'sosb' => 'Ibu',
            'sosc' => 'Kakak',
            'sosd' => 'Adik',
            'sose' => 'Saudara',
            'sosf' => 'Teman',
            'sosg' => 'Lebih Tua',
            'sosh' => 'Lebih Kecil',
            'sosi' => 'Dewasa',
            'kep' => 'Kepribadian',
            'kes1' => 'Orang yang Disenangi',
            'kes2' => 'Benda yang Disenangi',
            'kes3' => 'Hewan yang Disenangi',
            'kes4' => 'Jenis Mainan yang Disenangi',
            'kes5' => 'Pelajaran yang Disenangi',
            'kes6' => 'Pekerjaan yang Disenangi',
            'kes7' => 'Acara TV yang Disenangi',
            'fre1' => 'Sekolah/Belajar?',
            'fre2' => 'Tidur/Istirahat?',
            'fre3' => 'Bermain?',
            'fre4' => 'Nonton Televisi?',
            'as1' => 'Asal Sekolah',
            'as2' => 'Nama Sekolah',
            'as3' => 'Lama Belajar',
            'as4' => 'Alamat Sekolah',
            'as5' => 'Tgl.No.STTB',
            'as6' => 'Tanggal Pindah Sekolah',
            'as7' => 'Dari Kelas',
            'as8' => 'Prestasi yang pernah di raih di Sekolah',
            'as9' => 'Prestasi Luar Sekolah',
            'as10' => 'Diterima di kelas',
            'ket1' => '1. Apa latar belakang dan harapan Bapak/Ibu Memasukkan anak SDIT AL-IZZAH?',
            'ket2' => '2. Setelah anak Bapak/Ibu diterima, kontribusi apa yang akan diberikan untuk kemajuan sekolah ini?',
            'ket3' => '3. Sejak kapan mendapatkan informasi tentang SDIT AL-IZZAH?',
            'ket4' => '4. Dari mana Anda mendapatkan informasi SDIT AL-IZZAH?',
            // 'jenis_prestasi' => 'Jenis Prestasi',
            // 'tingkat_prestasi' => 'Tingkat Prestasi',
            // 'nm_prestasi' => 'Nm Prestasi',
            // 'thn_prestasi' => 'Thn Prestasi',
            // 'penyelenggara_prestasi' => 'Penyelenggara Prestasi',
            // 'jenis_beasiswa' => 'Jenis Beasiswa',
            // 'ket_beasiswa' => 'Ket Beasiswa',
            // 'thn_m_beasiswa' => 'Thn M Beasiswa',
            // 'thn_s_beasiswa' => 'Thn S Beasiswa',
            // 'id_jenis_imun' => 'Id Jenis Imun',
            // 'usia_imun' => 'Usia Imun',
            // 'ket_imun' => 'Ket Imun',
            // 'per_1' => 'Per 1',
            // 'per2' => 'Per2',
            // 'per3' => 'Per3',
            // 'per4' => 'Per4',
            // 'per5' => 'Per5',
            // 'per6' => 'Per6',
            // 'id_jns_penyakit' => 'Id Jns Penyakit',
            // 'usia_penyakit' => 'Usia Penyakit',
            // 'lama_penyakit' => 'Lama Penyakit',
            // 'obat_penyakit' => 'Obat Penyakit',
            // 'status_penyakit' => 'Status Penyakit',
            // 'id_jns_makanan' => 'Id Jns Makanan',
            // 'usia_makanan' => 'Usia Makanan',
            // 'akibat_makanan' => 'Akibat Makanan',
        ];
    }
    public function getQuestion()
    {
        return $this->hasOne(Question::className(), ['id' => 'kem_1']);
    }
    public function getTahun()
    {
        return $this->hasOne(Tahun::className(), ['id' => 'id_thn']);
    }
    public function getJk()
    {
        return $this->hasOne(Jk::className(), ['id' => 'id_jk_c']);
    }
    public function getPekerjaan()
    {
        return $this->hasOne(Pekerjaan::className(), ['id' => 'pekerjaan_w']);
    }
    public function getAgama()
    {
        return $this->hasOne(Agama::className(), ['id' => 'id_agama_c']);
    }
    public function getKhusus()
    {
        return $this->hasOne(Khusus::className(), ['id' => 'id_khusus_i']);
    }
    public function getJenisTinggal()
    {
        return $this->hasOne(JenisTinggal::className(), ['id' => 'id_jenis_tnggl']);
    }
    public function getTransport()
    {
        return $this->hasOne(Transport::className(), ['id' => 'id_transport_c']);
    }
    public function getPendidikan()
    {
        return $this->hasOne(Pendidikan::className(), ['id' => 'id_pendidikan_i']);
    }
    public function getPenghasilan()
    {
        return $this->hasOne(Penghasilan::className(), ['id' => 'id_penghasilan_b']);
    }
    public static function getCount()
    {
        return static::find()->count();
    }
    public function getSosa()
    {
        if ($this->sosa == 0) {
            return "Baik";
        }
        if ($this->sosa == 1) {
            return "Cukup";
        }
        if ($this->sosa == 2) {
            return "Kurang";
        }
    }
    public function getSosb()
    {
        if ($this->sosb == 0) {
            return "Baik";
        }
        if ($this->sosb == 1) {
            return "Cukup";
        }
        if ($this->sosb == 2) {
            return "Kurang";
        }
    }
    public function getSosc()
    {
        if ($this->sosc == 0) {
            return "Baik";
        }
        if ($this->sosc == 1) {
            return "Cukup";
        }
        if ($this->sosc == 2) {
            return "Kurang";
        }
    }
    public function getSosd()
    {
        if ($this->sosd == 0) {
            return "Baik";
        }
        if ($this->sosd == 1) {
            return "Cukup";
        }
        if ($this->sosd == 2) {
            return "Kurang";
        }
    }
    public function getSose()
    {
        if ($this->sose == 0) {
            return "Baik";
        }
        if ($this->sose == 1) {
            return "Cukup";
        }
        if ($this->sose == 2) {
            return "Kurang";
        }
    }
    public function getSosf()
    {
        if ($this->sosf == 0) {
            return "Baik";
        }
        if ($this->sosf == 1) {
            return "Cukup";
        }
        if ($this->sosf == 2) {
            return "Kurang";
        }
    }
    public function getSosg()
    {
        if ($this->sosg == 0) {
            return "Baik";
        }
        if ($this->sosg == 1) {
            return "Cukup";
        }
        if ($this->sosg == 2) {
            return "Kurang";
        }
    }
    public function getSosh()
    {
        if ($this->sosh == 0) {
            return "Baik";
        }
        if ($this->sosh == 1) {
            return "Cukup";
        }
        if ($this->sosh == 2) {
            return "Kurang";
        }
    }
    public function getSosi()
    {
        if ($this->sosi == 0) {
            return "Baik";
        }
        if ($this->sosi == 1) {
            return "Cukup";
        }
        if ($this->sosi == 2) {
            return "Kurang";
        }
    }
    public function getKepribadian()
    {
        if ($this->kep == 0) {
            return "Harus Disuruh";
        }
        if ($this->kep == 1) {
            return "Penakut";
        }
        if ($this->kep == 2) {
            return "Pendiam";
        }
        if ($this->kep == 3) {
            return "Pemberani";
        }
        if ($this->kep == 4) {
            return "Perasa";
        }
        if ($this->kep == 5) {
            return "Banyak Bicara";
        }
        if ($this->kep == 6) {
            return "Emosional";
        }
        if ($this->kep == 7) {
            return "Tak Mau Mengalah";
        }
        if ($this->kep == 8) {
            return "Pemalu";
        }
    }
    public function getKeterangan4()
    {
        if ($this->ket4 == 0) {
            return "Teman/Saudara";
        }
        if ($this->ket4 == 1) {
            return "Brosur";
        }
        if ($this->ket4 == 2) {
            return "Spanduk";
        }
    }
}
