<?php

namespace app\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "datakeberatan2016".
 *
 * @property string $id
 * @property string $tglmasukkeberatan
 * @property string $tgljatuhtempo
 * @property integer $namaperusahaan
 * @property string $qq
 * @property string $nomorsuratpermohonan
 * @property string $tanggalsuratpermohonan
 * @property string $suratpenetapan
 * @property integer $nospkpbm_spsa
 * @property string $tglspkpbm_spsa
 * @property string $jumlahtagihan
 * @property string $salah
 * @property string $nopib
 * @property string $tglpib
 * @property integer $namapfpd
 * @property string $jalur
 * @property integer $spkpbmgabungan
 * @property integer $nospkpbmgabungan
 * @property string $tglspkpbmgabungan
 * @property string $jumlahtagihanspkpbmlanjutan
 * @property string $jenisjaminan
 * @property string $nomorbpj_sspcp
 * @property string $tglbpj_sspcp
 * @property string $kasikeberatan
 * @property integer $ekspedisikankekasikeberatan
 * @property integer $namapemeriksa
 * @property integer $ditolakformal
 * @property integer $spkpbmlebih30hari
 * @property integer $spkpbmdibatalkan_direvisi
 * @property integer $nospkpbmrevisi
 * @property string $tglspkpbmrevisi
 * @property integer $dijawabdenganpenjelasan
 * @property integer $pengajuandibatalkan
 * @property string $tglterimasuratpembatalan
 * @property string $nosuratbatalkebaratan
 * @property string $tglsuratpembatalankeberatan
 * @property integer $diteruskan
 * @property string $nomorsuratpenerusan
 * @property string $tanggalsrtpenerusan
 * @property integer $diputuskan
 * @property string $nokep
 * @property string $tglkep
 * @property string $jenispenetapan
 * @property string $hasilkeputusan
 * @property string $tagihanhasilkep
 * @property integer $mintarisalah
 * @property string $nomornd
 * @property string $tanggalndrisalah
 * @property string $mintarisalahtambahan
 * @property integer $terimarisalah
 * @property string $tanggalterimarisalah
 * @property integer $mintaaudit
 * @property string $ndmintaaudit
 * @property string $tglndmintaaudit
 * @property integer $terimandlha
 * @property string $tanggalterimalha
 * @property string $nomorndlha
 * @property string $tglndlha
 * @property string $nomorlha
 * @property string $tgllha
 * @property integer $mintadata
 * @property string $srtmintadata
 * @property string $tglsrtdata
 * @property string $terimadatatambahan
 * @property string $tglterimadatatambahan
 * @property string $nosuratpengantardatatambahan
 * @property string $tglsurat
 * @property integer $dimintasub
 * @property integer $dimintarevisinotul
 * @property integer $nondpermintaannotulrevisi
 * @property string $tglndpermintaannotulrevisi
 * @property string $keterangan
 * @property string $noagendakantor
 * @property string $tglagenda
 * @property integer $diserahkankeseksi
 * @property string $tglpenyerahankeseksi
 * @property integer $diserahkankekabid
 * @property string $tglpenyerahankekabid
 * @property string $jenisbarang
 * @property string $hspib
 * @property string $tarifpib
 * @property string $hspfpd
 * @property string $tarifpfpd
 * @property string $hskeputusan
 * @property string $tarifkep
 * @property string $ketpenetapan
 * @property string $created_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $updated_at
 * @property string $idnoagenda
 * @property string $formalterbit
 * @property string $formalaju
 * @property string $mslh
 * @property string $teliti
 * @property string $pendpt
 * @property double $bm
 * @property double $bm_t
 * @property double $cukai
 * @property double $cukai_t
 * @property double $ppn
 * @property double $ppn_t
 * @property double $ppnbm
 * @property double $ppnbm_t
 * @property double $pph
 * @property double $pph_t
 * @property double $denda
 * @property double $denda_t
 * @property integer $berkasselesai
 * @property string $idttmohon
 *
 * @property \app\models\Daftarimportir $namaperusahaan0
 * @property \app\models\Daftarpfpd $namapfpd0
 * @property \app\models\Namapemeriksa $namapemeriksa0
 */
