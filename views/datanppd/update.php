<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datakeberatan2016 */

$this->title = 'Update Datakeberatan2016: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Datakeberatan2016', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datakeberatan2016-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
