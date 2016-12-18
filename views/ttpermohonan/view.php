<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Ttpermohonan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ttpermohonan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttpermohonan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Ttpermohonan'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">

              <?= Html::a( 'Index', ['index'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'noagendakantor',
        'tglterimapermohonan',
        'tgljatuhtempo',
        [
            'attribute' => 'pemohon.id',
            'label' => 'Idpemohon',
        ],
        'nosuratpermohonan',
        'tglsuratpermohonan',
        'l_bpj',
        'l_billing',
        'l_suratpernyataan',
        'l_sptnp',
        'l_spp',
        'l_spsa',
        'l_penetapanpabeanlainnya',
        'l_pib',
        'l_invoice',
        'l_packinglist',
        'l_awb_bl',
        'l_dokpelengkaplainnya',
        'berkaslengkapbenar',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
