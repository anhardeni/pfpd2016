<div class="form-group" id="add-datakeberatan2016">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'Datakeberatan2016',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'visible' => false],
        'tglmasukkeberatan' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglmasukkeberatan',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'namaperusahaan' => [
            'label' => 'Daftarimportir',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarimportir::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => 'Choose Daftarimportir'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'qq' => ['type' => TabularForm::INPUT_TEXT],
        'nomorsuratpermohonan' => ['type' => TabularForm::INPUT_TEXT],
        'tanggalsuratpermohonan' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tanggalsuratpermohonan',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'suratpenetapan' => ['type' => TabularForm::INPUT_TEXT],
        'nospkpbm_spsa' => ['type' => TabularForm::INPUT_TEXT],
        'tglspkpbm_spsa' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglspkpbm Spsa',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'jumlahtagihan' => ['type' => TabularForm::INPUT_TEXT],
        'salah' => ['type' => TabularForm::INPUT_TEXT],
        'nopib' => ['type' => TabularForm::INPUT_TEXT],
        'tglpib' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglpib',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'namapfpd' => [
            'label' => 'Daftarpfpd',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Daftarpfpd::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => 'Choose Daftarpfpd'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'jalur' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'Hijau' => 'Hijau', 'Kuning' => 'Kuning', 'Merah' => 'Merah', 'MITA' => 'MITA', 'Lainnya' => 'Lainnya', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Jalur'],
                    ]
        ],
        'spkpbmgabungan' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'nospkpbmgabungan' => ['type' => TabularForm::INPUT_TEXT],
        'tglspkpbmgabungan' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglspkpbmgabungan',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'jumlahtagihanspkpbmlanjutan' => ['type' => TabularForm::INPUT_TEXT],
        'jenisjaminan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'Customs Bond' => 'Customs Bond', 'Garansi Bank' => 'Garansi Bank', 'Lunas/SSPCP' => 'Lunas/SSPCP', 'Tunai' => 'Tunai', 'Jaminan Tertulis' => 'Jaminan Tertulis', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Jenisjaminan'],
                    ]
        ],
        'nomorbpj_sspcp' => ['type' => TabularForm::INPUT_TEXT],
        'tglbpj_sspcp' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglbpj Sspcp',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'kasikeberatan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'Kasi Keberatan 1' => 'Kasi Keberatan 1', 'Kasi Keberatan II' => 'Kasi Keberatan II', 'Kasi Keberatan III' => 'Kasi Keberatan III', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Kasikeberatan'],
                    ]
        ],
        'ekspedisikankekasikeberatan' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'ditolakformal' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'spkpbmlebih30hari' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'spkpbmdibatalkan_direvisi' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'nospkpbmrevisi' => ['type' => TabularForm::INPUT_TEXT],
        'tglspkpbmrevisi' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglspkpbmrevisi',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'dijawabdenganpenjelasan' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'pengajuandibatalkan' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tglterimasuratpembatalan' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglterimasuratpembatalan',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'nosuratbatalkebaratan' => ['type' => TabularForm::INPUT_TEXT],
        'tglsuratpembatalankeberatan' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglsuratpembatalankeberatan',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'diteruskan' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'nomorsuratpenerusan' => ['type' => TabularForm::INPUT_TEXT],
        'tanggalsrtpenerusan' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tanggalsrtpenerusan',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'diputuskan' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'nokep' => ['type' => TabularForm::INPUT_TEXT],
        'tglkep' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglkep',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'jenispenetapan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'Tarif' => 'Tarif', 'Nilai Pabean' => 'Nilai Pabean', 'Tarif & Nilai Pabean' => 'Tarif & Nilai Pabean', 'Audit' => 'Audit', 'Sanksi Adm(SPSA' => 'Sanksi Adm(SPSA', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Jenispenetapan'],
                    ]
        ],
        'hasilkeputusan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'Tolak' => 'Tolak', 'Terima' => 'Terima', 'Tolak Formal' => 'Tolak Formal', 'Terima Sebagian' => 'Terima Sebagian', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Hasilkeputusan'],
                    ]
        ],
        'tagihanhasilkep' => ['type' => TabularForm::INPUT_TEXT],
        'mintarisalah' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'nomornd' => ['type' => TabularForm::INPUT_TEXT],
        'tanggalndrisalah' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tanggalndrisalah',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'mintarisalahtambahan' => ['type' => TabularForm::INPUT_TEXT],
        'terimarisalah' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tanggalterimarisalah' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tanggalterimarisalah',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'mintaaudit' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'ndmintaaudit' => ['type' => TabularForm::INPUT_TEXT],
        'tglndmintaaudit' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglndmintaaudit',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'terimandlha' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tanggalterimalha' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tanggalterimalha',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'nomorndlha' => ['type' => TabularForm::INPUT_TEXT],
        'tglndlha' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglndlha',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'nomorlha' => ['type' => TabularForm::INPUT_TEXT],
        'tgllha' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgllha',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'mintadata' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'srtmintadata' => ['type' => TabularForm::INPUT_TEXT],
        'tglsrtdata' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglsrtdata',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'terimadatatambahan' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Terimadatatambahan',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'tglterimadatatambahan' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglterimadatatambahan',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'nosuratpengantardatatambahan' => ['type' => TabularForm::INPUT_TEXT],
        'tglsurat' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglsurat',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'dimintasub' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'dimintarevisinotul' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'nondpermintaannotulrevisi' => ['type' => TabularForm::INPUT_TEXT],
        'tglndpermintaannotulrevisi' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglndpermintaannotulrevisi',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'keterangan' => ['type' => TabularForm::INPUT_TEXTAREA],
        'noagendakantor' => ['type' => TabularForm::INPUT_TEXT],
        'tglagenda' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglagenda',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'diserahkankeseksi' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tglpenyerahankeseksi' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglpenyerahankeseksi',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'diserahkankekabid' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tglpenyerahankekabid' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tglpenyerahankekabid',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'jenisbarang' => ['type' => TabularForm::INPUT_TEXT],
        'hspib' => ['type' => TabularForm::INPUT_TEXT],
        'tarifpib' => ['type' => TabularForm::INPUT_TEXT],
        'hspfpd' => ['type' => TabularForm::INPUT_TEXT],
        'tarifpfpd' => ['type' => TabularForm::INPUT_TEXT],
        'hskeputusan' => ['type' => TabularForm::INPUT_TEXT],
        'tarifkep' => ['type' => TabularForm::INPUT_TEXT],
        'ketpenetapan' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowDatakeberatan2016(' . $key . '); return false;', 'id' => 'datakeberatan2016-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Datakeberatan2016', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowDatakeberatan2016()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

