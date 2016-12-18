<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Datakeberatan2016 */

$this->title = 'Create Datakeberatan2016';
$this->params['breadcrumbs'][] = ['label' => 'Datakeberatan2016', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakeberatan2016-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
