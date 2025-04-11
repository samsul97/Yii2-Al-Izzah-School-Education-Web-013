<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FormTk;

/**
 * FormTkSearch represents the model behind the search form of `app\models\FormTk`.
 */
class FormTkSearch extends FormTk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'no_daftar', 'id_thn', 'id_jk_a'], 'integer'],
            [['tgl_daftar', 'nama_a', 'pnggil_a', 'tmptlahir_a', 'tgllahir_a', 'saudara_a', 'tnggi_a', 'berat_a', 'penyakit_a', 'imun_a', 'nama_b', 'tmptlahir_b', 'tgllahir_b', 'pendidikan_b', 'pekerjaan_b', 'penghasilan_b', 'alamat_b', 'hp_b', 'nama_i', 'tmptlahir_i', 'tgllahir_i', 'pendidikan_i', 'pekerjaan_i', 'penghasilan_i', 'alamat_i', 'hp_i', 'fisik_a', 'bakat_a', 'kepribadian_a', 'jilid_a', 'surat_a', 'quran_a', 'buku_a', 'alpabet_a', 'k_1', 'k_2', 'k_3', 'k_4', 'k_5', 'k_6', 'k_7', 'k_8', 'k_9', 'k_10'], 'safe'],
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
        $query = FormTk::find();

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
            'id_jk_a' => $this->id_jk_a,
        ]);

        $query->andFilterWhere(['like', 'nama_a', $this->nama_a])
            ->andFilterWhere(['like', 'pnggil_a', $this->pnggil_a])
            ->andFilterWhere(['like', 'tmptlahir_a', $this->tmptlahir_a])
            ->andFilterWhere(['like', 'tgllahir_a', $this->tgllahir_a])
            ->andFilterWhere(['like', 'saudara_a', $this->saudara_a])
            ->andFilterWhere(['like', 'tnggi_a', $this->tnggi_a])
            ->andFilterWhere(['like', 'berat_a', $this->berat_a])
            ->andFilterWhere(['like', 'penyakit_a', $this->penyakit_a])
            ->andFilterWhere(['like', 'imun_a', $this->imun_a])
            ->andFilterWhere(['like', 'nama_b', $this->nama_b])
            ->andFilterWhere(['like', 'tmptlahir_b', $this->tmptlahir_b])
            ->andFilterWhere(['like', 'tgllahir_b', $this->tgllahir_b])
            ->andFilterWhere(['like', 'pendidikan_b', $this->pendidikan_b])
            ->andFilterWhere(['like', 'pekerjaan_b', $this->pekerjaan_b])
            ->andFilterWhere(['like', 'penghasilan_b', $this->penghasilan_b])
            ->andFilterWhere(['like', 'alamat_b', $this->alamat_b])
            ->andFilterWhere(['like', 'hp_b', $this->hp_b])
            ->andFilterWhere(['like', 'nama_i', $this->nama_i])
            ->andFilterWhere(['like', 'tmptlahir_i', $this->tmptlahir_i])
            ->andFilterWhere(['like', 'tgllahir_i', $this->tgllahir_i])
            ->andFilterWhere(['like', 'pendidikan_i', $this->pendidikan_i])
            ->andFilterWhere(['like', 'pekerjaan_i', $this->pekerjaan_i])
            ->andFilterWhere(['like', 'penghasilan_i', $this->penghasilan_i])
            ->andFilterWhere(['like', 'alamat_i', $this->alamat_i])
            ->andFilterWhere(['like', 'hp_i', $this->hp_i])
            ->andFilterWhere(['like', 'fisik_a', $this->fisik_a])
            ->andFilterWhere(['like', 'bakat_a', $this->bakat_a])
            ->andFilterWhere(['like', 'kepribadian_a', $this->kepribadian_a])
            ->andFilterWhere(['like', 'jilid_a', $this->jilid_a])
            ->andFilterWhere(['like', 'surat_a', $this->surat_a])
            ->andFilterWhere(['like', 'k_1', $this->k_1])
            ->andFilterWhere(['like', 'k_2', $this->k_2])
            ->andFilterWhere(['like', 'k_3', $this->k_3])
            ->andFilterWhere(['like', 'k_4', $this->k_4])
            ->andFilterWhere(['like', 'k_5', $this->k_5])
            ->andFilterWhere(['like', 'k_6', $this->k_6])
            ->andFilterWhere(['like', 'k_7', $this->k_7])
            ->andFilterWhere(['like', 'k_8', $this->k_8])
            ->andFilterWhere(['like', 'k_9', $this->k_9])
            ->andFilterWhere(['like', 'k_10', $this->k_10]);

        return $dataProvider;
    }
}
