<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_tk".
 *
 * @property int $id
 * @property int $no_daftar
 * @property string $tgl_daftar
 * @property int $id_thn
 * @property string $nama_a
 * @property string $pnggil_a
 * @property string $tmptlahir_a
 * @property int $id_jk_a
 * @property string $saudara_a
 * @property string $tnggi_a
 * @property string $berat_a
 * @property string $penyakit_a
 * @property string $imun_a
 * @property string $nama_b
 * @property string $tmptlahir_b
 * @property string $pendidikan_b
 * @property string $pekerjaan_b
 * @property string $penghasilan_b
 * @property string $alamat_b
 * @property string $hp_b
 * @property string $nama_i
 * @property string $tmptlahir_i
 * @property string $pendidikan_i
 * @property string $pekerjaan_i
 * @property string $penghasilan_i
 * @property string $alamat_i
 * @property string $hp_i
 * @property string $fisik_a
 * @property string $bakat_a
 * @property string $kepribadian_a
 * @property int $id_quran_a
 * @property int $id_buku_a
 * @property string $jilid_a
 * @property string $surat_a
 * @property int $id_alpabet_a
 * @property string $k_1
 * @property string $k_2
 * @property string $k_3
 * @property string $k_4
 * @property string $k_5
 * @property string $k_6
 * @property string $k_7
 * @property string $k_8
 * @property string $k_9
 * @property string $k_10
 */
