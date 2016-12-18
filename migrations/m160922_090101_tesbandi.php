<?php

use yii\db\Schema;

class m160922_090101_tesbandi extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('datakeberatan2016', [
            'id' => $this->primaryKey(),
            'tglmasukkeberatan' => $this->datetime(),
            'berkasditerimalengkap' => $this->datetime(),
            'namaperusahaan' => $this->string(255),
            'qq' => $this->string(50),
            'npwp' => $this->string(50),
            'nomorsuratpermohonan' => $this->string(255),
            'tanggalsuratpermohonan' => $this->datetime(),
            'suratpenetapan' => $this->string(255),
            'nospkpbm_spsa' => $this->integer(11)->defaultValue(0),
            'tglspkpbm_spsa' => $this->datetime(),
            'jumlahtagihan' => $this->decimal(19,4)->defaultValue('0.0000'),
            'salah' => $this->string(255),
            'nopib' => $this->string(255),
            'tglpib' => $this->datetime(),
            'namapfpd' => $this->string(50),
            'jalur' => $this->string(255),
            'spkpbmgabungan' => $this->smallInteger(1),
            'nospkpbmgabungan' => $this->integer(11)->defaultValue(0),
            'tglspkpbmgabungan' => $this->datetime(),
            'jumlahtagihanspkpbmlanjutan' => $this->decimal(19,4)->defaultValue('0.0000'),
            'jenisjaminan' => $this->string(50),
            'nomorbpj_sspcp' => $this->string(50),
            'tglbpj_sspcp' => $this->datetime(),
            'kasikeberatan' => $this->string(255),
            'ekspedisikankekasikeberatan' => $this->smallInteger(1),
            'namapemeriksa' => $this->string(255),
            'ditolakformal' => $this->smallInteger(1),
            'spkpbmlebih30hari' => $this->smallInteger(1),
            'spkpbmdibatalkan_direvisi' => $this->smallInteger(1),
            'nospkpbmrevisi' => $this->integer(11)->defaultValue(0),
            'tglspkpbmrevisi' => $this->datetime(),
            'dijawabdenganpenjelasan' => $this->smallInteger(1),
            'pengajuandibatalkan' => $this->smallInteger(1),
            'tglterimasuratpembatalan' => $this->datetime(),
            'nosuratbatalkebaratan' => $this->string(50),
            'tglsuratpembatalankeberatan' => $this->datetime(),
            'diteruskan' => $this->smallInteger(1),
            'nomorsuratpenerusan' => $this->string(50),
            'tanggalsrtpenerusan' => $this->datetime(),
            'diputuskan' => $this->smallInteger(1),
            'nokep' => $this->string(255),
            'tglkep' => $this->datetime(),
            'jenispenetapan' => $this->string(50),
            'hasilkeputusan' => $this->string(255),
            'tagihanhasilkep' => $this->decimal(19,4)->defaultValue('0.0000'),
            'mintarisalah' => $this->smallInteger(1),
            'nomornd' => $this->string(50),
            'tanggalndrisalah' => $this->datetime(),
            'mintarisalah tambahan' => $this->string(250),
            'terimarisalah' => $this->smallInteger(1),
            'tanggalterimarisalah' => $this->datetime(),
            'mintaaudit' => $this->smallInteger(1),
            'ndmintaaudit' => $this->string(50),
            'tglndmintaaudit' => $this->datetime(),
            'terimandlha' => $this->smallInteger(1),
            'tanggalterimalha' => $this->datetime(),
            'nomorndlha' => $this->string(50),
            'tglndlha' => $this->datetime(),
            'nomorlha' => $this->string(50),
            'tgllha' => $this->datetime(),
            'mintadata' => $this->smallInteger(1),
            'srtmintadata' => $this->string(50),
            'tglsrtdata' => $this->datetime(),
            'terimadatatambahan' => $this->datetime(),
            'tglterimadatatambahan' => $this->datetime(),
            'nosuratpengantardatatambahan' => $this->string(50),
            'tglsurat' => $this->datetime(),
            'dimintasub' => $this->smallInteger(1),
            'dimintarevisinotul' => $this->smallInteger(1),
            'nondpermintaannotulrevisi' => $this->integer(11)->defaultValue(0),
            'tglndpermintaannotulrevisi' => $this->datetime(),
            'keterangan' => $this->text(),
            'noagendakantor' => $this->string(50),
            'tglagenda' => $this->datetime(),
            'diserahkankeseksi' => $this->smallInteger(1),
            'tglpenyerahankeseksi' => $this->datetime(),
            'diserahkankekabid' => $this->smallInteger(1),
            'tglpenyerahankekabid' => $this->datetime(),
            'jenisbarang' => $this->string(255),
            'hspib' => $this->string(50),
            'tarifpib' => $this->string(50),
            'hspfpd' => $this->string(50),
            'tarifpfpd' => $this->string(50),
            'hskeputusan' => $this->string(50),
            'tarifkep' => $this->string(50),
            'ketpenetapan' => $this->string(255),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('datakeberatan2016');
    }
}
