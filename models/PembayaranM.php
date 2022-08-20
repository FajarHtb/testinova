<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran_m".
 *
 * @property int $nama_pasien
 * @property string $nik_pasien
 * @property string $umur
 * @property string $penyakit_pasien
 * @property string $tindakan_pasien
 * @property string $nama_obat
 * @property string $jenis_obat
 * @property string $biaya_pemeriksaan
 * @property string $jumlah_biaya
 * @property string $dokter_pemeriksaan
 */
class PembayaranM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nik_pasien', 'umur', 'penyakit_pasien', 'tindakan_pasien', 'nama_obat', 'jenis_obat', 'biaya_pemeriksaan', 'jumlah_biaya', 'dokter_pemeriksaan'], 'required'],
            [['nama_pasien'], 'default', 'value' => null],
            [['nama_pasien'], 'integer'],
            [['penyakit_pasien', 'tindakan_pasien', 'nama_obat', 'biaya_pemeriksaan', 'jumlah_biaya', 'dokter_pemeriksaan'], 'string'],
            [['nik_pasien'], 'string', 'max' => 16],
            [['umur'], 'string', 'max' => 3],
            [['jenis_obat'], 'string', 'max' => 6],
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
            'umur' => 'Umur',
            'penyakit_pasien' => 'Penyakit Pasien',
            'tindakan_pasien' => 'Tindakan Pasien',
            'nama_obat' => 'Nama Obat',
            'jenis_obat' => 'Jenis Obat',
            'biaya_pemeriksaan' => 'Biaya Pemeriksaan',
            'jumlah_biaya' => 'Jumlah Biaya',
            'dokter_pemeriksaan' => 'Dokter Pemeriksaan',
        ];
    }
}
