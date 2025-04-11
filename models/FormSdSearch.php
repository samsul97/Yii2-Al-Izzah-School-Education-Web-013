<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FormSd;

/**
 * FormSdSearch represents the model behind the search form of `app\models\FormSd`.
 */
class FormSdSearch extends FormSd
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'no_daftar', 'id_thn', 'id_jk_c', 'id_agama_c', 'id_khusus_c', 'id_jenis_tnggl', 'id_transport_c', 'no_c', 'id_pendidikan_b', 'id_pekerjaan_b', 'id_penghasilan_b', 'id_khusus_b', 'id_khusus_i', 'tinggi_a', 'berat_a', 'jarak_a', 'waktu_tempuh', 'kem_1', 'kem_2', 'kem_3', 'kem_4', 'kem_5', 'kem_6', 'kem_7', 'kem_8', 'kem_9', 'kem_10', 'kem_11', 'kem_12', 'id_pendidikan_i', 'id_pekerjaan_i', 'id_penghasilan_i', 'id_pendidikan_wl', 'id_pekerjaan_wl', 'id_penghasilan_wl'], 'integer'],

            [['tgl_daftar', 'nama_w', 'usia_w', 'pekerjaan_w', 'alamat_w', 'alamatkantor_w', 'nm_lengkap_a', 'panggilan_a', 'tmptlahir_a', 'lengkap_c', 'panggilan_c', 'ttl_c', 'alamat_c', 'email_c', 'nama_b', 'nama_i', 'thnlahir_b', 'thnlahir_i', 'nama_wl', 'thnlahir_w', 'saudara_a', 'sos1', 'sos2', 'sosa', 'sosb', 'sosc', 'sosd', 'sose', 'sosf', 'sosg', 'sosh', 'sosi', 'kep', 'kes1', 'kes2', 'kes3', 'kes4', 'kes5', 'kes6', 'kes7', 'fre1', 'fre2', 'fre3', 'fre4', 'as1', 'as2', 'as3', 'as4', 'as5', 'as6', 'as7', 'as8', 'as9', 'as10', 'ket1', 'ket2', 'ket3', 'ket4'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FormSd::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'no_daftar' => $this->no_daftar,
            'tgl_daftar' => $this->tgl_daftar,
            'id_thn' => $this->id_thn,
            // 'id_kelas' => $this->id_kelas,
            'id_jk_c' => $this->id_jk_c,
            'id_agama_c' => $this->id_agama_c,
            'id_khusus_c' => $this->id_khusus_c,
            'id_jenis_tnggl' => $this->id_jenis_tnggl,
            'id_transport_c' => $this->id_transport_c,
            'no_c' => $this->no_c,
            'id_pendidikan_b' => $this->id_pendidikan_b,
            'id_pekerjaan_b' => $this->id_pekerjaan_b,
            'id_penghasilan_b' => $this->id_penghasilan_b,
            'id_pendidikan_i' => $this->id_pendidikan_i,
            'id_pekerjaan_i' => $this->id_pekerjaan_i,
            'id_penghasilan_i' => $this->id_penghasilan_i,
            'id_pendidikan_wl' => $this->id_pendidikan_wl,
            'id_pekerjaan_wl' => $this->id_pekerjaan_wl,
            'id_penghasilan_wl' => $this->id_penghasilan_wl,
            'id_khusus_b' => $this->id_khusus_b,
            'id_khusus_i' => $this->id_khusus_i,
            'tinggi_a' => $this->tinggi_a,
            'berat_a' => $this->berat_a,
            'jarak_a' => $this->jarak_a,
            'waktu_tempuh' => $this->waktu_tempuh,
            'kem_1' => $this->kem_1,
            'kem_2' => $this->kem_2,
            'kem_3' => $this->kem_3,
            'kem_4' => $this->kem_4,
            'kem_5' => $this->kem_5,
            'kem_6' => $this->kem_6,
            'kem_7' => $this->kem_7,
            'kem_8' => $this->kem_8,
            'kem_9' => $this->kem_9,
            'kem_10' => $this->kem_10,
            'kem_11' => $this->kem_11,
            'kem_12' => $this->kem_12,
            // 'thn_prestasi' => $this->thn_prestasi,
            // 'thn_m_beasiswa' => $this->thn_m_beasiswa,
            // 'thn_s_beasiswa' => $this->thn_s_beasiswa,
            // 'id_jenis_imun' => $this->id_jenis_imun,
            // 'id_jns_makanan' => $this->id_jns_makanan,
        ]);

        $query->andFilterWhere(['like', 'nama_w', $this->nama_w])
            ->andFilterWhere(['like', 'usia_w', $this->usia_w])
            ->andFilterWhere(['like', 'pekerjaan_w', $this->pekerjaan_w])
            ->andFilterWhere(['like', 'alamat_w', $this->alamat_w])
            ->andFilterWhere(['like', 'alamatkantor_w', $this->alamatkantor_w])
            ->andFilterWhere(['like', 'nm_lengkap_a', $this->nm_lengkap_a])
            ->andFilterWhere(['like', 'panggilan_a', $this->panggilan_a])
            ->andFilterWhere(['like', 'tmptlahir_a', $this->tmptlahir_a])
            ->andFilterWhere(['like', 'lengkap_c', $this->lengkap_c])
            ->andFilterWhere(['like', 'panggilan_c', $this->panggilan_c])
            ->andFilterWhere(['like', 'tmptlahir_c', $this->tmptlahir_c])
            ->andFilterWhere(['like', 'alamat_c', $this->alamat_c])
            ->andFilterWhere(['like', 'email_c', $this->email_c])
            ->andFilterWhere(['like', 'nama_b', $this->nama_b])
            ->andFilterWhere(['like', 'nama_i', $this->nama_i])
            ->andFilterWhere(['like', 'thnlahir_b', $this->thnlahir_b])
            ->andFilterWhere(['like', 'thnlahir_i', $this->thnlahir_i])
            ->andFilterWhere(['like', 'nama_wl', $this->nama_wl])
            ->andFilterWhere(['like', 'thnlahir_w', $this->thnlahir_w])
            ->andFilterWhere(['like', 'saudara_a', $this->saudara_a])
            ->andFilterWhere(['like', 'sos1', $this->sos1])
            ->andFilterWhere(['like', 'sos2', $this->sos2])
            ->andFilterWhere(['like', 'sosa', $this->sosa])
            ->andFilterWhere(['like', 'sosb', $this->sosb])
            ->andFilterWhere(['like', 'sosc', $this->sosc])
            ->andFilterWhere(['like', 'sosd', $this->sosd])
            ->andFilterWhere(['like', 'sose', $this->sose])
            ->andFilterWhere(['like', 'sosf', $this->sosf])
            ->andFilterWhere(['like', 'sosg', $this->sosg])
            ->andFilterWhere(['like', 'sosh', $this->sosh])
            ->andFilterWhere(['like', 'sosi', $this->sosi])
            ->andFilterWhere(['like', 'kep', $this->kep])
            ->andFilterWhere(['like', 'kes1', $this->kes1])
            ->andFilterWhere(['like', 'kes2', $this->kes2])
            ->andFilterWhere(['like', 'kes3', $this->kes3])
            ->andFilterWhere(['like', 'kes4', $this->kes4])
            ->andFilterWhere(['like', 'kes5', $this->kes5])
            ->andFilterWhere(['like', 'kes6', $this->kes6])
            ->andFilterWhere(['like', 'kes7', $this->kes7])
            ->andFilterWhere(['like', 'fre1', $this->fre1])
            ->andFilterWhere(['like', 'fre2', $this->fre2])
            ->andFilterWhere(['like', 'fre3', $this->fre3])
            ->andFilterWhere(['like', 'fre4', $this->fre4])
            ->andFilterWhere(['like', 'as1', $this->as1])
            ->andFilterWhere(['like', 'as2', $this->as2])
            ->andFilterWhere(['like', 'as3', $this->as3])
            ->andFilterWhere(['like', 'as4', $this->as4])
            ->andFilterWhere(['like', 'as5', $this->as5])
            ->andFilterWhere(['like', 'as6', $this->as6])
            ->andFilterWhere(['like', 'as7', $this->as7])
            ->andFilterWhere(['like', 'as8', $this->as8])
            ->andFilterWhere(['like', 'as9', $this->as9])
            ->andFilterWhere(['like', 'as10', $this->as10])
            ->andFilterWhere(['like', 'ket1', $this->ket1])
            ->andFilterWhere(['like', 'ket2', $this->ket2])
            ->andFilterWhere(['like', 'ket3', $this->ket3])
            ->andFilterWhere(['like', 'ket4', $this->ket4]);
            // ->andFilterWhere(['like', 'jenis_prestasi', $this->jenis_prestasi])
            // ->andFilterWhere(['like', 'tingkat_prestasi', $this->tingkat_prestasi])
            // ->andFilterWhere(['like', 'nm_prestasi', $this->nm_prestasi])
            // ->andFilterWhere(['like', 'penyelenggara_prestasi', $this->penyelenggara_prestasi])
            // ->andFilterWhere(['like', 'jenis_beasiswa', $this->jenis_beasiswa])
            // ->andFilterWhere(['like', 'ket_beasiswa', $this->ket_beasiswa])
            // ->andFilterWhere(['like', 'usia_imun', $this->usia_imun])
            // ->andFilterWhere(['like', 'ket_imun', $this->ket_imun])
            // ->andFilterWhere(['like', 'per_1', $this->per_1])
            // ->andFilterWhere(['like', 'per2', $this->per2])
            // ->andFilterWhere(['like', 'per3', $this->per3])
            // ->andFilterWhere(['like', 'per4', $this->per4])
            // ->andFilterWhere(['like', 'per5', $this->per5])
            // ->andFilterWhere(['like', 'per6', $this->per6])
            // ->andFilterWhere(['like', 'id_jns_penyakit', $this->id_jns_penyakit])
            // ->andFilterWhere(['like', 'usia_penyakit', $this->usia_penyakit])
            // ->andFilterWhere(['like', 'lama_penyakit', $this->lama_penyakit])
            // ->andFilterWhere(['like', 'obat_penyakit', $this->obat_penyakit])
            // ->andFilterWhere(['like', 'status_penyakit', $this->status_penyakit])
            // ->andFilterWhere(['like', 'usia_makanan', $this->usia_makanan])
            // ->andFilterWhere(['like', 'akibat_makanan', $this->akibat_makanan]);

        return $dataProvider;
    }
}
