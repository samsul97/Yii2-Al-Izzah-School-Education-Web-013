<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_smp".
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
 * @property string $tll_a
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
 * @property int $id_pendidikan_i
 * @property int $id_pekerjaan_i
 * @property int $id_penghasilan_i
 * @property int $id_khusus_i
 * @property string $thnlahir_b
 * @property string $thnlahir_i
 * @property string $nama_wl
 * @property string $thnlahir_w
 * @property int $id_pendidikan_wl
 * @property int $id_pekerjaan_wl
 * @property int $id_penghasilan_wl
 * @property int $tinggi_a
 * @property int $berat_a
 * @property int $jarak_a
 * @property int $waktu_tempuh
 * @property string $saudara_a
 * @property string $as1
 * @property string $as2
 * @property string $as3
 * @property string $as4
 * @property string $as5
 * @property string $as6
 * @property string $as7
 * @property string $as8
 * @property string $as9
 * @property int $as10
 */
class FormSmp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'form_smp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_daftar', 'tgl_daftar', 'id_thn', 'nama_w', 'usia_w', 'pekerjaan_w', 'alamat_w', 'nm_lengkap_a', 'panggilan_a', 'tmptlahir_a', 'tgllahir_a', 'lengkap_c', 'panggilan_c', 'id_jk_c', 'tmptlahir_c', 'tgllahir_c', 'id_agama_c', 'id_khusus_c', 'alamat_c', 'id_jenis_tnggl', 'id_transport_c', 'no_c', 'nama_b', 'id_pendidikan_b', 'id_pekerjaan_b', 'id_penghasilan_b', 'id_khusus_b', 'nama_i', 'id_khusus_i', 'thnlahir_b', 'thnlahir_i', 'nama_wl', 'thnlahir_w', 'tinggi_a', 'berat_a', 'jarak_a', 'waktu_tempuh', 'saudara_a', 'as1', 'as2', 'as3', 'as4', 'as5', 'as6', 'as7', 'as8', 'as9'], 'required'],
            [['id_thn', 'id_jk_c', 'id_agama_c', 'as10', 'tinggi_a', 'berat_a', 'jarak_a', 'waktu_tempuh'], 'integer'],
            [['tgl_daftar', 'tgllahir_a', 'tgllahir_c', 'thnlahir_b', 'thnlahir_i', 'thnlahir_w'], 'safe'],
            [['alamat_w', 'alamatkantor_w', 'alamat_c'], 'string'],
            [['nama_w', 'usia_w', 'pekerjaan_w', 'no_daftar', 'nm_lengkap_a', 'panggilan_a', 'tmptlahir_a', 'lengkap_c', 'panggilan_c', 'tmptlahir_c', 'email_c', 'nama_b', 'nama_i', 'thnlahir_b', 'thnlahir_i', 'nama_wl', 'thnlahir_w', 'saudara_a', 'as1', 'as2', 'as3', 'as4', 'as5', 'as6', 'as7', 'as8', 'as9', 'id_agama_c', 'id_khusus_c', 'id_jenis_tnggl', 'id_transport_c', 'id_pendidikan_b', 'id_pekerjaan_b', 'id_penghasilan_b', 'id_khusus_b', 'id_pendidikan_i', 'id_pekerjaan_i', 'id_penghasilan_i', 'id_khusus_i', 'id_pendidikan_wl', 'id_pekerjaan_wl', 'id_penghasilan_wl'], 'string', 'max' => 50],
            [['email_c'], 'unique'],
            [['email_c'], 'email'],
            ['no_c', 'match', 'pattern' => '/((\+[0-9]{6})|0)[-]?[0-9]{7}/', 'message' => 'Hanya dari nomor 0 sampai 9'],
            [['tinggi_a', 'berat_a', 'jarak_a', 'waktu_tempuh', 'saudara_a', 'as5', 'usia_w'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_daftar' => 'No Daftar',
            'tgl_daftar' => 'Tanggal Pendaftaran',
            'id_thn' => 'Tahun Pelajaran',
            'nama_w' => 'Nama Wali Murid',
            'usia_w' => 'Usia Wali Murid',
            'pekerjaan_w' => 'Pekerjaan Wali Murid',
            'alamat_w' => 'Alamat Wali Murid',
            'alamatkantor_w' => 'Alamat Kantor Wali Murid',
            'nm_lengkap_a' => 'Nama Lengkap Anak',
            'panggilan_a' => 'Panggilan Anak',
            'tmptlahir_a' => 'Tempat Lahir Anak',
            'tgllahir_a' => 'Tanggal Lahir Anak',
            // 'id_kelas' => 'Kelas',
            'lengkap_c' => 'Nama Lengkap Calon Siswa',
            'panggilan_c' => 'Nama Panggilan Calon Siswa',
            'id_jk_c' => 'Jenis Kelamin Calon Siswa',
            'tmptlahir_c' => 'Tempat Lahir Calon Siswa',
            'tgllahir_c' => 'Tanggal Lahir Calon Siswa',
            'id_agama_c' => 'Agama Calon Siswa',
            'id_khusus_c' => 'Kebutuhan Khusus Calon Siswa',
            'alamat_c' => 'Alamat Calon Siswa',
            'id_jenis_tnggl' => 'Jenis Tinggal Calon Siswa',
            'id_transport_c' => 'Transport Calon Siswa',
            'no_c' => 'No HP Calon Siswa',
            'email_c' => 'Email Calon Siswa',
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
            'thnlahir_b' => 'Tahun lahir Ayah',
            'thnlahir_i' => 'Tahun lahir Ibu',
            'nama_wl' => 'Nama Wali',
            'thnlahir_w' => 'Tahun lahir Wali',
            'id_pendidikan_wl' => 'Pendidikan Wali',
            'id_pekerjaan_wl' => 'Pekerjaan Wali',
            'id_penghasilan_wl' => 'Penghasilan Wali',
            'tinggi_a' => 'Tinggi Anak',
            'berat_a' => 'Berat Anak',
            'jarak_a' => 'Jarak Tempuh dari Rumah Ke Sekolah',
            'waktu_tempuh' => 'Waktu Tempuh dari Rumah Ke Sekolah',
            'saudara_a' => 'Jumlah Saudara Kandung',
            'as1' => 'Asal Sekolah',
            'as2' => 'Nama Sekolah',
            'as3' => 'Lama Belajar',
            'as4' => 'Alamat Sekolah',
            'as5' => 'Tgl.No.STTB',
            'as6' => 'Tanggal Pindah Sekolah',
            'as7' => 'Dari Kelas',
            'as8' => 'Prestasi yang pernah di raih di Sekolah',
            'as9' => 'Prestasi yang pernah di raih luar Sekolah',
            'as10' => 'Di terima di kelas',
        ];
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
        return $this->hasOne(Khusus::className(), ['id' => 'id_khusus_c']);
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
}
