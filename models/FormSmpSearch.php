<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FormSmp;

/**
 * FormSmpSearch represents the model behind the search form of `app\models\FormSmp`.
 */
class FormSmpSearch extends FormSmp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'no_daftar', 'id_thn', 'id_jk_c', 'id_agama_c', 'id_khusus_c', 'id_jenis_tnggl', 'id_transport_c', 'no_c', 'id_pendidikan_b', 'id_pekerjaan_b', 'id_penghasilan_b', 'id_khusus_b', 'id_pendidikan_i', 'id_pekerjaan_i', 'id_penghasilan_i', 'id_khusus_i', 'id_pendidikan_wl', 'id_pekerjaan_wl', 'id_penghasilan_wl', 'tinggi_a', 'berat_a', 'jarak_a', 'waktu_tempuh', 'as10'], 'integer'],
            [['tgl_daftar', 'nama_w', 'usia_w', 'pekerjaan_w', 'alamat_w', 'alamatkantor_w', 'nm_lengkap_a', 'panggilan_a', 'tll_a', 'lengkap_c', 'panggilan_c', 'tmptlahir_c', 'alamat_c', 'email_c', 'nama_b', 'nama_i', 'thnlahir_b', 'thnlahir_i', 'nama_wl', 'thnlahir_w', 'saudara_a', 'as1', 'as2', 'as3', 'as4', 'as5', 'as6', 'as7', 'as8', 'as9'], 'safe'],
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
        $query = FormSmp::find();

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
            'id_khusus_b' => $this->id_khusus_b,
            'id_pendidikan_i' => $this->id_pendidikan_i,
            'id_pekerjaan_i' => $this->id_pekerjaan_i,
            'id_penghasilan_i' => $this->id_penghasilan_i,
            'id_khusus_i' => $this->id_khusus_i,
            'id_pendidikan_wl' => $this->id_pendidikan_wl,
            'id_pekerjaan_wl' => $this->id_pekerjaan_wl,
            'id_penghasilan_wl' => $this->id_penghasilan_wl,
            'tinggi_a' => $this->tinggi_a,
            'berat_a' => $this->berat_a,
            'jarak_a' => $this->jarak_a,
            'waktu_tempuh' => $this->waktu_tempuh,
            'as10' => $this->as10,
        ]);

        $query->andFilterWhere(['like', 'nama_w', $this->nama_w])
            ->andFilterWhere(['like', 'usia_w', $this->usia_w])
            ->andFilterWhere(['like', 'pekerjaan_w', $this->pekerjaan_w])
            ->andFilterWhere(['like', 'alamat_w', $this->alamat_w])
            ->andFilterWhere(['like', 'alamatkantor_w', $this->alamatkantor_w])
            ->andFilterWhere(['like', 'nm_lengkap_a', $this->nm_lengkap_a])
            ->andFilterWhere(['like', 'panggilan_a', $this->panggilan_a])
            ->andFilterWhere(['like', 'tmptlahir_a', $this->tmptlahir_a])
            ->andFilterWhere(['like', 'tgllahir_a', $this->tgllahir_a])
            ->andFilterWhere(['like', 'lengkap_c', $this->lengkap_c])
            ->andFilterWhere(['like', 'panggilan_c', $this->panggilan_c])
            ->andFilterWhere(['like', 'tmptlahir_c', $this->tmptlahir_c])
            ->andFilterWhere(['like', 'tgllahir_c', $this->tgllahir_c])
            ->andFilterWhere(['like', 'alamat_c', $this->alamat_c])
            ->andFilterWhere(['like', 'email_c', $this->email_c])
            ->andFilterWhere(['like', 'nama_b', $this->nama_b])
            ->andFilterWhere(['like', 'nama_i', $this->nama_i])
            ->andFilterWhere(['like', 'thnlahir_b', $this->thnlahir_b])
            ->andFilterWhere(['like', 'thnlahir_i', $this->thnlahir_i])
            ->andFilterWhere(['like', 'nama_wl', $this->nama_wl])
            ->andFilterWhere(['like', 'thnlahir_w', $this->thnlahir_w])
            ->andFilterWhere(['like', 'saudara_a', $this->saudara_a])
            ->andFilterWhere(['like', 'as1', $this->as1])
            ->andFilterWhere(['like', 'as2', $this->as2])
            ->andFilterWhere(['like', 'as3', $this->as3])
            ->andFilterWhere(['like', 'as4', $this->as4])
            ->andFilterWhere(['like', 'as5', $this->as5])
            ->andFilterWhere(['like', 'as6', $this->as6])
            ->andFilterWhere(['like', 'as7', $this->as7])
            ->andFilterWhere(['like', 'as8', $this->as8])
            ->andFilterWhere(['like', 'as9', $this->as9]);

        return $dataProvider;
    }
}
