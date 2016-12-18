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
        <div class="col-sm-3" style="margin-top: 15px">
<?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . 'PDF', 
                ['pdf', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => 'Will open the generated PDF file in a new window'
                ]
            )?>
            
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
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
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-datakeberatan2016']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Datakeberatan2016'),
        ],
        'columns' => $gridColumnDatakeberatan2016
    ]);
}
?>
    </div>
</div>
