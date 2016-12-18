<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Namapemeriksa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Namapemeriksa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="namapemeriksa-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Namapemeriksa'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'nama',
        'nip',
        'status',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
if($providerDatakeberatan2016->totalCount){
    $gridColumnDatakeberatan2016 = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
        'tglmasukkeberatan',
        [
                'attribute' => 'namaperusahaan0.id',
                'label' => 'Namaperusahaan'
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
                'label' => 'Namapfpd'
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
    ];
    echo Gridview::widget([
        'dataProvider' => $providerDatakeberatan2016,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => Html::encode('Datakeberatan2016'),
        ],
        'panelHeadingTemplate' => '<h4>{heading}</h4>{summary}',
        'toggleData' => false,
        'columns' => $gridColumnDatakeberatan2016
    ]);
}
?>
    </div>
</div>
