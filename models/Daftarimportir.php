<?php

namespace app\models;

use \app\models\base\Daftarimportir as BaseDaftarimportir;

/**
 * This is the model class for table "daftarimportir".
 */
class Daftarimportir extends BaseDaftarimportir
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['npwpimp', 'namaimp'], 'required'],
            [['npwpimp'], 'string', 'max' => 50],
            [['namaimp'], 'string', 'max' => 255],
            [['alamatimp'], 'string', 'max' => 225],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