class Datakeberatan2016 extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tglmasukkeberatan', 'tgljatuhtempo', 'tanggalsuratpermohonan', 'tglspkpbm_spsa', 'tglpib', 'tglspkpbmgabungan', 'tglbpj_sspcp', 'tglspkpbmrevisi', 'tglterimasuratpembatalan', 'tglsuratpembatalankeberatan', 'tanggalsrtpenerusan', 'tglkep', 'tanggalndrisalah', 'tanggalterimarisalah', 'tglndmintaaudit', 'tanggalterimalha', 'tglndlha', 'tgllha', 'tglsrtdata', 'terimadatatambahan', 'tglterimadatatambahan', 'tglsurat', 'tglndpermintaannotulrevisi', 'tglagenda', 'tglpenyerahankeseksi', 'tglpenyerahankekabid', 'created_at', 'updated_at'], 'safe'],
            [['namaperusahaan', 'nospkpbm_spsa', 'namapfpd', 'spkpbmgabungan', 'nospkpbmgabungan', 'ekspedisikankekasikeberatan', 'namapemeriksa', 'ditolakformal', 'spkpbmlebih30hari', 'spkpbmdibatalkan_direvisi', 'nospkpbmrevisi', 'dijawabdenganpenjelasan', 'pengajuandibatalkan', 'diteruskan', 'diputuskan', 'mintarisalah', 'terimarisalah', 'mintaaudit', 'terimandlha', 'mintadata', 'dimintasub', 'dimintarevisinotul', 'nondpermintaannotulrevisi', 'diserahkankeseksi', 'diserahkankekabid', 'created_by', 'updated_by', 'berkasselesai', 'idttmohon'], 'integer'],
            [['jumlahtagihan', 'jumlahtagihanspkpbmlanjutan', 'tagihanhasilkep', 'bm', 'bm_t', 'cukai', 'cukai_t', 'ppn', 'ppn_t', 'ppnbm', 'ppnbm_t', 'pph', 'pph_t', 'denda', 'denda_t'], 'number'],
            [['jalur', 'jenisjaminan', 'kasikeberatan', 'jenispenetapan', 'hasilkeputusan', 'keterangan', 'formalterbit', 'formalaju'], 'string'],
            [['qq', 'nomorbpj_sspcp', 'nosuratbatalkebaratan', 'nomorsuratpenerusan', 'nomornd', 'ndmintaaudit', 'nomorndlha', 'nomorlha', 'srtmintadata', 'nosuratpengantardatatambahan', 'noagendakantor', 'hspib', 'tarifpib', 'hspfpd', 'tarifpfpd', 'hskeputusan', 'tarifkep', 'idnoagenda'], 'string', 'max' => 50],
            [['nomorsuratpermohonan', 'suratpenetapan', 'salah', 'nopib', 'nokep', 'jenisbarang', 'ketpenetapan'], 'string', 'max' => 255],
            [['mintarisalahtambahan', 'mslh', 'teliti', 'pendpt'], 'string', 'max' => 250]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datakeberatan2016';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tglmasukkeberatan' => 'Tglmasukkeberatan',
            'tgljatuhtempo' => 'Tgljatuhtempo',
            'namaperusahaan' => 'Namaperusahaan',
            'qq' => 'Qq',
            'nomorsuratpermohonan' => 'Nomorsuratpermohonan',
            'tanggalsuratpermohonan' => 'Tanggalsuratpermohonan',
            'suratpenetapan' => 'Suratpenetapan',
            'nospkpbm_spsa' => 'Nospkpbm Spsa',
            'tglspkpbm_spsa' => 'Tglspkpbm Spsa',
            'jumlahtagihan' => 'Jumlahtagihan',
            'salah' => 'Salah',
            'nopib' => 'Nopib',
            'tglpib' => 'Tglpib',
            'namapfpd' => 'Namapfpd',
            'jalur' => 'Jalur',
            'spkpbmgabungan' => 'Spkpbmgabungan',
            'nospkpbmgabungan' => 'Nospkpbmgabungan',
            'tglspkpbmgabungan' => 'Tglspkpbmgabungan',
            'jumlahtagihanspkpbmlanjutan' => 'Jumlahtagihanspkpbmlanjutan',
            'jenisjaminan' => 'Jenisjaminan',
            'nomorbpj_sspcp' => 'Nomorbpj Sspcp',
            'tglbpj_sspcp' => 'Tglbpj Sspcp',
            'kasikeberatan' => 'Kasikeberatan',
            'ekspedisikankekasikeberatan' => 'Ekspedisikankekasikeberatan',
            'namapemeriksa' => 'Namapemeriksa',
            'ditolakformal' => 'Ditolakformal',
            'spkpbmlebih30hari' => 'Spkpbmlebih30hari',
            'spkpbmdibatalkan_direvisi' => 'Spkpbmdibatalkan Direvisi',
            'nospkpbmrevisi' => 'Nospkpbmrevisi',
            'tglspkpbmrevisi' => 'Tglspkpbmrevisi',
            'dijawabdenganpenjelasan' => 'Dijawabdenganpenjelasan',
            'pengajuandibatalkan' => 'Pengajuandibatalkan',
            'tglterimasuratpembatalan' => 'Tglterimasuratpembatalan',
            'nosuratbatalkebaratan' => 'Nosuratbatalkebaratan',
            'tglsuratpembatalankeberatan' => 'Tglsuratpembatalankeberatan',
            'diteruskan' => 'Diteruskan',
            'nomorsuratpenerusan' => 'Nomorsuratpenerusan',
            'tanggalsrtpenerusan' => 'Tanggalsrtpenerusan',
            'diputuskan' => 'Diputuskan',
            'nokep' => 'Nokep',
            'tglkep' => 'Tglkep',
            'jenispenetapan' => 'Jenispenetapan',
            'hasilkeputusan' => 'Hasilkeputusan',
            'tagihanhasilkep' => 'Tagihanhasilkep',
            'mintarisalah' => 'Mintarisalah',
            'nomornd' => 'Nomornd',
            'tanggalndrisalah' => 'Tanggalndrisalah',
            'mintarisalahtambahan' => 'Mintarisalahtambahan',
            'terimarisalah' => 'Terimarisalah',
            'tanggalterimarisalah' => 'Tanggalterimarisalah',
            'mintaaudit' => 'Mintaaudit',
            'ndmintaaudit' => 'Ndmintaaudit',
            'tglndmintaaudit' => 'Tglndmintaaudit',
            'terimandlha' => 'Terimandlha',
            'tanggalterimalha' => 'Tanggalterimalha',
            'nomorndlha' => 'Nomorndlha',
            'tglndlha' => 'Tglndlha',
            'nomorlha' => 'Nomorlha',
            'tgllha' => 'Tgllha',
            'mintadata' => 'Mintadata',
            'srtmintadata' => 'Srtmintadata',
            'tglsrtdata' => 'Tglsrtdata',
            'terimadatatambahan' => 'Terimadatatambahan',
            'tglterimadatatambahan' => 'Tglterimadatatambahan',
            'nosuratpengantardatatambahan' => 'Nosuratpengantardatatambahan',
            'tglsurat' => 'Tglsurat',
            'dimintasub' => 'Dimintasub',
            'dimintarevisinotul' => 'Dimintarevisinotul',
            'nondpermintaannotulrevisi' => 'Nondpermintaannotulrevisi',
            'tglndpermintaannotulrevisi' => 'Tglndpermintaannotulrevisi',
            'keterangan' => 'Keterangan',
            'noagendakantor' => 'Noagendakantor',
            'tglagenda' => 'Tglagenda',
            'diserahkankeseksi' => 'Diserahkankeseksi',
            'tglpenyerahankeseksi' => 'Tglpenyerahankeseksi',
            'diserahkankekabid' => 'Diserahkankekabid',
            'tglpenyerahankekabid' => 'Tglpenyerahankekabid',
            'jenisbarang' => 'Jenisbarang',
            'hspib' => 'Hspib',
            'tarifpib' => 'Tarifpib',
            'hspfpd' => 'Hspfpd',
            'tarifpfpd' => 'Tarifpfpd',
            'hskeputusan' => 'Hskeputusan',
            'tarifkep' => 'Tarifkep',
            'ketpenetapan' => 'Ketpenetapan',
            'idnoagenda' => 'Idnoagenda',
            'formalterbit' => 'Formalterbit',
            'formalaju' => 'Formalaju',
            'mslh' => 'Mslh',
            'teliti' => 'Teliti',
            'pendpt' => 'Pendpt',
            'bm' => 'Bm',
            'bm_t' => 'Bm T',
            'cukai' => 'Cukai',
            'cukai_t' => 'Cukai T',
            'ppn' => 'Ppn',
            'ppn_t' => 'Ppn T',
            'ppnbm' => 'Ppnbm',
            'ppnbm_t' => 'Ppnbm T',
            'pph' => 'Pph',
            'pph_t' => 'Pph T',
            'denda' => 'Denda',
            'denda_t' => 'Denda T',
            'berkasselesai' => 'Berkasselesai',
            'idttmohon' => 'Idttmohon',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamaperusahaan0()
    {
        return $this->hasOne(\app\models\Daftarimportir::className(), ['id' => 'namaperusahaan']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamapfpd0()
    {
        return $this->hasOne(\app\models\Daftarpfpd::className(), ['id' => 'namapfpd']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNamapemeriksa0()
    {
        return $this->hasOne(\app\models\Namapemeriksa::className(), ['id' => 'namapemeriksa']);
    }
    
/**
     * @inheritdoc
     * @return array mixed
     */ 
    public function behaviors()
    {
        return [
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\Datakeberatan2016Query the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\Datakeberatan2016Query(get_called_class());
    }
}
