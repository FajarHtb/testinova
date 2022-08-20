<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai_m".
 *
 * @property int $pegawai_id
 * @property string $nama_pegawai
 * @property string $pekerjaan
 * @property string $nik
 * @property string $tanggal_lahir
 * @property string $jam_kerja
 * @property string $alamat
 * @property string $nomor_hp
 */
class PegawaiM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'nama_pegawai', 'pekerjaan', 'nik', 'tanggal_lahir', 'jam_kerja', 'alamat', 'nomor_hp'], 'required'],
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['nama_pegawai', 'pekerjaan', 'jam_kerja', 'alamat'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['nik'], 'string', 'max' => 16],
            [['nomor_hp'], 'string', 'max' => 13],
            [['pegawai_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pegawai_id' => 'Pegawai ID',
            'nama_pegawai' => 'Nama Pegawai',
            'pekerjaan' => 'Pekerjaan',
            'nik' => 'Nik',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jam_kerja' => 'Jam Kerja',
            'alamat' => 'Alamat',
            'nomor_hp' => 'Nomor Hp',
        ];
    }
}
