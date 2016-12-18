<?php

namespace app\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "ims_detail".
 *
 * @property string $id
 * @property string $link_ims
 * @property string $urbar
 * @property integer $bm
 * @property integer $trf
 *
 * @property \app\models\ImsMaster $linkIms
 */
class ImsDetail extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_ims', 'urbar', 'bm', 'trf'], 'required'],
            [['link_ims', 'bm', 'trf'], 'integer'],
            [['urbar'], 'string', 'max' => 55]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_detail';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link_ims' => 'Link Ims',
            'urbar' => 'Urbar',
            'bm' => 'Bm',
            'trf' => 'Trf',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLinkIms()
    {
        return $this->hasOne(\app\models\ImsMaster::className(), ['id' => 'link_ims']);
    }
    
/**
     * @inheritdoc
     * @return array mixed
     */ 
    public function behaviors()
    {
        return [
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\ImsDetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\ImsDetailQuery(get_called_class());
    }
}
