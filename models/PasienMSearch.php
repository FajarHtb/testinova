<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PasienM;

/**
 * PasienMSearch represents the model behind the search form of `app\models\PasienM`.
 */
class PasienMSearch extends PasienM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pasien_id'], 'integer'],
            [['nama_pasien', 'nik', 'tanggal_lahir', 'alamat', 'nomor_hp'], 'safe'],
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
        $query = PasienM::find();

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
            'pasien_id' => $this->pasien_id,
            'tanggal_lahir' => $this->tanggal_lahir,
        ]);

        $query->andFilterWhere(['ilike', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['ilike', 'nik', $this->nik])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'nomor_hp', $this->nomor_hp]);

        return $dataProvider;
    }
}
