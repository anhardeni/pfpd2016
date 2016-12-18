<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Namapemeriksa */

$this->title = 'Create Namapemeriksa';
$this->params['breadcrumbs'][] = ['label' => 'Namapemeriksa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="namapemeriksa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
