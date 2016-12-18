<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datakeberatan2016Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-datakeberatan2016-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?php /* echo $form->field($model, 'tglmasukkeberatan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglmasukkeberatan',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'namaperusahaan')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Daftarimportir'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /*$form->field($model, 'qq')->textInput(['maxlength' => true, 'placeholder' => 'Qq'])*/ ?>

    <?php /* echo $form->field($model, 'nomorsuratpermohonan')->textInput(['maxlength' => true, 'placeholder' => 'Nomorsuratpermohonan']) */?>

    <?php /* echo $form->field($model, 'tanggalsuratpermohonan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalsuratpermohonan',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'suratpenetapan')->textInput(['maxlength' => true, 'placeholder' => 'Suratpenetapan']) */ ?>

    <?php /* echo $form->field($model, 'nospkpbm_spsa')->textInput(['placeholder' => 'Nospkpbm Spsa']) */ ?>

    <?php /* echo $form->field($model, 'tglspkpbm_spsa')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglspkpbm Spsa',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'jumlahtagihan')->textInput(['maxlength' => true, 'placeholder' => 'Jumlahtagihan']) */ ?>

    <?php /* echo $form->field($model, 'salah')->textInput(['maxlength' => true, 'placeholder' => 'Salah']) */ ?>

    <?php /* echo $form->field($model, 'nopib')->textInput(['maxlength' => true, 'placeholder' => 'Nopib']) */ ?>

    <?php /* echo $form->field($model, 'tglpib')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglpib',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'namapfpd')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarpfpd::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Daftarpfpd'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'jalur')->textInput(['maxlength' => true, 'placeholder' => 'Jalur']) */ ?>

    <?php /* echo $form->field($model, 'spkpbmgabungan')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nospkpbmgabungan')->textInput(['placeholder' => 'Nospkpbmgabungan']) */ ?>

    <?php /* echo $form->field($model, 'tglspkpbmgabungan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglspkpbmgabungan',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'jumlahtagihanspkpbmlanjutan')->textInput(['maxlength' => true, 'placeholder' => 'Jumlahtagihanspkpbmlanjutan']) */ ?>

    <?php /* echo $form->field($model, 'jenisjaminan')->dropDownList([ 'Customs Bond' => 'Customs Bond', 'Garansi Bank' => 'Garansi Bank', 'Lunas/SSPCP' => 'Lunas/SSPCP', 'Tunai' => 'Tunai', 'Jaminan Tertulis' => 'Jaminan Tertulis', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'nomorbpj_sspcp')->textInput(['maxlength' => true, 'placeholder' => 'Nomorbpj Sspcp']) */ ?>

    <?php /* echo $form->field($model, 'tglbpj_sspcp')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglbpj Sspcp',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'kasikeberatan')->dropDownList([ 'Kasi Keberatan 1' => 'Kasi Keberatan 1', 'Kasi Keberatan II' => 'Kasi Keberatan II', 'Kasi Keberatan III' => 'Kasi Keberatan III', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'ekspedisikankekasikeberatan')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'namapemeriksa')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Namapemeriksa::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Namapemeriksa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'ditolakformal')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'spkpbmlebih30hari')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'spkpbmdibatalkan_direvisi')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nospkpbmrevisi')->textInput(['placeholder' => 'Nospkpbmrevisi']) */ ?>

    <?php /* echo $form->field($model, 'tglspkpbmrevisi')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglspkpbmrevisi',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'dijawabdenganpenjelasan')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'pengajuandibatalkan')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tglterimasuratpembatalan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglterimasuratpembatalan',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'nosuratbatalkebaratan')->textInput(['maxlength' => true, 'placeholder' => 'Nosuratbatalkebaratan']) */ ?>

    <?php /* echo $form->field($model, 'tglsuratpembatalankeberatan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglsuratpembatalankeberatan',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'diteruskan')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nomorsuratpenerusan')->textInput(['maxlength' => true, 'placeholder' => 'Nomorsuratpenerusan']) */ ?>

    <?php /* echo $form->field($model, 'tanggalsrtpenerusan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalsrtpenerusan',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'diputuskan')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nokep')->textInput(['maxlength' => true, 'placeholder' => 'Nokep']) */ ?>

    <?php /* echo $form->field($model, 'tglkep')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglkep',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'jenispenetapan')->textInput(['maxlength' => true, 'placeholder' => 'Jenispenetapan']) */ ?>

    <?php /* echo $form->field($model, 'hasilkeputusan')->dropDownList([ 'Tolak' => 'Tolak', 'Terima' => 'Terima', 'Tolak Formal' => 'Tolak Formal', ], ['prompt' => '']) */ ?>

    <?php /* echo $form->field($model, 'tagihanhasilkep')->textInput(['maxlength' => true, 'placeholder' => 'Tagihanhasilkep']) */ ?>

    <?php /* echo $form->field($model, 'mintarisalah')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nomornd')->textInput(['maxlength' => true, 'placeholder' => 'Nomornd']) */ ?>

    <?php /* echo $form->field($model, 'tanggalndrisalah')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalndrisalah',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'mintarisalahtambahan')->textInput(['maxlength' => true, 'placeholder' => 'Mintarisalahtambahan']) */ ?>

    <?php /* echo $form->field($model, 'terimarisalah')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tanggalterimarisalah')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalterimarisalah',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'mintaaudit')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'ndmintaaudit')->textInput(['maxlength' => true, 'placeholder' => 'Ndmintaaudit']) */ ?>

    <?php /* echo $form->field($model, 'tglndmintaaudit')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglndmintaaudit',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'terimandlha')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tanggalterimalha')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalterimalha',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'nomorndlha')->textInput(['maxlength' => true, 'placeholder' => 'Nomorndlha']) */ ?>

    <?php /* echo $form->field($model, 'tglndlha')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglndlha',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'nomorlha')->textInput(['maxlength' => true, 'placeholder' => 'Nomorlha']) */ ?>

    <?php /* echo $form->field($model, 'tgllha')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgllha',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'mintadata')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'srtmintadata')->textInput(['maxlength' => true, 'placeholder' => 'Srtmintadata']) */ ?>

    <?php /* echo $form->field($model, 'tglsrtdata')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglsrtdata',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'terimadatatambahan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Terimadatatambahan',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'tglterimadatatambahan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglterimadatatambahan',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'nosuratpengantardatatambahan')->textInput(['maxlength' => true, 'placeholder' => 'Nosuratpengantardatatambahan']) */ ?>

    <?php /* echo $form->field($model, 'tglsurat')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglsurat',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'dimintasub')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'dimintarevisinotul')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nondpermintaannotulrevisi')->textInput(['placeholder' => 'Nondpermintaannotulrevisi']) */ ?>

    <?php /* echo $form->field($model, 'tglndpermintaannotulrevisi')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglndpermintaannotulrevisi',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'keterangan')->textarea(['rows' => 6]) */ ?>

    <?=  $form->field($model, 'noagendakantor')->textInput(['maxlength' => true, 'placeholder' => 'Noagendakantor'])  ?>

    <?= $form->field($model, 'tglagenda')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => FALSE,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglagenda',
                'autoclose' => true,
            ]
        ],
    ]);  ?>

    <?php /* echo $form->field($model, 'diserahkankeseksi')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tglpenyerahankeseksi')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglpenyerahankeseksi',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'diserahkankekabid')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tglpenyerahankekabid')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATETIME,
        'saveFormat' => 'php:Y-m-d H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglpenyerahankekabid',
                'autoclose' => true,
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'jenisbarang')->textInput(['maxlength' => true, 'placeholder' => 'Jenisbarang']) */ ?>

    <?php /* echo $form->field($model, 'hspib')->textInput(['maxlength' => true, 'placeholder' => 'Hspib']) */ ?>

    <?php /* echo $form->field($model, 'tarifpib')->textInput(['maxlength' => true, 'placeholder' => 'Tarifpib']) */ ?>

    <?php /* echo $form->field($model, 'hspfpd')->textInput(['maxlength' => true, 'placeholder' => 'Hspfpd']) */ ?>

    <?php /* echo $form->field($model, 'tarifpfpd')->textInput(['maxlength' => true, 'placeholder' => 'Tarifpfpd']) */ ?>

    <?php /* echo $form->field($model, 'hskeputusan')->textInput(['maxlength' => true, 'placeholder' => 'Hskeputusan']) */ ?>

    <?php /* echo $form->field($model, 'tarifkep')->textInput(['maxlength' => true, 'placeholder' => 'Tarifkep']) */ ?>

    <?php /* echo $form->field($model, 'ketpenetapan')->textInput(['maxlength' => true, 'placeholder' => 'Ketpenetapan']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
