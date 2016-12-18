<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datakeberatan2016;

/**
 * app\models\Datakeberatan2016Search represents the model behind the search form about `app\models\Datakeberatan2016`.
 */
 class Datakeberatan2016Search extends Datakeberatan2016
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'namaperusahaan', 'nospkpbm_spsa', 'namapfpd', 'spkpbmgabungan', 'nospkpbmgabungan', 'ekspedisikankekasikeberatan', 'namapemeriksa', 'ditolakformal', 'spkpbmlebih30hari', 'spkpbmdibatalkan_direvisi', 'nospkpbmrevisi', 'dijawabdenganpenjelasan', 'pengajuandibatalkan', 'diteruskan', 'diputuskan', 'mintarisalah', 'terimarisalah', 'mintaaudit', 'terimandlha', 'mintadata', 'dimintasub', 'dimintarevisinotul', 'nondpermintaannotulrevisi', 'diserahkankeseksi', 'diserahkankekabid', 'created_by', 'updated_by', 'berkasselesai', 'idttmohon'], 'integer'],
            [['tglmasukkeberatan', 'tgljatuhtempo', 'qq', 'nomorsuratpermohonan', 'tanggalsuratpermohonan', 'suratpenetapan', 'tglspkpbm_spsa', 'salah', 'nopib', 'tglpib', 'jalur', 'tglspkpbmgabungan', 'jenisjaminan', 'nomorbpj_sspcp', 'tglbpj_sspcp', 'kasikeberatan', 'tglspkpbmrevisi', 'tglterimasuratpembatalan', 'nosuratbatalkebaratan', 'tglsuratpembatalankeberatan', 'nomorsuratpenerusan', 'tanggalsrtpenerusan', 'nokep', 'tglkep', 'jenispenetapan', 'hasilkeputusan', 'nomornd', 'tanggalndrisalah', 'mintarisalahtambahan', 'tanggalterimarisalah', 'ndmintaaudit', 'tglndmintaaudit', 'tanggalterimalha', 'nomorndlha', 'tglndlha', 'nomorlha', 'tgllha', 'srtmintadata', 'tglsrtdata', 'terimadatatambahan', 'tglterimadatatambahan', 'nosuratpengantardatatambahan', 'tglsurat', 'tglndpermintaannotulrevisi', 'keterangan', 'noagendakantor', 'tglagenda', 'tglpenyerahankeseksi', 'tglpenyerahankekabid', 'jenisbarang', 'hspib', 'tarifpib', 'hspfpd', 'tarifpfpd', 'hskeputusan', 'tarifkep', 'ketpenetapan', 'created_at', 'updated_at', 'idnoagenda', 'formalterbit', 'formalaju', 'mslh', 'teliti', 'pendpt'], 'safe'],
            [['jumlahtagihan', 'jumlahtagihanspkpbmlanjutan', 'tagihanhasilkep', 'bm', 'bm_t', 'cukai', 'cukai_t', 'ppn', 'ppn_t', 'ppnbm', 'ppnbm_t', 'pph', 'pph_t', 'denda', 'denda_t'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Datakeberatan2016::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tglmasukkeberatan' => $this->tglmasukkeberatan,
            'tgljatuhtempo' => $this->tgljatuhtempo,
            'namaperusahaan' => $this->namaperusahaan,
            'tanggalsuratpermohonan' => $this->tanggalsuratpermohonan,
            'nospkpbm_spsa' => $this->nospkpbm_spsa,
            'tglspkpbm_spsa' => $this->tglspkpbm_spsa,
            'jumlahtagihan' => $this->jumlahtagihan,
            'tglpib' => $this->tglpib,
            'namapfpd' => $this->namapfpd,
            'spkpbmgabungan' => $this->spkpbmgabungan,
            'nospkpbmgabungan' => $this->nospkpbmgabungan,
            'tglspkpbmgabungan' => $this->tglspkpbmgabungan,
            'jumlahtagihanspkpbmlanjutan' => $this->jumlahtagihanspkpbmlanjutan,
            'tglbpj_sspcp' => $this->tglbpj_sspcp,
            'ekspedisikankekasikeberatan' => $this->ekspedisikankekasikeberatan,
            'namapemeriksa' => $this->namapemeriksa,
            'ditolakformal' => $this->ditolakformal,
            'spkpbmlebih30hari' => $this->spkpbmlebih30hari,
            'spkpbmdibatalkan_direvisi' => $this->spkpbmdibatalkan_direvisi,
            'nospkpbmrevisi' => $this->nospkpbmrevisi,
            'tglspkpbmrevisi' => $this->tglspkpbmrevisi,
            'dijawabdenganpenjelasan' => $this->dijawabdenganpenjelasan,
            'pengajuandibatalkan' => $this->pengajuandibatalkan,
            'tglterimasuratpembatalan' => $this->tglterimasuratpembatalan,
            'tglsuratpembatalankeberatan' => $this->tglsuratpembatalankeberatan,
            'diteruskan' => $this->diteruskan,
            'tanggalsrtpenerusan' => $this->tanggalsrtpenerusan,
            'diputuskan' => $this->diputuskan,
            'tglkep' => $this->tglkep,
            'tagihanhasilkep' => $this->tagihanhasilkep,
            'mintarisalah' => $this->mintarisalah,
            'tanggalndrisalah' => $this->tanggalndrisalah,
            'terimarisalah' => $this->terimarisalah,
            'tanggalterimarisalah' => $this->tanggalterimarisalah,
            'mintaaudit' => $this->mintaaudit,
            'tglndmintaaudit' => $this->tglndmintaaudit,
            'terimandlha' => $this->terimandlha,
            'tanggalterimalha' => $this->tanggalterimalha,
            'tglndlha' => $this->tglndlha,
            'tgllha' => $this->tgllha,
            'mintadata' => $this->mintadata,
            'tglsrtdata' => $this->tglsrtdata,
            'terimadatatambahan' => $this->terimadatatambahan,
            'tglterimadatatambahan' => $this->tglterimadatatambahan,
            'tglsurat' => $this->tglsurat,
            'dimintasub' => $this->dimintasub,
            'dimintarevisinotul' => $this->dimintarevisinotul,
            'nondpermintaannotulrevisi' => $this->nondpermintaannotulrevisi,
            'tglndpermintaannotulrevisi' => $this->tglndpermintaannotulrevisi,
            'tglagenda' => $this->tglagenda,
            'diserahkankeseksi' => $this->diserahkankeseksi,
            'tglpenyerahankeseksi' => $this->tglpenyerahankeseksi,
            'diserahkankekabid' => $this->diserahkankekabid,
            'tglpenyerahankekabid' => $this->tglpenyerahankekabid,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'bm' => $this->bm,
            'bm_t' => $this->bm_t,
            'cukai' => $this->cukai,
            'cukai_t' => $this->cukai_t,
            'ppn' => $this->ppn,
            'ppn_t' => $this->ppn_t,
            'ppnbm' => $this->ppnbm,
            'ppnbm_t' => $this->ppnbm_t,
            'pph' => $this->pph,
            'pph_t' => $this->pph_t,
            'denda' => $this->denda,
            'denda_t' => $this->denda_t,
            'berkasselesai' => $this->berkasselesai,
            'idttmohon' => $this->idttmohon,
        ]);

        $query->andFilterWhere(['like', 'qq', $this->qq])
            ->andFilterWhere(['like', 'nomorsuratpermohonan', $this->nomorsuratpermohonan])
            ->andFilterWhere(['like', 'suratpenetapan', $this->suratpenetapan])
            ->andFilterWhere(['like', 'salah', $this->salah])
            ->andFilterWhere(['like', 'nopib', $this->nopib])
            ->andFilterWhere(['like', 'jalur', $this->jalur])
            ->andFilterWhere(['like', 'jenisjaminan', $this->jenisjaminan])
            ->andFilterWhere(['like', 'nomorbpj_sspcp', $this->nomorbpj_sspcp])
            ->andFilterWhere(['like', 'kasikeberatan', $this->kasikeberatan])
            ->andFilterWhere(['like', 'nosuratbatalkebaratan', $this->nosuratbatalkebaratan])
            ->andFilterWhere(['like', 'nomorsuratpenerusan', $this->nomorsuratpenerusan])
            ->andFilterWhere(['like', 'nokep', $this->nokep])
            ->andFilterWhere(['like', 'jenispenetapan', $this->jenispenetapan])
            ->andFilterWhere(['like', 'hasilkeputusan', $this->hasilkeputusan])
            ->andFilterWhere(['like', 'nomornd', $this->nomornd])
            ->andFilterWhere(['like', 'mintarisalahtambahan', $this->mintarisalahtambahan])
            ->andFilterWhere(['like', 'ndmintaaudit', $this->ndmintaaudit])
            ->andFilterWhere(['like', 'nomorndlha', $this->nomorndlha])
            ->andFilterWhere(['like', 'nomorlha', $this->nomorlha])
            ->andFilterWhere(['like', 'srtmintadata', $this->srtmintadata])
            ->andFilterWhere(['like', 'nosuratpengantardatatambahan', $this->nosuratpengantardatatambahan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'noagendakantor', $this->noagendakantor])
            ->andFilterWhere(['like', 'jenisbarang', $this->jenisbarang])
            ->andFilterWhere(['like', 'hspib', $this->hspib])
            ->andFilterWhere(['like', 'tarifpib', $this->tarifpib])
            ->andFilterWhere(['like', 'hspfpd', $this->hspfpd])
            ->andFilterWhere(['like', 'tarifpfpd', $this->tarifpfpd])
            ->andFilterWhere(['like', 'hskeputusan', $this->hskeputusan])
            ->andFilterWhere(['like', 'tarifkep', $this->tarifkep])
            ->andFilterWhere(['like', 'ketpenetapan', $this->ketpenetapan])
            ->andFilterWhere(['like', 'idnoagenda', $this->idnoagenda])
            ->andFilterWhere(['like', 'formalterbit', $this->formalterbit])
            ->andFilterWhere(['like', 'formalaju', $this->formalaju])
            ->andFilterWhere(['like', 'mslh', $this->mslh])
            ->andFilterWhere(['like', 'teliti', $this->teliti])
            ->andFilterWhere(['like', 'pendpt', $this->pendpt]);

        return $dataProvider;
    }
}
