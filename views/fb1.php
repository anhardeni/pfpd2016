<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datakeberatan2016 */
/* @var $form ActiveForm */
?>
<div class="fb1">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'tglmasukkeberatan') ?>
        <?= $form->field($model, 'berkasditerimalengkap') ?>
        <?= $form->field($model, 'tanggalsuratpermohonan') ?>
        <?= $form->field($model, 'tglspkpbm_spsa') ?>
        <?= $form->field($model, 'tglpib') ?>
        <?= $form->field($model, 'tglspkpbmgabungan') ?>
        <?= $form->field($model, 'tglbpj_sspcp') ?>
        <?= $form->field($model, 'tglspkpbmrevisi') ?>
        <?= $form->field($model, 'tglterimasuratpembatalan') ?>
        <?= $form->field($model, 'tglsuratpembatalankeberatan') ?>
        <?= $form->field($model, 'tanggalsrtpenerusan') ?>
        <?= $form->field($model, 'tglkep') ?>
        <?= $form->field($model, 'tanggalndrisalah') ?>
        <?= $form->field($model, 'tanggalterimarisalah') ?>
        <?= $form->field($model, 'tglndmintaaudit') ?>
        <?= $form->field($model, 'tanggalterimalha') ?>
        <?= $form->field($model, 'tglndlha') ?>
        <?= $form->field($model, 'tgllha') ?>
        <?= $form->field($model, 'tglsrtdata') ?>
        <?= $form->field($model, 'terimadatatambahan') ?>
        <?= $form->field($model, 'tglterimadatatambahan') ?>
        <?= $form->field($model, 'tglsurat') ?>
        <?= $form->field($model, 'tglndpermintaannotulrevisi') ?>
        <?= $form->field($model, 'tglagenda') ?>
        <?= $form->field($model, 'tglpenyerahankeseksi') ?>
        <?= $form->field($model, 'tglpenyerahankekabid') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'namaperusahaan') ?>
        <?= $form->field($model, 'nospkpbm_spsa') ?>
        <?= $form->field($model, 'namapfpd') ?>
        <?= $form->field($model, 'spkpbmgabungan') ?>
        <?= $form->field($model, 'nospkpbmgabungan') ?>
        <?= $form->field($model, 'ekspedisikankekasikeberatan') ?>
        <?= $form->field($model, 'namapemeriksa') ?>
        <?= $form->field($model, 'ditolakformal') ?>
        <?= $form->field($model, 'spkpbmlebih30hari') ?>
        <?= $form->field($model, 'spkpbmdibatalkan_direvisi') ?>
        <?= $form->field($model, 'nospkpbmrevisi') ?>
        <?= $form->field($model, 'dijawabdenganpenjelasan') ?>
        <?= $form->field($model, 'pengajuandibatalkan') ?>
        <?= $form->field($model, 'diteruskan') ?>
        <?= $form->field($model, 'diputuskan') ?>
        <?= $form->field($model, 'mintarisalah') ?>
        <?= $form->field($model, 'terimarisalah') ?>
        <?= $form->field($model, 'mintaaudit') ?>
        <?= $form->field($model, 'terimandlha') ?>
        <?= $form->field($model, 'mintadata') ?>
        <?= $form->field($model, 'dimintasub') ?>
        <?= $form->field($model, 'dimintarevisinotul') ?>
        <?= $form->field($model, 'nondpermintaannotulrevisi') ?>
        <?= $form->field($model, 'diserahkankeseksi') ?>
        <?= $form->field($model, 'diserahkankekabid') ?>
        <?= $form->field($model, 'created_by') ?>
        <?= $form->field($model, 'jumlahtagihan') ?>
        <?= $form->field($model, 'jumlahtagihanspkpbmlanjutan') ?>
        <?= $form->field($model, 'tagihanhasilkep') ?>
        <?= $form->field($model, 'kasikeberatan') ?>
        <?= $form->field($model, 'keterangan') ?>
        <?= $form->field($model, 'qq') ?>
        <?= $form->field($model, 'npwp') ?>
        <?= $form->field($model, 'jenisjaminan') ?>
        <?= $form->field($model, 'nomorbpj_sspcp') ?>
        <?= $form->field($model, 'nosuratbatalkebaratan') ?>
        <?= $form->field($model, 'nomorsuratpenerusan') ?>
        <?= $form->field($model, 'jenispenetapan') ?>
        <?= $form->field($model, 'nomornd') ?>
        <?= $form->field($model, 'ndmintaaudit') ?>
        <?= $form->field($model, 'nomorndlha') ?>
        <?= $form->field($model, 'nomorlha') ?>
        <?= $form->field($model, 'srtmintadata') ?>
        <?= $form->field($model, 'nosuratpengantardatatambahan') ?>
        <?= $form->field($model, 'noagendakantor') ?>
        <?= $form->field($model, 'hspib') ?>
        <?= $form->field($model, 'tarifpib') ?>
        <?= $form->field($model, 'hspfpd') ?>
        <?= $form->field($model, 'tarifpfpd') ?>
        <?= $form->field($model, 'hskeputusan') ?>
        <?= $form->field($model, 'tarifkep') ?>
        <?= $form->field($model, 'nomorsuratpermohonan') ?>
        <?= $form->field($model, 'suratpenetapan') ?>
        <?= $form->field($model, 'salah') ?>
        <?= $form->field($model, 'nopib') ?>
        <?= $form->field($model, 'jalur') ?>
        <?= $form->field($model, 'nokep') ?>
        <?= $form->field($model, 'hasilkeputusan') ?>
        <?= $form->field($model, 'jenisbarang') ?>
        <?= $form->field($model, 'ketpenetapan') ?>
        <?= $form->field($model, 'mintarisalahtambahan') ?>
        <?= $form->field($model, 'lock') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- fb1 -->
