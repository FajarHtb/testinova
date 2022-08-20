<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TindakanM;

/**
 * TindakanMSearch represents the model behind the search form of `app\models\TindakanM`.
 */
class TindakanMSearch extends TindakanM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tintakan_id'], 'integer'],
            [['nama_tindakan', 'waktu_tindakan', 'tindakan_antisipasi'], 'safe'],
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
        $query = TindakanM::find();

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
            'tintakan_id' => $this->tintakan_id,
            'waktu_tindakan' => $this->waktu_tindakan,
        ]);

        $query->andFilterWhere(['ilike', 'nama_tindakan', $this->nama_tindakan])
            ->andFilterWhere(['ilike', 'tindakan_antisipasi', $this->tindakan_antisipasi]);

        return $dataProvider;
    }
}
