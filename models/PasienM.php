<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien_m".
 *
 * @property int $pasien_id
 * @property string $nama_pasien
 * @property string $nik
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $nomor_hp
 */
class PasienM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nik', 'tanggal_lahir', 'alamat', 'nomor_hp'], 'required'],
            [['nama_pasien', 'alamat'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['nik'], 'string', 'max' => 16],
            [['nomor_hp'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pasien_id' => 'Pasien ID',
            'nama_pasien' => 'Nama Pasien',
            'nik' => 'Nik',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'nomor_hp' => 'Nomor Hp',
        ];
    }
}
