<?php

namespace app\models;

use \app\models\base\Daftarpfpd as BaseDaftarpfpd;

/**
 * This is the model class for table "daftarpfpd".
 */
class Daftarpfpd extends BaseDaftarpfpd
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['nip', 'pfpd'], 'required'],
            [['status'], 'string'],
            [['nip'], 'string', 'max' => 15],
            [['pfpd'], 'string', 'max' => 255],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
