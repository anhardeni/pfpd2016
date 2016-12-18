<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datakeberatan2016 */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="datakeberatan2016-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <div class="row">
            <div class="col-lg-4">
    
    <?= $form->field($model, 'tglmasukkeberatan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglmasukkeberatan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'namaperusahaan')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Daftarimportir'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nomorsuratpermohonan')->textInput(['maxlength' => true, 'placeholder' => 'Nomorsuratpermohonan']) ?>
    <?= $form->field($model, 'tanggalsuratpermohonan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalsuratpermohonan',
                'autoclose' => true
            ]
        ],
    ]); ?>
     
    <?= $form->field($model, 'suratpenetapan')->textInput(['maxlength' => true, 'placeholder' => 'Suratpenetapan']) ?>
    <?= $form->field($model, 'nospkpbm_spsa')->textInput(['placeholder' => 'Nospkpbm Spsa']) ?>
    <?= $form->field($model, 'tglspkpbm_spsa')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglspkpbm Spsa',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'salah')->textInput(['maxlength' => true, 'placeholder' => 'Salah']) ?>

  

    
  </div>

             <div class="col-lg-4">
                 
      <?= $form->field($model, 'nopib')->textInput(['maxlength' => true, 'placeholder' => 'Nopib']) ?>

    <?= $form->field($model, 'tglpib')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglpib',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'namapfpd')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarpfpd::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Daftarpfpd'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>             
                 
    <?= $form->field($model, 'jenispenetapan')->dropDownList([ 'Tarif' => 'Tarif', 'Nilai Pabean' => 'Nilai Pabean', 'Tarif & Nilai Pabean' => 'Tarif & Nilai Pabean', 'Audit' => 'Audit', 'Sanksi Adm(SPSA)' => 'Sanksi Adm(SPSA)','Tarif FTA' => 'Tarif FTA','Tarif PPn' => 'Tarif PPn','Tarif Pph' => 'Tarif Pph','Bunga' => 'Bunga','Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenisjaminan')->dropDownList([ 'Customs Bond' => 'Customs Bond', 'Garansi Bank' => 'Garansi Bank', 'Lunas/SSPCP' => 'Lunas/SSPCP', 'Tunai' => 'Tunai', 'Jaminan Tertulis' => 'Jaminan Tertulis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nomorbpj_sspcp')->textInput(['maxlength' => true, 'placeholder' => 'Nomorbpj Sspcp']) ?>

    <?= $form->field($model, 'tglbpj_sspcp')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglbpj Sspcp',
                'autoclose' => true
            ]
        ],
    ]); ?>             
              
    <?= $form->field($model, 'kasikeberatan')->dropDownList([ 'Kasi Keberatan 1' => 'Kasi Keberatan 1', 'Kasi Keberatan II' => 'Kasi Keberatan II', 'Kasi Keberatan III' => 'Kasi Keberatan III', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ekspedisikankekasikeberatan')->checkbox() ?>
     <?= $form->field($model, 'mintarisalah')->checkbox() ?>
    <?= $form->field($model, 'tanggalndrisalah')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalndrisalah',
                'autoclose' => true
            ]
        ],
    ]); ?>
                 
                  </div>

             <div class="col-lg-4">
                
    <?= $form->field($model, 'namapemeriksa')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Namapemeriksa::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Namapemeriksa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>
              
    <?= $form->field($model, 'ditolakformal')->checkbox() ?>

    
    <?= $form->field($model, 'diputuskan')->checkbox() ?>

    <?= $form->field($model, 'nokep')->textInput(['maxlength' => true, 'placeholder' => 'Nokep']) ?>

    <?= $form->field($model, 'tglkep')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglkep',
                'autoclose' => true
            ]
        ],
    ]); ?>

    

    <?= $form->field($model, 'diserahkankeseksi')->checkbox() ?>

    <?= $form->field($model, 'tglpenyerahankeseksi')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglpenyerahankeseksi',
                'autoclose' => true
            ]
        ],
    ]); ?>
     <?= $form->field($model, 'keterangan')->textarea(['rows' => 3]) ?>
</div>

     </div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
