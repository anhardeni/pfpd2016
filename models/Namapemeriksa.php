<?php

namespace app\models;

use \app\models\base\Namapemeriksa as BaseNamapemeriksa;

/**
 * This is the model class for table "namapemeriksa".
 */
class Namapemeriksa extends BaseNamapemeriksa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['status'], 'string'],
            [['nama', 'nip'], 'string', 'max' => 50],
            [['nip'], 'unique']
        ]);
    }
	
}