class FormTk extends \yii\db\ActiveRecord
{
    // public $pendidikan_i;
    // public $pekerjaan_i;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'form_tk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['no_daftar'], 'autonumber', 'format'=>date('Ymd').'-?', 'digit'=>4],
            [['no_daftar',  'id_thn', 'tgl_daftar', 'nama_a', 'pnggil_a', 'tmptlahir_a', 'id_jk_a', 'saudara_a', 'tnggi_a', 'berat_a', 'imun_a', 'nama_b', 'tmptlahir_b', 'pendidikan_b', 'pekerjaan_b', 'penghasilan_b', 'alamat_b', 'hp_b', 'nama_i', 'tmptlahir_i', 'pendidikan_i', 'pekerjaan_i', 'penghasilan_i', 'alamat_i', 'hp_i', 'fisik_a', 'bakat_a', 'kepribadian_a', 'quran_a', 'buku_a', 'jilid_a', 'alpabet_a', 'surat_a', 'k_1', 'k_2', 'k_3', 'k_4', 'k_5', 'k_6', 'k_7', 'k_8', 'k_9', 'k_10'], 'required', 'message'=> 'Data tidak boleh kosong'],
            [['id_thn', 'id_jk_a', 'status'], 'integer'],
            [['tgl_daftar', 'tgllahir_a', 'tgllahir_b', 'tgllahir_i'], 'safe'],
            [['alamat_b', 'alamat_i', 'quran_a', 'buku_a', 'alpabet_a'], 'string'],
            [['no_daftar', 'nama_a', 'pnggil_a', 'tmptlahir_a', 'saudara_a', 'tnggi_a', 'berat_a', 'penyakit_a', 'imun_a', 'nama_b', 'tmptlahir_b', 'pendidikan_b', 'pekerjaan_b', 'penghasilan_b', 'hp_b', 'nama_i', 'tmptlahir_i', 'pendidikan_i', 'pekerjaan_i', 'penghasilan_i', 'hp_i', 'fisik_a', 'bakat_a', 'jilid_a', 'surat_a', 'k_1', 'k_2', 'k_3', 'k_4', 'k_5', 'k_6', 'k_7', 'k_8', 'k_9', 'k_10'], 'string', 'max' => 50],
            [['kepribadian_a'], 'string', 'max' => 100],
            [['hp_b'], 'unique'],
            [['hp_b', 'hp_i'], 'match', 'pattern' => '/((\+[0-9]{6})|0)[-]?[0-9]{7}/', 'message' => 'Hanya dari nomor 0 sampai 9'],
            [['tnggi_a', 'berat_a', 'saudara_a'], 'number'],
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
            'id_thn' => 'Tahun Ajaran',
            'nama_a' => 'Nama Anak',
            'pnggil_a' => 'Panggilan Anak',
            'tmptlahir_a' => 'Tempat Lahir Anak',
            'tgllahir_a' => 'Tanggal Lahir Anak',
            'id_jk_a' => 'Jenis Kelamin Anak',
            'saudara_a' => 'Saudara Anak',
            'tnggi_a' => 'Tinggi Anak',
            'berat_a' => 'Berat Anak',
            'penyakit_a' => 'Penyakit Berat yang Pernah di Derita',
            'imun_a' => 'Imun Anak',
            'nama_b' => 'Nama Ayah',
            'tmptlahir_b' => 'Tempat Lahir Ayah',
            'tgllahir_b' => 'Tanggal Lahir Ayah',
            'pendidikan_b' => 'Pendidikan Ayah',
            'pekerjaan_b' => 'Pekerjaan Ayah',
            'penghasilan_b' => 'Penghasilan Ayah',
            'alamat_b' => 'Alamat Ayah',
            'hp_b' => 'Handphone Ayah',
            'nama_i' => 'Nama Ibu',
            'tmptlahir_i' => 'Tempat Lahir Ibu',
            'tgllahir_i' => 'Tanggal Lahir Ibu',
            'pendidikan_i' => 'Pendidikan Ibu',
            'pekerjaan_i' => 'Pekerjaan Ibu',
            'penghasilan_i' => 'Penghasilan Ibu',
            'alamat_i' => 'Alamat Ibu',
            'hp_i' => 'HP Ibu',
            'fisik_a' => 'Ciri Fisik yang Menonjol',
            'bakat_a' => 'Bakat Khusus yang Menonjol',
            'kepribadian_a' => 'Kepribadian yang Menonjol',
            'quran_a' => 'Belajar Quran',
            'buku_a' => 'Buku yang Digunakan',
            'jilid_a' => 'Pencapaian Jilid',
            'surat_a' => 'Surat Pendek yang Dihafal',
            'id_alpabet_a' => 'mengenal Huruf Alphabet',
            'k_1' => 'Bangun tidur sendiri',
            'k_2' => 'Membersihkan tempat tidur sendiri',
            'k_3' => 'Mandi sendiri',
            'k_4' => 'Gosok Gigi Sendiri',
            'k_5' => 'Mengenakan Pakaian Sendiri',
            'k_6' => 'Mengenakan sepatu sendiri',
            'k_7' => 'Memakai sepatu sendiri',
            'k_8' => 'Makan sendiri',
            'k_9' => 'Tidur tidak ditemani',
            'k_10' => 'Bermain kerumah tetangga',
            'status' => 'Status Pembayaran',
        ];
    }
    public function getTahun()
    {
        return $this->hasOne(Tahun::className(), ['id' => 'id_thn']);
    }
    public function getJk()
    {
        return $this->hasOne(Jk::className(), ['id' => 'id_jk_a']);
    }
    // pendidikan bapak
    public function getPendidikan()
    {
        return $this->hasOne(Pendidikan::className(), ['id' => 'pendidikan_b']);
    }
    public function getPekerjaan()
    {
        return $this->hasOne(Pekerjaan::className(), ['id' => 'pekerjaan_b']);
    }
    // pendidikan ibu
    public static function getCount()
    {
        return static::find()->count();
    }
    public function getSurat()
    {
        if ($this->surat_a == 0) {
            return "Al-fatihah";
        }
        if ($this->surat_a == 1) {
            return "An-Nas";
        }
        if ($this->surat_a == 2) {
            return "Al-Falaq";
        }
        if ($this->surat_a == 3) {
            return "Al-Alk";
        }
    }
    public function getKemampuan1()
    {
        if ($this->k_1 == 0) {
            return "Selalu";
        }
        if ($this->k_1 == 1) {
            return "Sering";
        }
        if ($this->k_1 == 2) {
            return "Kadang";
        }
        if ($this->k_1 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan2()
    {
        if ($this->k_2 == 0) {
            return "Selalu";
        }
        if ($this->k_2 == 1) {
            return "Sering";
        }
        if ($this->k_2 == 2) {
            return "Kadang";
        }
        if ($this->k_2 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan3()
    {
        if ($this->k_3 == 0) {
            return "Selalu";
        }
        if ($this->k_3 == 1) {
            return "Sering";
        }
        if ($this->k_3 == 2) {
            return "Kadang";
        }
        if ($this->k_3 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan4()
    {
        if ($this->k_4 == 0) {
            return "Selalu";
        }
        if ($this->k_4 == 1) {
            return "Sering";
        }
        if ($this->k_4 == 2) {
            return "Kadang";
        }
        if ($this->k_4 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan5()
    {
        if ($this->k_5 == 0) {
            return "Selalu";
        }
        if ($this->k_5 == 1) {
            return "Sering";
        }
        if ($this->k_5 == 2) {
            return "Kadang";
        }
        if ($this->k_5 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan6()
    {
        if ($this->k_6 == 0) {
            return "Selalu";
        }
        if ($this->k_6 == 1) {
            return "Sering";
        }
        if ($this->k_6 == 2) {
            return "Kadang";
        }
        if ($this->k_6 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan7()
    {
        if ($this->k_7 == 0) {
            return "Selalu";
        }
        if ($this->k_7 == 1) {
            return "Sering";
        }
        if ($this->k_7 == 2) {
            return "Kadang";
        }
        if ($this->k_7 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan8()
    {
        if ($this->k_8 == 0) {
            return "Selalu";
        }
        if ($this->k_8 == 1) {
            return "Sering";
        }
        if ($this->k_8 == 2) {
            return "Kadang";
        }
        if ($this->k_8 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan9()
    {
        if ($this->k_9 == 0) {
            return "Selalu";
        }
        if ($this->k_9 == 1) {
            return "Sering";
        }
        if ($this->k_9 == 2) {
            return "Kadang";
        }
        if ($this->k_9 == 3) {
            return "Tidak Pernah";
        }
    }
    public function getKemampuan10()
    {
        if ($this->k_10 == 0) {
            return "Selalu";
        }
        if ($this->k_10 == 1) {
            return "Sering";
        }
        if ($this->k_10 == 2) {
            return "Kadang";
        }
        if ($this->k_10 == 3) {
            return "Tidak Pernah";
        }
    }
}
