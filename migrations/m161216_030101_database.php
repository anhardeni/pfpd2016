<?php

use yii\db\Schema;

class m161216_030101_database extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('auth_rule', [
            'name' => $this->string(64)->notNull(),
            'data' => $this->text(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'PRIMARY KEY ([[name]])',
        ], $tableOptions);
        
        $this->createTable('auth_item', [
            'name' => $this->string(64)->notNull(),
            'type' => $this->integer(11)->notNull(),
            'description' => $this->text(),
            'rule_name' => $this->string(64),
            'data' => $this->text(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'PRIMARY KEY ([[name]])',
            'FOREIGN KEY ([[rule_name]]) REFERENCES auth_rule ([[name]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
        
        $this->createTable('auth_assignment', [
            'item_name' => $this->string(64)->notNull(),
            'user_id' => $this->string(64)->notNull(),
            'created_at' => $this->integer(11),
            'PRIMARY KEY ([[item_name]], [[user_id]])',
            'FOREIGN KEY ([[item_name]]) REFERENCES auth_item ([[name]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
        
        $this->createTable('auth_item_child', [
            'parent' => $this->string(64)->notNull(),
            'child' => $this->string(64)->notNull(),
            'PRIMARY KEY ([[parent]], [[child]])',
            'FOREIGN KEY ([[child]]) REFERENCES auth_item ([[name]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
        
        $this->createTable('cache', [
            'id' => $this->char(128)->notNull(),
            'expire' => $this->integer(11)->notNull(),
            'data' => $this->binary()->notNull(),
        ], $tableOptions);
        
        $this->createTable('daftarimportir', [
            'id' => $this->primaryKey(),
            'npwpimp' => $this->string(50)->notNull(),
            'namaimp' => $this->string(255)->notNull(),
            'alamatimp' => $this->string(225),
        ], $tableOptions);
        
        $this->createTable('daftarpfpd', [
            'id' => $this->primaryKey(),
            'nip' => $this->string(15)->notNull(),
            'pfpd' => $this->string(255)->notNull(),
            'status' => $this->string()->notNull()->defaultValue('Active'),
        ], $tableOptions);
        
        $this->createTable('databarang', [
            'idbarang' => $this->primaryKey(),
            'pos' => $this->string(50)->notNull(),
            'sptnp' => $this->string(50)->notNull(),
            'tglsptnp' => $this->date()->notNull(),
            'barang' => $this->string(250)->notNull(),
            'n_a' => $this->string(50)->notNull(),
            'hs_pib' => $this->string(15)->notNull(),
            'tarif_pib' => $this->string(15)->notNull(),
            'np_pib' => $this->double()->notNull(),
            'hs_pfpd' => $this->string(15)->notNull(),
            'tarif_pfpd' => $this->string(15)->notNull(),
            'np_pfpd' => $this->double()->notNull(),
            'hs_kep' => $this->string(15)->notNull(),
            'tarif_kep' => $this->string(15)->notNull(),
            'np_kep' => $this->double()->notNull(),
            'keterangan' => $this->text()->notNull(),
        ], $tableOptions);
        
        $this->createTable('namapemeriksa', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50),
            'nip' => $this->string(50),
            'status' => $this->string()->notNull()->defaultValue('Active'),
        ], $tableOptions);
        
        $this->createTable('datakeberatan2016', [
            'id' => $this->bigPrimaryKey(),
            'tglmasukkeberatan' => $this->date(),
            'tgljatuhtempo' => $this->date(),
            'namaperusahaan' => $this->integer(11),
            'qq' => $this->string(50),
            'nomorsuratpermohonan' => $this->string(255),
            'tanggalsuratpermohonan' => $this->date(),
            'suratpenetapan' => $this->string(255),
            'nospkpbm_spsa' => $this->integer(11)->defaultValue(0),
            'tglspkpbm_spsa' => $this->date(),
            'jumlahtagihan' => $this->decimal(19,4)->defaultValue('0.0000'),
            'salah' => $this->string(255),
            'nopib' => $this->string(255),
            'tglpib' => $this->date(),
            'namapfpd' => $this->integer(11),
            'jalur' => $this->string(),
            'spkpbmgabungan' => $this->smallInteger(1)->defaultValue(0),
            'nospkpbmgabungan' => $this->integer(11)->defaultValue(0),
            'tglspkpbmgabungan' => $this->date(),
            'jumlahtagihanspkpbmlanjutan' => $this->decimal(19,4)->defaultValue('0.0000'),
            'jenisjaminan' => $this->string(),
            'nomorbpj_sspcp' => $this->string(50),
            'tglbpj_sspcp' => $this->date(),
            'kasikeberatan' => $this->string(),
            'ekspedisikankekasikeberatan' => $this->smallInteger(1),
            'namapemeriksa' => $this->integer(11),
            'ditolakformal' => $this->smallInteger(1)->defaultValue(0),
            'spkpbmlebih30hari' => $this->smallInteger(1)->defaultValue(0),
            'spkpbmdibatalkan_direvisi' => $this->smallInteger(1)->defaultValue(0),
            'nospkpbmrevisi' => $this->integer(11)->defaultValue(0),
            'tglspkpbmrevisi' => $this->date(),
            'dijawabdenganpenjelasan' => $this->smallInteger(1)->defaultValue(0),
            'pengajuandibatalkan' => $this->smallInteger(1),
            'tglterimasuratpembatalan' => $this->date(),
            'nosuratbatalkebaratan' => $this->string(50),
            'tglsuratpembatalankeberatan' => $this->date(),
            'diteruskan' => $this->smallInteger(1)->defaultValue(0),
            'nomorsuratpenerusan' => $this->string(50),
            'tanggalsrtpenerusan' => $this->date(),
            'diputuskan' => $this->smallInteger(1),
            'nokep' => $this->string(255),
            'tglkep' => $this->date(),
            'jenispenetapan' => $this->string(),
            'hasilkeputusan' => $this->string(),
            'tagihanhasilkep' => $this->decimal(19,4)->defaultValue('0.0000'),
            'mintarisalah' => $this->smallInteger(1)->defaultValue(0),
            'nomornd' => $this->string(50),
            'tanggalndrisalah' => $this->date(),
            'mintarisalahtambahan' => $this->string(250),
            'terimarisalah' => $this->smallInteger(1),
            'tanggalterimarisalah' => $this->date(),
            'mintaaudit' => $this->smallInteger(1),
            'ndmintaaudit' => $this->string(50),
            'tglndmintaaudit' => $this->date(),
            'terimandlha' => $this->smallInteger(1)->defaultValue(0),
            'tanggalterimalha' => $this->date(),
            'nomorndlha' => $this->string(50),
            'tglndlha' => $this->date(),
            'nomorlha' => $this->string(50),
            'tgllha' => $this->date(),
            'mintadata' => $this->smallInteger(1)->defaultValue(0),
            'srtmintadata' => $this->string(50),
            'tglsrtdata' => $this->date(),
            'terimadatatambahan' => $this->date(),
            'tglterimadatatambahan' => $this->date(),
            'nosuratpengantardatatambahan' => $this->string(50),
            'tglsurat' => $this->date(),
            'dimintasub' => $this->smallInteger(1),
            'dimintarevisinotul' => $this->smallInteger(1)->defaultValue(0),
            'nondpermintaannotulrevisi' => $this->integer(11)->defaultValue(0),
            'tglndpermintaannotulrevisi' => $this->date(),
            'keterangan' => $this->text(),
            'noagendakantor' => $this->string(50),
            'tglagenda' => $this->date(),
            'diserahkankeseksi' => $this->smallInteger(1),
            'tglpenyerahankeseksi' => $this->date(),
            'diserahkankekabid' => $this->smallInteger(1)->defaultValue(0),
            'tglpenyerahankekabid' => $this->date(),
            'jenisbarang' => $this->string(255),
            'hspib' => $this->string(50),
            'tarifpib' => $this->string(50),
            'hspfpd' => $this->string(50),
            'tarifpfpd' => $this->string(50),
            'hskeputusan' => $this->string(50),
            'tarifkep' => $this->string(50),
            'ketpenetapan' => $this->string(255),
            'created_at' => $this->datetime(),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
            'updated_at' => $this->datetime(),
            'idnoagenda' => $this->string(50),
            'formalterbit' => $this->string(),
            'formalaju' => $this->string(),
            'mslh' => $this->string(250),
            'teliti' => $this->string(250),
            'pendpt' => $this->string(250),
            'bm' => $this->double(),
            'bm_t' => $this->double(),
            'cukai' => $this->double(),
            'cukai_t' => $this->double(),
            'ppn' => $this->double(),
            'ppn_t' => $this->double(),
            'ppnbm' => $this->double(),
            'ppnbm_t' => $this->double(),
            'pph' => $this->double(),
            'pph_t' => $this->double(),
            'denda' => $this->double(),
            'denda_t' => $this->double(),
            'berkasselesai' => $this->smallInteger(1)->notNull()->defaultValue(0),
            'idttmohon' => $this->bigInteger(20),
            'FOREIGN KEY ([[namaperusahaan]]) REFERENCES daftarimportir ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[namapfpd]]) REFERENCES daftarpfpd ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY ([[namapemeriksa]]) REFERENCES namapemeriksa ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
        
        $this->createTable('datastatus', [
            'id' => $this->primaryKey(),
            'idkeberatan' => $this->integer(11)->notNull(),
            'idimportir' => $this->integer(11)->notNull(),
            'idnoagenda' => $this->string(50)->notNull(),
            'status' => $this->string(100)->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultValue(CURRENT_TIMESTAMP),
            'idttpermohonan' => $this->integer(11)->notNull(),
        ], $tableOptions);
        
        $this->createTable('entry', [
            'tglmasukkeberatan' => $this->date(),
            'namaperusahaan' => $this->integer(11),
            'berkasselesai' => $this->smallInteger(1)->notNull()->defaultValue(0),
        ], $tableOptions);
        
        $this->createTable('hasilkeberatan', [
            'id' => $this->bigInteger(20)->notNull()->defaultValue('0'),
            'namaperusahaan' => $this->integer(11),
        ], $tableOptions);
        
        $this->createTable('ims_datastatus', [
            'id' => $this->primaryKey(),
            'idkeberatan' => $this->integer(11)->notNull(),
            'idimportir' => $this->integer(11)->notNull(),
            'idnoagenda' => $this->string(50)->notNull(),
            'status' => $this->string(100)->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00:00'),
            'idttpermohonan' => $this->integer(11)->notNull(),
        ], $tableOptions);
        
        $this->createTable('ims_master', [
            'id' => $this->bigPrimaryKey(),
            'jenisims' => $this->string(),
            'ajuims' => $this->string(),
            'agenda' => $this->string(22),
            'tglagenda' => $this->date(),
            'nomhnims' => $this->string(25)->notNull(),
            'tglmhnims' => $this->date()->notNull(),
            'jumlah' => $this->string(50),
            'jenisbrg' => $this->string(250),
            'spesbrg' => $this->string(250),
            'pemilik' => $this->string(50),
            'kondisi' => $this->string(),
            'negaraasal' => $this->string(3),
            'val' => $this->string(3),
            'np' => $this->double(),
            'hs' => $this->string(10),
            'pelmasuk' => $this->string(50),
            'tuj' => $this->string(200),
            'lokasi' => $this->string(100),
            'jatuhtempo' => $this->date(),
            'ditetapkan' => $this->date(),
            'nipkk' => $this->integer(11),
            'ekspedisipfpd' => $this->smallInteger(1),
            'pib' => $this->string(6),
            'tglpib' => $this->date(),
            'np_rp' => $this->integer(11),
            'ket' => $this->string(200),
            'idpemeriksa' => $this->integer(11),
            'kasi' => $this->string(),
            'statusselesai' => $this->smallInteger(1),
            'keputusan' => $this->string()->notNull(),
            'created_at' => $this->datetime(),
            'created_by' => $this->integer(11),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
        
        $this->createTable('ims_detail', [
            'id' => $this->bigPrimaryKey(),
            'link_ims' => $this->bigInteger(20)->notNull(),
            'urbar' => $this->string(55),
            'hs' => $this->string(10),
            'hs_t' => $this->string(10),
            'bm' => $this->float(),
            'bm_t' => $this->float(),
            'ppn' => $this->float(),
            'ppn_t' => $this->float(),
            'pph' => $this->integer(11),
            'pph_t' => $this->integer(11),
            'val' => $this->string(3),
            'np' => $this->integer(11),
            'np_t' => $this->integer(11),
            'ket' => $this->string(200),
            'FOREIGN KEY ([[link_ims]]) REFERENCES ims_master ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
        
        $this->createTable('ims_tneg', [
            'idpel' => $this->string(3)->notNull(),
            'negarapelabuhan' => $this->string(55)->notNull(),
            'PRIMARY KEY ([[idpel]])',
        ], $tableOptions);
        
        $this->createTable('ims_ttaju', [
            'id' => $this->bigPrimaryKey(),
            'noagendakantor' => $this->string(50),
            'tglterimapermohonan' => $this->datetime()->defaultValue('0000-00-00 00:00:00'),
            'idpemohon' => $this->integer(11)->notNull(),
            'nosuratpermohonan' => $this->string(100)->notNull(),
            'tglsuratpermohonan' => $this->date(),
            'l_bpj' => $this->smallInteger(1)->defaultValue(0),
            'l_billing' => $this->smallInteger(1)->defaultValue(0),
            'l_suratpernyataan' => $this->smallInteger(1)->defaultValue(0),
            'l_sptnp' => $this->smallInteger(1)->defaultValue(0),
            'l_spp' => $this->smallInteger(1)->defaultValue(0),
            'l_spsa' => $this->smallInteger(1)->defaultValue(0),
            'l_penetapanpabeanlainnya' => $this->smallInteger(1)->defaultValue(0),
            'l_pib' => $this->smallInteger(1)->defaultValue(0),
            'l_invoice' => $this->smallInteger(1)->defaultValue(0),
            'l_packinglist' => $this->smallInteger(1)->defaultValue(0),
            'l_awb_bl' => $this->smallInteger(1)->defaultValue(0),
            'l_dokpelengkaplainnya' => $this->smallInteger(1)->defaultValue(0),
            'berkaslengkapbenar' => $this->smallInteger(1)->notNull()->defaultValue(0),
            'ket' => $this->string(250),
            'created_by' => $this->integer(11),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
        
        $this->createTable('kategori', [
            'id' => $this->primaryKey(),
            'namekategori' => $this->string(200)->notNull(),
        ], $tableOptions);
        
        $this->createTable('migration', [
            'version' => $this->string(180)->notNull(),
            'apply_time' => $this->integer(11),
            'PRIMARY KEY ([[version]])',
        ], $tableOptions);
        
        $this->createTable('notatelit', [
            'id' => $this->primaryKey(),
            'idkeberatan' => $this->integer(11)->notNull(),
            'idnoagenda' => $this->string(50)->notNull(),
        ], $tableOptions);
        
        $this->createTable('repair_datastatus', [
            'id' => $this->primaryKey(),
            'idkeberatan' => $this->integer(11)->notNull(),
            'idimportir' => $this->integer(11)->notNull(),
            'idnoagenda' => $this->string(50)->notNull(),
            'status' => $this->string(100)->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultValue('0000-00-00 00:00:00'),
            'idttpermohonan' => $this->integer(11)->notNull(),
        ], $tableOptions);
        
        $this->createTable('repair_master', [
            'id' => $this->bigPrimaryKey(),
            'jenisims' => $this->string(),
            'ajuims' => $this->string(),
            'agenda' => $this->string(22),
            'tglagenda' => $this->date(),
            'nomhnims' => $this->string(25)->notNull(),
            'tglmhnims' => $this->date()->notNull(),
            'jumlah' => $this->string(50),
            'jenisbrg' => $this->string(250),
            'spesbrg' => $this->string(250),
            'pemilik' => $this->string(50),
            'kondisi' => $this->string(),
            'negaraasal' => $this->string(3),
            'val' => $this->string(3),
            'np' => $this->double(),
            'hs' => $this->string(10),
            'pelmasuk' => $this->string(50),
            'tuj' => $this->string(200),
            'lokasi' => $this->string(100),
            'jatuhtempo' => $this->date(),
            'ditetapkan' => $this->date(),
            'nipkk' => $this->integer(11),
            'ekspedisipfpd' => $this->smallInteger(1),
            'pib' => $this->string(6),
            'tglpib' => $this->date(),
            'np_rp' => $this->integer(11),
            'ket' => $this->string(200),
            'idpemeriksa' => $this->integer(11),
            'kasi' => $this->string(),
            'statusselesai' => $this->smallInteger(1),
            'keputusan' => $this->string()->notNull(),
            'created_at' => $this->datetime(),
            'created_by' => $this->integer(11),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
        
        $this->createTable('repair_ttaju', [
            'id' => $this->bigPrimaryKey(),
            'noagendakantor' => $this->string(50),
            'tglterimapermohonan' => $this->datetime()->defaultValue('0000-00-00 00:00:00'),
            'idpemohon' => $this->integer(11)->notNull(),
            'nosuratpermohonan' => $this->string(100)->notNull(),
            'tglsuratpermohonan' => $this->date(),
            'l_bpj' => $this->smallInteger(1)->defaultValue(0),
            'l_billing' => $this->smallInteger(1)->defaultValue(0),
            'l_suratpernyataan' => $this->smallInteger(1)->defaultValue(0),
            'l_sptnp' => $this->smallInteger(1)->defaultValue(0),
            'l_spp' => $this->smallInteger(1)->defaultValue(0),
            'l_spsa' => $this->smallInteger(1)->defaultValue(0),
            'l_penetapanpabeanlainnya' => $this->smallInteger(1)->defaultValue(0),
            'l_pib' => $this->smallInteger(1)->defaultValue(0),
            'l_invoice' => $this->smallInteger(1)->defaultValue(0),
            'l_packinglist' => $this->smallInteger(1)->defaultValue(0),
            'l_awb_bl' => $this->smallInteger(1)->defaultValue(0),
            'l_dokpelengkaplainnya' => $this->smallInteger(1)->defaultValue(0),
            'berkaslengkapbenar' => $this->smallInteger(1)->notNull()->defaultValue(0),
            'ket' => $this->string(250),
            'created_by' => $this->integer(11),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
        
        $this->createTable('route', [
            'name' => $this->string(64)->notNull(),
            'alias' => $this->string(64)->notNull(),
            'type' => $this->string(64)->notNull(),
            'status' => $this->smallInteger(6)->notNull()->defaultValue(1),
            'PRIMARY KEY ([[name]])',
        ], $tableOptions);
        
        $this->createTable('ttpermohonan', [
            'id' => $this->bigPrimaryKey(),
            'noagendakantor' => $this->string(50)->notNull(),
            'tglterimapermohonan' => $this->date()->notNull(),
            'tgljatuhtempo' => $this->date(),
            'idpemohon' => $this->integer(11)->notNull(),
            'nosuratpermohonan' => $this->string(100)->notNull(),
            'tglsuratpermohonan' => $this->date(),
            'l_bpj' => $this->smallInteger(1)->defaultValue(0),
            'l_billing' => $this->smallInteger(1)->defaultValue(0),
            'l_suratpernyataan' => $this->smallInteger(1)->defaultValue(0),
            'l_sptnp' => $this->smallInteger(1)->defaultValue(0),
            'l_spp' => $this->smallInteger(1)->defaultValue(0),
            'l_spsa' => $this->smallInteger(1)->defaultValue(0),
            'l_penetapanpabeanlainnya' => $this->smallInteger(1)->defaultValue(0),
            'l_pib' => $this->smallInteger(1)->defaultValue(0),
            'l_invoice' => $this->smallInteger(1)->defaultValue(0),
            'l_packinglist' => $this->smallInteger(1)->defaultValue(0),
            'l_awb_bl' => $this->smallInteger(1)->defaultValue(0),
            'l_dokpelengkaplainnya' => $this->smallInteger(1)->defaultValue(0),
            'berkaslengkapbenar' => $this->smallInteger(1)->notNull()->defaultValue(0),
            'created_by' => $this->integer(11),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
            'FOREIGN KEY ([[idpemohon]]) REFERENCES daftarimportir ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
        ], $tableOptions);
        
        $this->createTable('ttpermohonan1', [
            'id' => $this->bigPrimaryKey(),
            'noagendakantor' => $this->string(50)->notNull(),
            'tglterimapermohonan' => $this->date()->notNull(),
            'tgljatuhtempo' => $this->date(),
            'idpemohon' => $this->integer(11)->notNull(),
            'nosuratpermohonan' => $this->string(100)->notNull(),
            'tglsuratpermohonan' => $this->date(),
            'l_bpj' => $this->smallInteger(1)->defaultValue(0),
            'l_billing' => $this->smallInteger(1)->defaultValue(0),
            'l_suratpernyataan' => $this->smallInteger(1)->defaultValue(0),
            'l_sptnp' => $this->smallInteger(1)->defaultValue(0),
            'l_spp' => $this->smallInteger(1)->defaultValue(0),
            'l_spsa' => $this->smallInteger(1)->defaultValue(0),
            'l_penetapanpabeanlainnya' => $this->smallInteger(1)->defaultValue(0),
            'l_pib' => $this->smallInteger(1)->defaultValue(0),
            'l_invoice' => $this->smallInteger(1)->defaultValue(0),
            'l_packinglist' => $this->smallInteger(1)->defaultValue(0),
            'l_awb_bl' => $this->smallInteger(1)->defaultValue(0),
            'l_dokpelengkaplainnya' => $this->smallInteger(1)->defaultValue(0),
            'berkaslengkapbenar' => $this->smallInteger(1)->notNull()->defaultValue(0),
            'created_by' => $this->integer(11),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
        
        $this->createTable('ttpermohonan_old', [
            'id' => $this->bigPrimaryKey(),
            'noagendakantor' => $this->string(50)->notNull(),
            'tglterimapermohonan' => $this->date()->notNull(),
            'tgljatuhtempo' => $this->date(),
            'idpemohon' => $this->integer(11)->notNull(),
            'nosuratpermohonan' => $this->string(100)->notNull(),
            'tglsuratpermohonan' => $this->date(),
            'l_bpj' => $this->smallInteger(1)->defaultValue(0),
            'l_billing' => $this->smallInteger(1)->defaultValue(0),
            'l_suratpernyataan' => $this->smallInteger(1)->defaultValue(0),
            'l_sptnp' => $this->smallInteger(1)->defaultValue(0),
            'l_spp' => $this->smallInteger(1)->defaultValue(0),
            'l_spsa' => $this->smallInteger(1)->defaultValue(0),
            'l_penetapanpabeanlainnya' => $this->smallInteger(1)->defaultValue(0),
            'l_pib' => $this->smallInteger(1)->defaultValue(0),
            'l_invoice' => $this->smallInteger(1)->defaultValue(0),
            'l_packinglist' => $this->smallInteger(1)->defaultValue(0),
            'l_awb_bl' => $this->smallInteger(1)->defaultValue(0),
            'l_dokpelengkaplainnya' => $this->smallInteger(1)->defaultValue(0),
            'berkaslengkapbenar' => $this->smallInteger(1)->notNull()->defaultValue(0),
            'created_by' => $this->integer(11),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
        
        $this->createTable('ttpermohonanold1', [
            'id' => $this->bigPrimaryKey(),
            'noagendakantor' => $this->string(50)->notNull(),
            'tglterimapermohonan' => $this->date()->notNull(),
            'tgljatuhtempo' => $this->date(),
            'idpemohon' => $this->integer(11)->notNull(),
            'nosuratpermohonan' => $this->string(100)->notNull(),
            'tglsuratpermohonan' => $this->date(),
            'l_bpj' => $this->smallInteger(1)->defaultValue(0),
            'l_billing' => $this->smallInteger(1)->defaultValue(0),
            'l_suratpernyataan' => $this->smallInteger(1)->defaultValue(0),
            'l_sptnp' => $this->smallInteger(1)->defaultValue(0),
            'l_spp' => $this->smallInteger(1)->defaultValue(0),
            'l_spsa' => $this->smallInteger(1)->defaultValue(0),
            'l_penetapanpabeanlainnya' => $this->smallInteger(1)->defaultValue(0),
            'l_pib' => $this->smallInteger(1)->defaultValue(0),
            'l_invoice' => $this->smallInteger(1)->defaultValue(0),
            'l_packinglist' => $this->smallInteger(1)->defaultValue(0),
            'l_awb_bl' => $this->smallInteger(1)->defaultValue(0),
            'l_dokpelengkaplainnya' => $this->smallInteger(1)->defaultValue(0),
            'berkaslengkapbenar' => $this->smallInteger(1)->notNull()->defaultValue(0),
            'created_by' => $this->integer(11),
            'created_at' => $this->datetime(),
            'updated_at' => $this->datetime(),
            'updated_by' => $this->integer(11),
        ], $tableOptions);
        
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'password_reset_token' => $this->string(255),
            'email' => $this->string(255)->notNull(),
            'status' => $this->smallInteger(6)->notNull()->defaultValue(10),
            'created_at' => $this->integer(11)->notNull(),
            'updated_at' => $this->integer(11)->notNull(),
        ], $tableOptions);
        
        $this->createTable('user1', [
            'id' => $this->primaryKey(),
            'user' => $this->string(30),
            'password' => $this->string(100),
            'nama' => $this->string(100),
            'nip' => $this->string(255),
            'gol' => $this->string(5),
            'tanya' => $this->string(100),
            'jawab' => $this->string(20),
            'aktif' => $this->integer(11)->defaultValue(0),
            'hp' => $this->string(14)->notNull(),
            'unit' => $this->string(15)->notNull(),
            'loglast' => $this->datetime()->notNull(),
            'tipe' => $this->string(50)->notNull(),
            'foto' => $this->string(50)->notNull(),
            'jabatan' => $this->string(75),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('user1');
        $this->dropTable('user');
        $this->dropTable('ttpermohonanold1');
        $this->dropTable('ttpermohonan_old');
        $this->dropTable('ttpermohonan1');
        $this->dropTable('ttpermohonan');
        $this->dropTable('route');
        $this->dropTable('repair_ttaju');
        $this->dropTable('repair_master');
        $this->dropTable('repair_datastatus');
        $this->dropTable('notatelit');
        $this->dropTable('migration');
        $this->dropTable('kategori');
        $this->dropTable('ims_ttaju');
        $this->dropTable('ims_tneg');
        $this->dropTable('ims_detail');
        $this->dropTable('ims_master');
        $this->dropTable('ims_datastatus');
        $this->dropTable('hasilkeberatan');
        $this->dropTable('entry');
        $this->dropTable('datastatus');
        $this->dropTable('datakeberatan2016');
        $this->dropTable('namapemeriksa');
        $this->dropTable('databarang');
        $this->dropTable('daftarpfpd');
        $this->dropTable('daftarimportir');
        $this->dropTable('cache');
        $this->dropTable('auth_item_child');
        $this->dropTable('auth_assignment');
        $this->dropTable('auth_item');
        $this->dropTable('auth_rule');
    }
}
