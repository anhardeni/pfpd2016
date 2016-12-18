<?php

/* @var $this yii\web\View */
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

    <p>
        <?= Html::a('Tanda terima permohonan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'visible' => false],
        'noagendakantor',
        'tglterimapermohonan',
        'tgljatuhtempo',
        
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
                'filterInputOptions' => ['placeholder' => 'Daftarimportir', 'id' => 'grid--idpemohon']
            ],
       'nosuratpermohonan',
       'tglsuratpermohonan',
      //  'l_bpj',
      //  'l_billing',
      //  'l_suratpernyataan',
      //  'l_sptnp',
      //  'l_spp',
      //  'l_spsa',
      //  'l_penetapanpabeanlainnya',
      //  'l_pib',
      //  'l_invoice',
      //  'l_packinglist',
      //  'l_awb_bl',
      //  'l_dokpelengkaplainnya',
    //   [
     //       'class'=>'kartik\grid\BooleanColumn',
     //        'attribute'=>'berkaslengkapbenar', 
     //        'vAlign'=>'middle'
], 
       'berkaslengkapbenar',
        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ]; 
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
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
