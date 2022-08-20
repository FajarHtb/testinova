<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PendaftaranT;

/**
 * PendaftaranTSearch represents the model behind the search form of `app\models\PendaftaranT`.
 */
class PendaftaranTSearch extends PendaftaranT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pendaftaran_id'], 'integer'],
            [['nama_pasien', 'nama_ruangan', 'nama_tindakan', 'nama_pegawai', 'tanggal_pendaftaran'], 'safe'],
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
        $query = PendaftaranT::find();

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
            'pendaftaran_id' => $this->pendaftaran_id,
            'tanggal_pendaftaran' => $this->tanggal_pendaftaran,
        ]);

        $query->andFilterWhere(['ilike', 'nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['ilike', 'nama_ruangan', $this->nama_ruangan])
            ->andFilterWhere(['ilike', 'nama_tindakan', $this->nama_tindakan])
            ->andFilterWhere(['ilike', 'nama_pegawai', $this->nama_pegawai]);

        return $dataProvider;
    }
}
