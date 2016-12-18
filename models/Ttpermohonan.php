<?php

namespace app\models;

use \app\models\base\Ttpermohonan as BaseTtpermohonan;

/**
 * This is the model class for table "ttpermohonan".
 */
class Ttpermohonan extends BaseTtpermohonan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['noagendakantor', 'tglterimapermohonan', 'idpemohon', 'nosuratpermohonan', 'berkaslengkapbenar'], 'required'],
            [['tglterimapermohonan', 'tgljatuhtempo', 'tglsuratpermohonan', 'created_at', 'updated_at'], 'safe'],
            [['idpemohon', 'l_bpj', 'l_billing', 'l_suratpernyataan', 'l_sptnp', 'l_spp', 'l_spsa', 'l_penetapanpabeanlainnya', 'l_pib', 'l_invoice', 'l_packinglist', 'l_awb_bl', 'l_dokpelengkaplainnya', 'berkaslengkapbenar', 'created_by', 'updated_by'], 'integer'],
            [['noagendakantor'], 'string', 'max' => 50],
            [['nosuratpermohonan'], 'string', 'max' => 100]
        ]);
    }
	
}
