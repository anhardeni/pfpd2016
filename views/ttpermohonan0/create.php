<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ttpermohonan */

$this->title = 'Create Ttpermohonan';
$this->params['breadcrumbs'][] = ['label' => 'Ttpermohonan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ttpermohonan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
