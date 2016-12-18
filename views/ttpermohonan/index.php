<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\TtpermohonanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Ttpermohonan';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="ttpermohonan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ttpermohonan', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
        'noagendakantor',
        'tglterimapermohonan',
        'tgljatuhtempo','nosuratpermohonan',
        'tglsuratpermohonan',
        [
                'attribute' => 'idpemohon',
                'label' => 'Idpemohon',
                'value' => function($model){
                    return $model->pemohon->namaimp;
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->asArray()->all(), 'id', 'namaimp'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Daftarimportir', 'id' => 'grid-ttpermohonan-search-idpemohon']
            ],
        'nosuratpermohonan',
        'tglsuratpermohonan',
     //   'l_bpj',
     //   'l_billing',
      //  'l_suratpernyataan',
     //   'l_sptnp',
     //   'l_spp',
     //   'l_spsa',
     //   'l_penetapanpabeanlainnya',
     //   'l_pib',
     //   'l_invoice',
     //   'l_packinglist',
    //    'l_awb_bl',
     //   'l_dokpelengkaplainnya',
        [
           'class'=>'kartik\grid\BooleanColumn',
             'attribute'=>'berkaslengkapbenar', 
                     'trueLabel' => 'Yes', 
        'falseLabel' => 'No'
       //      'vAlign'=>'middle'
], 
      //  'berkaslengkapbenar',
        ['class' => 'yii\grid\ActionColumn',
             //   'attribute' => 'cetak TT',
                 //   'label' => 'Cetak Tt',
                'template' => '{cetak}',
                'buttons' => [
                 'cetak' => function($url, $model){
                   return  Html::a('<span class="glyphicon glyphicon-folder-open"></span>', ['cetaktt','id'=>$model->id],['class'=>'btn btn-success']);
                   // return  Html::a('Printt', ['cetaktt','id'=>$model->id], ['class'=>'btn btn-success']);
                    }
                ]
        ],

        ['class' => 'yii\grid\ActionColumn'],
    ]; 
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-ttpermohonan']],
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
