<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ImsDetail */

$this->title = 'Create Ims Detail';
$this->params['breadcrumbs'][] = ['label' => 'Ims Detail', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
