<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ttpermohonan */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="ttpermohonan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'noagendakantor')->textInput(['maxlength' => true, 'placeholder' => 'Noagendakantor']) ?>

    <?= $form->field($model, 'tglterimapermohonan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => false,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglterimapermohonan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    

    <?= $form->field($model, 'idpemohon')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->orderBy('id')->asArray()->all(), 'id', 'namaimp'),
        'options' => ['placeholder' => 'Choose Daftarimportir'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nosuratpermohonan')->textInput(['maxlength' => true, 'placeholder' => 'Nosuratpermohonan']) ?>

    <?= $form->field($model, 'tglsuratpermohonan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => false,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglsuratpermohonan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'l_bpj')->checkbox() ?>

    <?= $form->field($model, 'l_billing')->checkbox() ?>

    <?= $form->field($model, 'l_suratpernyataan')->checkbox() ?>

    <?= $form->field($model, 'l_sptnp')->checkbox() ?>

    <?= $form->field($model, 'l_spp')->checkbox() ?>

    <?= $form->field($model, 'l_spsa')->checkbox() ?>

    <?= $form->field($model, 'l_penetapanpabeanlainnya')->checkbox() ?>

    <?= $form->field($model, 'l_pib')->checkbox() ?>

    <?= $form->field($model, 'l_invoice')->checkbox() ?>

    <?= $form->field($model, 'l_packinglist')->checkbox() ?>

    <?= $form->field($model, 'l_awb_bl')->checkbox() ?>

    <?= $form->field($model, 'l_dokpelengkaplainnya')->checkbox() ?>

    <?= $form->field($model, 'berkaslengkapbenar')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$wizard_config = [
    'id' => 'stepwizard',
    'steps' => [
        1 => [
            'title' => 'Step 1',
            'icon' => 'glyphicon glyphicon-cloud-download',
            'content' => '<h3>Step 1</h3>This is step 1',



            'buttons' => [
                'next' => [
                    'title' => 'Forward', 
                    'options' => [
                        'class' => 'disabled'
                    ],
                 ],
             ],
        ],
        2 => [
            'title' => 'Step 2',
            'icon' => 'glyphicon glyphicon-cloud-upload',
            'content' => '<h3>Step 2</h3>This is step 2',
            'skippable' => true,
        ],
        3 => [
            'title' => 'Step 3',
            'icon' => 'glyphicon glyphicon-transfer',
            'content' => '<h3>Step 3</h3>This is step 3',
        ],
    ],
    'complete_content' => "You are done!", // Optional final screen
    'start_step' => 2, // Optional, start with a specific step
];
?>

<?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>



