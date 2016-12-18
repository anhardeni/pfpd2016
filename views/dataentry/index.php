<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\Datakeberatan2016Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'DataEntry';
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
        'noagendakantor',
        'tglagenda',
        'tgljatuhtempo',
        [
                'attribute' => 'namaperusahaan',
                'label' => 'Namaperusahaan',
                'value' => function($model){
                    return $model->namaperusahaan0->namaimp;
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->asArray()->all(), 'id', 'namaimp'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Daftarimportir', 'id' => 'grid-datakeberatan2016-search-namaperusahaan']
            ],
      //  'qq',
        'nomorsuratpermohonan',
        'tanggalsuratpermohonan',
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
      
        'berkasselesai',
        //'idttmohon',
                        ['class' => 'yii\grid\ActionColumn',
             //   'attribute' => 'cetak TT',
                 //   'label' => 'Cetak Tt',
                'template' => '{update}',
                'buttons' => [
                 'cetak' => function($url, $model){
                   return  Html::a('<span class="glyphicon glyphicon-folder-open"></span>', ['update','id'=>$model->id],['class'=>'btn btn-success']);
                   // return  Html::a('Printt', ['cetaktt','id'=>$model->id], ['class'=>'btn btn-success']);
                    }
                ]
        ],
                        ['class' => 'yii\grid\ActionColumn',
             //   'attribute' => 'cetak TT',
                 //   'label' => 'Cetak Tt',
                'template' => '{cetak}',
                'buttons' => [
                 'cetak' => function($url, $model){
                   return  Html::a('<span class="glyphicon glyphicon-folder-open"></span>', ['cetakdisposisi','id'=>$model->id],['class'=>'btn btn-success']);
                   // return  Html::a('Printt', ['cetaktt','id'=>$model->id], ['class'=>'btn btn-spdateuccess']);
                    }
                ]
        ],
        [
         //  'class' => 'yii\grid\ActionColumn',
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
