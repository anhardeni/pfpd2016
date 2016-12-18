<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsMaster */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ims Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-master-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Ims Master'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
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
        'agenda',
        'tgl',
        'npwp',
        'urbar',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
if($providerImsDetail->totalCount){
    $gridColumnImsDetail = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
                        'urbar',
            'bm',
            'trf',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerImsDetail,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-ims-detail']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Ims Detail'),
        ],
        'export' => false,
        'columns' => $gridColumnImsDetail
    ]);
}
?>
    </div>
</div>
