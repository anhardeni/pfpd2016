<?php

namespace app\models;

use \app\models\base\ImsMaster as BaseImsMaster;

/**
 * This is the model class for table "ims_master".
 */
class ImsMaster extends BaseImsMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['agenda', 'tgl', 'npwp', 'urbar'], 'required'],
            [['tgl'], 'safe'],
            [['agenda'], 'string', 'max' => 22],
            [['npwp'], 'string', 'max' => 11],
            [['urbar'], 'string', 'max' => 55]
        ]);
    }
	
}
