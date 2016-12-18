<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsDetail */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ims Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-detail-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Ims Detail'.' '. Html::encode($this->title) ?></h2>
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
        [
            'attribute' => 'linkIms.id',
            'label' => 'Link Ims',
        ],
        'urbar',
        'bm',
        'trf',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
