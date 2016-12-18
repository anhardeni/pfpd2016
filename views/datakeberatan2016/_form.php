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

    <?= $form->field($model, 'namaperusahaan')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Daftarimportir'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'qq')->textInput(['maxlength' => true, 'placeholder' => 'Qq']) ?>

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

    <?= $form->field($model, 'jumlahtagihan')->textInput(['maxlength' => true, 'placeholder' => 'Jumlahtagihan']) ?>

    <?= $form->field($model, 'salah')->textInput(['maxlength' => true, 'placeholder' => 'Salah']) ?>

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

    <?= $form->field($model, 'jalur')->dropDownList([ 'Hijau' => 'Hijau', 'Kuning' => 'Kuning', 'Merah' => 'Merah', 'MITA' => 'MITA', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'spkpbmgabungan')->checkbox() ?>

    <?= $form->field($model, 'nospkpbmgabungan')->textInput(['placeholder' => 'Nospkpbmgabungan']) ?>

    <?= $form->field($model, 'tglspkpbmgabungan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglspkpbmgabungan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'jumlahtagihanspkpbmlanjutan')->textInput(['maxlength' => true, 'placeholder' => 'Jumlahtagihanspkpbmlanjutan']) ?>

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

    <?= $form->field($model, 'namapemeriksa')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Namapemeriksa::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
        'options' => ['placeholder' => 'Choose Namapemeriksa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'ditolakformal')->checkbox() ?>

    <?= $form->field($model, 'spkpbmlebih30hari')->checkbox() ?>

    <?= $form->field($model, 'spkpbmdibatalkan_direvisi')->checkbox() ?>

    <?= $form->field($model, 'nospkpbmrevisi')->textInput(['placeholder' => 'Nospkpbmrevisi']) ?>

    <?= $form->field($model, 'tglspkpbmrevisi')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglspkpbmrevisi',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'dijawabdenganpenjelasan')->checkbox() ?>

    <?= $form->field($model, 'pengajuandibatalkan')->checkbox() ?>

    <?= $form->field($model, 'tglterimasuratpembatalan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglterimasuratpembatalan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'nosuratbatalkebaratan')->textInput(['maxlength' => true, 'placeholder' => 'Nosuratbatalkebaratan']) ?>

    <?= $form->field($model, 'tglsuratpembatalankeberatan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglsuratpembatalankeberatan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'diteruskan')->checkbox() ?>

    <?= $form->field($model, 'nomorsuratpenerusan')->textInput(['maxlength' => true, 'placeholder' => 'Nomorsuratpenerusan']) ?>

    <?= $form->field($model, 'tanggalsrtpenerusan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalsrtpenerusan',
                'autoclose' => true
            ]
        ],
    ]); ?>

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

    <?= $form->field($model, 'jenispenetapan')->dropDownList([ 'Tarif' => 'Tarif', 'Nilai Pabean' => 'Nilai Pabean', 'Tarif & Nilai Pabean' => 'Tarif & Nilai Pabean', 'Audit' => 'Audit', 'Sanksi Adm(SPSA' => 'Sanksi Adm(SPSA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hasilkeputusan')->dropDownList([ 'Tolak' => 'Tolak', 'Terima' => 'Terima', 'Tolak Formal' => 'Tolak Formal', 'Terima Sebagian' => 'Terima Sebagian', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tagihanhasilkep')->textInput(['maxlength' => true, 'placeholder' => 'Tagihanhasilkep']) ?>

    <?= $form->field($model, 'mintarisalah')->checkbox() ?>

    <?= $form->field($model, 'nomornd')->textInput(['maxlength' => true, 'placeholder' => 'Nomornd']) ?>

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

    <?= $form->field($model, 'mintarisalahtambahan')->textInput(['maxlength' => true, 'placeholder' => 'Mintarisalahtambahan']) ?>

    <?= $form->field($model, 'terimarisalah')->checkbox() ?>

    <?= $form->field($model, 'tanggalterimarisalah')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalterimarisalah',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'mintaaudit')->checkbox() ?>

    <?= $form->field($model, 'ndmintaaudit')->textInput(['maxlength' => true, 'placeholder' => 'Ndmintaaudit']) ?>

    <?= $form->field($model, 'tglndmintaaudit')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglndmintaaudit',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'terimandlha')->checkbox() ?>

    <?= $form->field($model, 'tanggalterimalha')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggalterimalha',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'nomorndlha')->textInput(['maxlength' => true, 'placeholder' => 'Nomorndlha']) ?>

    <?= $form->field($model, 'tglndlha')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglndlha',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'nomorlha')->textInput(['maxlength' => true, 'placeholder' => 'Nomorlha']) ?>

    <?= $form->field($model, 'tgllha')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgllha',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'mintadata')->checkbox() ?>

    <?= $form->field($model, 'srtmintadata')->textInput(['maxlength' => true, 'placeholder' => 'Srtmintadata']) ?>

    <?= $form->field($model, 'tglsrtdata')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglsrtdata',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'terimadatatambahan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Terimadatatambahan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'tglterimadatatambahan')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglterimadatatambahan',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'nosuratpengantardatatambahan')->textInput(['maxlength' => true, 'placeholder' => 'Nosuratpengantardatatambahan']) ?>

    <?= $form->field($model, 'tglsurat')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglsurat',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'dimintasub')->checkbox() ?>

    <?= $form->field($model, 'dimintarevisinotul')->checkbox() ?>

    <?= $form->field($model, 'nondpermintaannotulrevisi')->textInput(['placeholder' => 'Nondpermintaannotulrevisi']) ?>

    <?= $form->field($model, 'tglndpermintaannotulrevisi')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglndpermintaannotulrevisi',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'noagendakantor')->textInput(['maxlength' => true, 'placeholder' => 'Noagendakantor']) ?>

    <?= $form->field($model, 'tglagenda')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglagenda',
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

    <?= $form->field($model, 'diserahkankekabid')->checkbox() ?>

    <?= $form->field($model, 'tglpenyerahankekabid')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tglpenyerahankekabid',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'jenisbarang')->textInput(['maxlength' => true, 'placeholder' => 'Jenisbarang']) ?>

    <?= $form->field($model, 'hspib')->textInput(['maxlength' => true, 'placeholder' => 'Hspib']) ?>

    <?= $form->field($model, 'tarifpib')->textInput(['maxlength' => true, 'placeholder' => 'Tarifpib']) ?>

    <?= $form->field($model, 'hspfpd')->textInput(['maxlength' => true, 'placeholder' => 'Hspfpd']) ?>

    <?= $form->field($model, 'tarifpfpd')->textInput(['maxlength' => true, 'placeholder' => 'Tarifpfpd']) ?>

    <?= $form->field($model, 'hskeputusan')->textInput(['maxlength' => true, 'placeholder' => 'Hskeputusan']) ?>

    <?= $form->field($model, 'tarifkep')->textInput(['maxlength' => true, 'placeholder' => 'Tarifkep']) ?>

    <?= $form->field($model, 'ketpenetapan')->textInput(['maxlength' => true, 'placeholder' => 'Ketpenetapan']) ?>

    <?= $form->field($model, 'idnoagenda')->textInput(['maxlength' => true, 'placeholder' => 'Idnoagenda']) ?>

    <?= $form->field($model, 'formalterbit')->dropDownList([ 'terpenuhi' => 'Terpenuhi', 'tidak terpenuhi' => 'Tidak terpenuhi', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'formalaju')->dropDownList([ 'terpenuhi' => 'Terpenuhi', 'tidak terpenuhi' => 'Tidak terpenuhi', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mslh')->textInput(['maxlength' => true, 'placeholder' => 'Mslh']) ?>

    <?= $form->field($model, 'teliti')->textInput(['maxlength' => true, 'placeholder' => 'Teliti']) ?>

    <?= $form->field($model, 'pendpt')->textInput(['maxlength' => true, 'placeholder' => 'Pendpt']) ?>

    <?= $form->field($model, 'bm')->textInput(['placeholder' => 'Bm']) ?>

    <?= $form->field($model, 'bm_t')->textInput(['placeholder' => 'Bm T']) ?>

    <?= $form->field($model, 'cukai')->textInput(['placeholder' => 'Cukai']) ?>

    <?= $form->field($model, 'cukai_t')->textInput(['placeholder' => 'Cukai T']) ?>

    <?= $form->field($model, 'ppn')->textInput(['placeholder' => 'Ppn']) ?>

    <?= $form->field($model, 'ppn_t')->textInput(['placeholder' => 'Ppn T']) ?>

    <?= $form->field($model, 'ppnbm')->textInput(['placeholder' => 'Ppnbm']) ?>

    <?= $form->field($model, 'ppnbm_t')->textInput(['placeholder' => 'Ppnbm T']) ?>

    <?= $form->field($model, 'pph')->textInput(['placeholder' => 'Pph']) ?>

    <?= $form->field($model, 'pph_t')->textInput(['placeholder' => 'Pph T']) ?>

    <?= $form->field($model, 'denda')->textInput(['placeholder' => 'Denda']) ?>

    <?= $form->field($model, 'denda_t')->textInput(['placeholder' => 'Denda T']) ?>

    <?= $form->field($model, 'berkasselesai')->checkbox() ?>

    <?= $form->field($model, 'idttmohon')->textInput(['maxlength' => true, 'placeholder' => 'Idttmohon']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
