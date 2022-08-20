<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TindakanobatpasienM;

/**
 * TindakanobatpasienMSearch represents the model behind the search form of `app\models\TindakanobatpasienM`.
 */
class TindakanobatpasienMSearch extends TindakanobatpasienM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien'], 'integer'],
            [['nik_pasien', 'penyakit_pasien', 'obat_pasien', 'tindakan_pasien', 'waktu_mulai_tindakan'], 'safe'],
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
        $query = TindakanobatpasienM::find();

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
            'nama_pasien' => $this->nama_pasien,
            'waktu_mulai_tindakan' => $this->waktu_mulai_tindakan,
        ]);

        $query->andFilterWhere(['ilike', 'nik_pasien', $this->nik_pasien])
            ->andFilterWhere(['ilike', 'penyakit_pasien', $this->penyakit_pasien])
            ->andFilterWhere(['ilike', 'obat_pasien', $this->obat_pasien])
            ->andFilterWhere(['ilike', 'tindakan_pasien', $this->tindakan_pasien]);

        return $dataProvider;
    }
}
