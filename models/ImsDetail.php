<?php

namespace app\models;

use \app\models\base\ImsDetail as BaseImsDetail;

/**
 * This is the model class for table "ims_detail".
 */
class ImsDetail extends BaseImsDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['link_ims', 'urbar', 'bm', 'trf'], 'required'],
            [['link_ims', 'bm', 'trf'], 'integer'],
            [['urbar'], 'string', 'max' => 55]
        ]);
    }
	
}
