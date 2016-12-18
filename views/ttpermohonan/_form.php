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
 <div class="row">
            <div class="col-lg-4">
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
</div>

    <div class="row">
            <div class="col-lg-4">
              
               
 <?= $form->field($model, 'l_bpj')->checkbox() ?>

    <?= $form->field($model, 'l_billing')->checkbox() ?>

    <?= $form->field($model, 'l_suratpernyataan')->checkbox() ?>

     <?= $form->field($model, 'l_sptnp')->checkbox() ?>

   
               
            </div>

             <div class="col-lg-4">
              
               
    <?= $form->field($model, 'l_spp')->checkbox() ?>

    <?= $form->field($model, 'l_spsa')->checkbox() ?>

    <?= $form->field($model, 'l_penetapanpabeanlainnya')->checkbox() ?>
      <?= $form->field($model, 'l_invoice')->checkbox() ?>

    <?= $form->field($model, 'l_packinglist')->checkbox() ?>          
            </div>
            
            <div class="col-lg-4">
      
     <?= $form->field($model, 'l_pib')->checkbox() ?>

     <?= $form->field($model, 'l_awb_bl')->checkbox() ?>

    <?= $form->field($model, 'l_dokpelengkaplainnya')->checkbox() ?>
 <h2><?= $form->field($model, 'berkaslengkapbenar')->checkbox() ?> </h2>

               

                
            </div>
        </div>
            
           
        
        </div>

   

   

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      


   <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
