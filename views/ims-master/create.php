<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ImsMaster */

$this->title = 'Create Ims Master';
$this->params['breadcrumbs'][] = ['label' => 'Ims Master', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
