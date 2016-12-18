<?php

namespace app\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "ims_master".
 *
 * @property string $id
 * @property string $agenda
 * @property string $tgl
 * @property string $npwp
 * @property string $urbar
 *
 * @property \app\models\ImsDetail[] $imsDetails
 */
class ImsMaster extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agenda', 'tgl', 'npwp', 'urbar'], 'required'],
            [['tgl'], 'safe'],
            [['agenda'], 'string', 'max' => 22],
            [['npwp'], 'string', 'max' => 11],
            [['urbar'], 'string', 'max' => 55]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_master';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'agenda' => 'Agenda',
            'tgl' => 'Tgl',
            'npwp' => 'Npwp',
            'urbar' => 'Urbar',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImsDetails()
    {
        return $this->hasMany(\app\models\ImsDetail::className(), ['link_ims' => 'id']);
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
     * @return \app\models\ImsMasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\ImsMasterQuery(get_called_class());
    }
}
