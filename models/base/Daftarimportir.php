<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "daftarimportir".
 *
 * @property integer $id
 * @property string $npwpimp
 * @property string $namaimp
 * @property string $alamatimp
 *
 * @property \app\models\Datakeberatan2016[] $datakeberatan2016s
 */
class Daftarimportir extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['npwpimp', 'namaimp'], 'required'],
            [['npwpimp'], 'string', 'max' => 50],
            [['namaimp'], 'string', 'max' => 255],
            [['alamatimp'], 'string', 'max' => 225],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daftarimportir';
    }

    /**
     * 
     * @return string
     * overwrite function optimisticLock
     * return string name of field are used to stored optimistic lock 
     * 
     */
    public function optimisticLock() {
        return 'lock';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'npwpimp' => 'Npwpimp',
            'namaimp' => 'Namaimp',
            'alamatimp' => 'Alamatimp',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDatakeberatan2016s()
    {
        return $this->hasMany(\app\models\Datakeberatan2016::className(), ['namaperusahaan' => 'id']);
    }
    
/**
     * @inheritdoc
     * @return array mixed
     */ 
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\DaftarimportirQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\DaftarimportirQuery(get_called_class());
    }
}
