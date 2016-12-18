<?php

namespace app\models;

use \app\models\base\Datakeberatan2016 as BaseDatakeberatan2016;

/**
 * This is the model class for table "datakeberatan2016".
 */
class Datakeberatan2016 extends BaseDatakeberatan2016
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['tglmasukkeberatan', 'tgljatuhtempo', 'tanggalsuratpermohonan', 'tglspkpbm_spsa', 'tglpib', 'tglspkpbmgabungan', 'tglbpj_sspcp', 'tglspkpbmrevisi', 'tglterimasuratpembatalan', 'tglsuratpembatalankeberatan', 'tanggalsrtpenerusan', 'tglkep', 'tanggalndrisalah', 'tanggalterimarisalah', 'tglndmintaaudit', 'tanggalterimalha', 'tglndlha', 'tgllha', 'tglsrtdata', 'terimadatatambahan', 'tglterimadatatambahan', 'tglsurat', 'tglndpermintaannotulrevisi', 'tglagenda', 'tglpenyerahankeseksi', 'tglpenyerahankekabid', 'created_at', 'updated_at'], 'safe'],
            [['namaperusahaan', 'nospkpbm_spsa', 'namapfpd', 'spkpbmgabungan', 'nospkpbmgabungan', 'ekspedisikankekasikeberatan', 'namapemeriksa', 'ditolakformal', 'spkpbmlebih30hari', 'spkpbmdibatalkan_direvisi', 'nospkpbmrevisi', 'dijawabdenganpenjelasan', 'pengajuandibatalkan', 'diteruskan', 'diputuskan', 'mintarisalah', 'terimarisalah', 'mintaaudit', 'terimandlha', 'mintadata', 'dimintasub', 'dimintarevisinotul', 'nondpermintaannotulrevisi', 'diserahkankeseksi', 'diserahkankekabid', 'created_by', 'updated_by', 'berkasselesai', 'idttmohon'], 'integer'],
            [['jumlahtagihan', 'jumlahtagihanspkpbmlanjutan', 'tagihanhasilkep', 'bm', 'bm_t', 'cukai', 'cukai_t', 'ppn', 'ppn_t', 'ppnbm', 'ppnbm_t', 'pph', 'pph_t', 'denda', 'denda_t'], 'number'],
            [['jalur', 'jenisjaminan', 'kasikeberatan', 'jenispenetapan', 'hasilkeputusan', 'keterangan', 'formalterbit', 'formalaju'], 'string'],
            [['qq', 'nomorbpj_sspcp', 'nosuratbatalkebaratan', 'nomorsuratpenerusan', 'nomornd', 'ndmintaaudit', 'nomorndlha', 'nomorlha', 'srtmintadata', 'nosuratpengantardatatambahan', 'noagendakantor', 'hspib', 'tarifpib', 'hspfpd', 'tarifpfpd', 'hskeputusan', 'tarifkep', 'idnoagenda'], 'string', 'max' => 50],
            [['nomorsuratpermohonan', 'suratpenetapan', 'salah', 'nopib', 'nokep', 'jenisbarang', 'ketpenetapan'], 'string', 'max' => 255],
            [['mintarisalahtambahan', 'mslh', 'teliti', 'pendpt'], 'string', 'max' => 250]
        ]);
    }
	
}
