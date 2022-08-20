<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat_m".
 *
 * @property int $nama
 * @property string $jenis_obat
 * @property string $kegunaan_obat
 * @property string $stok_obat
 */
class ObatM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_obat', 'kegunaan_obat', 'stok_obat'], 'required'],
            [['nama'], 'default', 'value' => null],
            [['nama'], 'integer'],
            [['jenis_obat', 'kegunaan_obat'], 'string'],
            [['stok_obat'], 'string', 'max' => 5],
            [['nama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'jenis_obat' => 'Jenis Obat',
            'kegunaan_obat' => 'Kegunaan Obat',
            'stok_obat' => 'Stok Obat',
        ];
    }
}
