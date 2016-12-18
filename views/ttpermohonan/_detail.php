<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Ttpermohonan */

?>
<div class="ttpermohonan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Html::encode($model->id) ?></h2>
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