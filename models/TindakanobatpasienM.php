<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakanobatpasien_m".
 *
 * @property int $nama_pasien
 * @property string $nik_pasien
 * @property string $penyakit_pasien
 * @property string $obat_pasien
 * @property string $tindakan_pasien
 * @property string $waktu_mulai_tindakan
 */
class TindakanobatpasienM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakanobatpasien_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nik_pasien', 'penyakit_pasien', 'obat_pasien', 'tindakan_pasien', 'waktu_mulai_tindakan'], 'required'],
            [['nama_pasien'], 'default', 'value' => null],
            [['nama_pasien'], 'integer'],
            [['penyakit_pasien', 'obat_pasien', 'tindakan_pasien'], 'string'],
            [['waktu_mulai_tindakan'], 'safe'],
            [['nik_pasien'], 'string', 'max' => 16],
            [['nama_pasien'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_pasien' => 'Nama Pasien',
            'nik_pasien' => 'Nik Pasien',
            'penyakit_pasien' => 'Penyakit Pasien',
            'obat_pasien' => 'Obat Pasien',
            'tindakan_pasien' => 'Tindakan Pasien',
            'waktu_mulai_tindakan' => 'Waktu Mulai Tindakan',
        ];
    }
}
