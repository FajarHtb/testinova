<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "masterwilayah_m".
 *
 * @property int $id_ruangan
 * @property string $nama_ruangan
 * @property string $jumlah_kamar
 */
class MasterwilayahM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'masterwilayah_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ruangan', 'nama_ruangan', 'jumlah_kamar'], 'required'],
            [['id_ruangan'], 'default', 'value' => null],
            [['id_ruangan'], 'integer'],
            [['nama_ruangan'], 'string'],
            [['jumlah_kamar'], 'string', 'max' => 3],
            [['id_ruangan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ruangan' => 'Id Ruangan',
            'nama_ruangan' => 'Nama Ruangan',
            'jumlah_kamar' => 'Jumlah Kamar',
        ];
    }
}
