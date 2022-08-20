<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PembayaranM;

/**
 * PembayaranMSearch represents the model behind the search form of `app\models\PembayaranM`.
 */
class PembayaranMSearch extends PembayaranM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien'], 'integer'],
            [['nik_pasien', 'umur', 'penyakit_pasien', 'tindakan_pasien', 'nama_obat', 'jenis_obat', 'biaya_pemeriksaan', 'jumlah_biaya', 'dokter_pemeriksaan'], 'safe'],
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
        $query = PembayaranM::find();

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
        ]);

        $query->andFilterWhere(['ilike', 'nik_pasien', $this->nik_pasien])
            ->andFilterWhere(['ilike', 'umur', $this->umur])
            ->andFilterWhere(['ilike', 'penyakit_pasien', $this->penyakit_pasien])
            ->andFilterWhere(['ilike', 'tindakan_pasien', $this->tindakan_pasien])
            ->andFilterWhere(['ilike', 'nama_obat', $this->nama_obat])
            ->andFilterWhere(['ilike', 'jenis_obat', $this->jenis_obat])
            ->andFilterWhere(['ilike', 'biaya_pemeriksaan', $this->biaya_pemeriksaan])
            ->andFilterWhere(['ilike', 'jumlah_biaya', $this->jumlah_biaya])
            ->andFilterWhere(['ilike', 'dokter_pemeriksaan', $this->dokter_pemeriksaan]);

        return $dataProvider;
    }
}
