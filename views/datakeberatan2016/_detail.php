<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Datakeberatan2016 */

?>
<div class="datakeberatan2016-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->id) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'tglmasukkeberatan',
        'tgljatuhtempo',
        [
            'attribute' => 'namaperusahaan0.id',
            'label' => 'Namaperusahaan',
        ],
        'qq',
        'nomorsuratpermohonan',
        'tanggalsuratpermohonan',
        'suratpenetapan',
        'nospkpbm_spsa',
        'tglspkpbm_spsa',
        'jumlahtagihan',
        'salah',
        'nopib',
        'tglpib',
        [
            'attribute' => 'namapfpd0.id',
            'label' => 'Namapfpd',
        ],
        'jalur',
        'spkpbmgabungan',
        'nospkpbmgabungan',
        'tglspkpbmgabungan',
        'jumlahtagihanspkpbmlanjutan',
        'jenisjaminan',
        'nomorbpj_sspcp',
        'tglbpj_sspcp',
        'kasikeberatan',
        'ekspedisikankekasikeberatan',
        [
            'attribute' => 'namapemeriksa0.id',
            'label' => 'Namapemeriksa',
        ],
        'ditolakformal',
        'spkpbmlebih30hari',
        'spkpbmdibatalkan_direvisi',
        'nospkpbmrevisi',
        'tglspkpbmrevisi',
        'dijawabdenganpenjelasan',
        'pengajuandibatalkan',
        'tglterimasuratpembatalan',
        'nosuratbatalkebaratan',
        'tglsuratpembatalankeberatan',
        'diteruskan',
        'nomorsuratpenerusan',
        'tanggalsrtpenerusan',
        'diputuskan',
        'nokep',
        'tglkep',
        'jenispenetapan',
        'hasilkeputusan',
        'tagihanhasilkep',
        'mintarisalah',
        'nomornd',
        'tanggalndrisalah',
        'mintarisalahtambahan',
        'terimarisalah',
        'tanggalterimarisalah',
        'mintaaudit',
        'ndmintaaudit',
        'tglndmintaaudit',
        'terimandlha',
        'tanggalterimalha',
        'nomorndlha',
        'tglndlha',
        'nomorlha',
        'tgllha',
        'mintadata',
        'srtmintadata',
        'tglsrtdata',
        'terimadatatambahan',
        'tglterimadatatambahan',
        'nosuratpengantardatatambahan',
        'tglsurat',
        'dimintasub',
        'dimintarevisinotul',
        'nondpermintaannotulrevisi',
        'tglndpermintaannotulrevisi',
        'keterangan:ntext',
        'noagendakantor',
        'tglagenda',
        'diserahkankeseksi',
        'tglpenyerahankeseksi',
        'diserahkankekabid',
        'tglpenyerahankekabid',
        'jenisbarang',
        'hspib',
        'tarifpib',
        'hspfpd',
        'tarifpfpd',
        'hskeputusan',
        'tarifkep',
        'ketpenetapan',
        'idnoagenda',
        'formalterbit',
        'formalaju',
        'mslh',
        'teliti',
        'pendpt',
        'bm',
        'bm_t',
        'cukai',
        'cukai_t',
        'ppn',
        'ppn_t',
        'ppnbm',
        'ppnbm_t',
        'pph',
        'pph_t',
        'denda',
        'denda_t',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>