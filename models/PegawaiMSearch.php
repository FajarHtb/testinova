<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PegawaiM;

/**
 * PegawaiMSearch represents the model behind the search form of `app\models\PegawaiM`.
 */
class PegawaiMSearch extends PegawaiM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'integer'],
            [['nama_pegawai', 'pekerjaan', 'nik', 'tanggal_lahir', 'jam_kerja', 'alamat', 'nomor_hp'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = PegawaiM::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pegawai_id' => $this->pegawai_id,
            'tanggal_lahir' => $this->tanggal_lahir,
        ]);

        $query->andFilterWhere(['ilike', 'nama_pegawai', $this->nama_pegawai])
            ->andFilterWhere(['ilike', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['ilike', 'nik', $this->nik])
            ->andFilterWhere(['ilike', 'jam_kerja', $this->jam_kerja])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'nomor_hp', $this->nomor_hp]);

        return $dataProvider;
    }
}
