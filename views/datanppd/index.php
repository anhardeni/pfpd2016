<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\Datakeberatan2016Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Datakeberatan2016';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="datakeberatan2016-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Datakeberatan2016', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
        'tglmasukkeberatan',
        'tgljatuhtempo',
        [
                'attribute' => 'namaperusahaan',
                'label' => 'Namaperusahaan',
                'value' => function($model){
                    return $model->namaperusahaan0->id;
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->asArray()->all(), 'id', 'id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Daftarimportir', 'id' => 'grid-datakeberatan2016-search-namaperusahaan']
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
                'attribute' => 'namapfpd',
                'label' => 'Namapfpd',
                'value' => function($model){
                    return $model->namapfpd0->id;
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Daftarpfpd::find()->asArray()->all(), 'id', 'id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Daftarpfpd', 'id' => 'grid-datakeberatan2016-search-namapfpd']
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
                'attribute' => 'namapemeriksa',
                'label' => 'Namapemeriksa',
                'value' => function($model){
                    return $model->namapemeriksa0->id;
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Namapemeriksa::find()->asArray()->all(), 'id', 'id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Namapemeriksa', 'id' => 'grid-datakeberatan2016-search-namapemeriksa']
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
        'berkasselesai',
        'idttmohon',
        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ]; 
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-datakeberatan2016']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'export' => false,
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{export}',
            ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumn,
                'target' => ExportMenu::TARGET_BLANK,
                'fontAwesome' => true,
                'dropdownOptions' => [
                    'label' => 'Full',
                    'class' => 'btn btn-default',
                    'itemsBefore' => [
                        '<li class="dropdown-header">Export All Data</li>',
                    ],
                ],
                'exportConfig' => [
                    ExportMenu::FORMAT_PDF => false
                ]
            ]) ,
        ],
    ]); ?>

</div>
