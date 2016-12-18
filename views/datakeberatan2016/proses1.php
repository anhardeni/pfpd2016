<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\datakeberatan2016 */
/* @var $form ActiveForm */
?>
<div class="proses1">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'tglmasukkeberatan') ?>
        <?= $form->field($model, 'tgljatuhtempo') ?>
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
        <?= $form->field($model, 'updated_at') ?>
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
        <?= $form->field($model, 'updated_by') ?>
        <?= $form->field($model, 'berkasselesai') ?>
        <?= $form->field($model, 'idttmohon') ?>
        <?= $form->field($model, 'jumlahtagihan') ?>
        <?= $form->field($model, 'jumlahtagihanspkpbmlanjutan') ?>
        <?= $form->field($model, 'tagihanhasilkep') ?>
        <?= $form->field($model, 'bm') ?>
        <?= $form->field($model, 'bm_t') ?>
        <?= $form->field($model, 'cukai') ?>
        <?= $form->field($model, 'cukai_t') ?>
        <?= $form->field($model, 'ppn') ?>
        <?= $form->field($model, 'ppn_t') ?>
        <?= $form->field($model, 'ppnbm') ?>
        <?= $form->field($model, 'ppnbm_t') ?>
        <?= $form->field($model, 'pph') ?>
        <?= $form->field($model, 'pph_t') ?>
        <?= $form->field($model, 'denda') ?>
        <?= $form->field($model, 'denda_t') ?>
        <?= $form->field($model, 'jalur') ?>
        <?= $form->field($model, 'jenisjaminan') ?>
        <?= $form->field($model, 'kasikeberatan') ?>
        <?= $form->field($model, 'jenispenetapan') ?>
        <?= $form->field($model, 'hasilkeputusan') ?>
        <?= $form->field($model, 'keterangan') ?>
        <?= $form->field($model, 'formalterbit') ?>
        <?= $form->field($model, 'formalaju') ?>
        <?= $form->field($model, 'qq') ?>
        <?= $form->field($model, 'nomorbpj_sspcp') ?>
        <?= $form->field($model, 'nosuratbatalkebaratan') ?>
        <?= $form->field($model, 'nomorsuratpenerusan') ?>
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
        <?= $form->field($model, 'idnoagenda') ?>
        <?= $form->field($model, 'nomorsuratpermohonan') ?>
        <?= $form->field($model, 'suratpenetapan') ?>
        <?= $form->field($model, 'salah') ?>
        <?= $form->field($model, 'nopib') ?>
        <?= $form->field($model, 'nokep') ?>
        <?= $form->field($model, 'jenisbarang') ?>
        <?= $form->field($model, 'ketpenetapan') ?>
        <?= $form->field($model, 'mintarisalahtambahan') ?>
        <?= $form->field($model, 'mslh') ?>
        <?= $form->field($model, 'teliti') ?>
        <?= $form->field($model, 'pendpt') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- proses1 -->
