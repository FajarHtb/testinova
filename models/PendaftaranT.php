<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran_t".
 *
 * @property int $pendaftaran_id
 * @property string $nama_pasien
 * @property string $nama_ruangan
 * @property string $nama_tindakan
 * @property string $nama_pegawai
 * @property string $tanggal_pendaftaran
 */
class PendaftaranT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nama_ruangan', 'nama_tindakan', 'nama_pegawai', 'tanggal_pendaftaran'], 'required'],
            [['nama_pasien', 'nama_ruangan', 'nama_tindakan', 'nama_pegawai'], 'string'],
            [['tanggal_pendaftaran'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pendaftaran_id' => 'Pendaftaran ID',
            'nama_pasien' => 'Nama Pasien',
            'nama_ruangan' => 'Nama Ruangan',
            'nama_tindakan' => 'Nama Tindakan',
            'nama_pegawai' => 'Nama Pegawai',
            'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
        ];
    }
}
