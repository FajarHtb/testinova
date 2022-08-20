<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterwilayahM;

/**
 * MasterwilayahMSearch represents the model behind the search form of `app\models\MasterwilayahM`.
 */
class MasterwilayahMSearch extends MasterwilayahM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ruangan'], 'integer'],
            [['nama_ruangan', 'jumlah_kamar'], 'safe'],
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
        $query = MasterwilayahM::find();

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
            'id_ruangan' => $this->id_ruangan,
        ]);

        $query->andFilterWhere(['ilike', 'nama_ruangan', $this->nama_ruangan])
            ->andFilterWhere(['ilike', 'jumlah_kamar', $this->jumlah_kamar]);

        return $dataProvider;
    }
}
