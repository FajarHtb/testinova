<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ObatM;

/**
 * ObatMSearch represents the model behind the search form of `app\models\ObatM`.
 */
class ObatMSearch extends ObatM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'integer'],
            [['jenis_obat', 'kegunaan_obat', 'stok_obat'], 'safe'],
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
        $query = ObatM::find();

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
            'nama' => $this->nama,
        ]);

        $query->andFilterWhere(['ilike', 'jenis_obat', $this->jenis_obat])
            ->andFilterWhere(['ilike', 'kegunaan_obat', $this->kegunaan_obat])
            ->andFilterWhere(['ilike', 'stok_obat', $this->stok_obat]);

        return $dataProvider;
    }
}
