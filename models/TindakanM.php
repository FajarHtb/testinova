<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan_m".
 *
 * @property int $tintakan_id
 * @property string $nama_tindakan
 * @property string $waktu_tindakan
 * @property string $tindakan_antisipasi
 */
class TindakanM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tintakan_id', 'nama_tindakan', 'waktu_tindakan', 'tindakan_antisipasi'], 'required'],
            [['tintakan_id'], 'default', 'value' => null],
            [['tintakan_id'], 'integer'],
            [['nama_tindakan', 'tindakan_antisipasi'], 'string'],
            [['waktu_tindakan'], 'safe'],
            [['tintakan_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tintakan_id' => 'Tintakan ID',
            'nama_tindakan' => 'Nama Tindakan',
            'waktu_tindakan' => 'Waktu Tindakan',
            'tindakan_antisipasi' => 'Tindakan Antisipasi',
        ];
    }
}
