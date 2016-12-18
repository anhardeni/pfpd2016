<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TtpermohonanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-ttpermohonan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'noagendakantor')->textInput(['maxlength' => true, 'placeholder' => 'Noagendakantor']) ?>

    <?= $form->field($model, 'tglterimapermohonan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglterimapermohonan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'tgljatuhtempo')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgljatuhtempo',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'idpemohon')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Daftarimportir'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?php /* echo $form->field($model, 'nosuratpermohonan')->textInput(['maxlength' => true, 'placeholder' => 'Nosuratpermohonan']) */ ?>

    <?php /* echo $form->field($model, 'tglsuratpermohonan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglsuratpermohonan',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'l_bpj')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_billing')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_suratpernyataan')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_sptnp')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_spp')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_spsa')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_penetapanpabeanlainnya')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_pib')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_invoice')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_packinglist')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_awb_bl')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'l_dokpelengkaplainnya')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'berkaslengkapbenar')->checkbox() */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
