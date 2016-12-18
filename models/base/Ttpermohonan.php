<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "ttpermohonan".
 *
 * @property integer $id
 * @property string $noagendakantor
 * @property string $tglterimapermohonan
 * @property string $tgljatuhtempo
 * @property integer $idpemohon
 * @property string $nosuratpermohonan
 * @property string $tglsuratpermohonan
 * @property integer $l_bpj
 * @property integer $l_billing
 * @property integer $l_suratpernyataan
 * @property integer $l_sptnp
 * @property integer $l_spp
 * @property integer $l_spsa
 * @property integer $l_penetapanpabeanlainnya
 * @property integer $l_pib
 * @property integer $l_invoice
 * @property integer $l_packinglist
 * @property integer $l_awb_bl
 * @property integer $l_dokpelengkaplainnya
 * @property integer $berkaslengkapbenar
 * @property integer $created_by
 * @property string $created_at
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property \app\models\Daftarimportir $pemohon
 */
class Ttpermohonan extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['noagendakantor', 'tglterimapermohonan', 'idpemohon', 'nosuratpermohonan',  'berkaslengkapbenar'], 'required'],
            [['tglterimapermohonan', 'tgljatuhtempo', 'tglsuratpermohonan', 'created_at', 'updated_at'], 'safe'],
            [['idpemohon', 'l_bpj', 'l_billing', 'l_suratpernyataan', 'l_sptnp', 'l_spp', 'l_spsa', 'l_penetapanpabeanlainnya', 'l_pib', 'l_invoice', 'l_packinglist', 'l_awb_bl', 'l_dokpelengkaplainnya', 'berkaslengkapbenar', 'created_by', 'updated_by'], 'integer'],
            [['noagendakantor'], 'string', 'max' => 50],
            [['nosuratpermohonan'], 'string', 'max' => 100]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ttpermohonan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'noagendakantor' => 'Noagendakantor',
            'tglterimapermohonan' => 'Tglterimapermohonan',
            'tgljatuhtempo' => 'Tgljatuhtempo',
            'idpemohon' => 'Idpemohon',
            'nosuratpermohonan' => 'Nosuratpermohonan',
            'tglsuratpermohonan' => 'Tglsuratpermohonan',
            'l_bpj' => 'L Bpj',
            'l_billing' => 'L Billing',
            'l_suratpernyataan' => 'L Suratpernyataan',
            'l_sptnp' => 'L Sptnp',
            'l_spp' => 'L Spp',
            'l_spsa' => 'L Spsa',
            'l_penetapanpabeanlainnya' => 'L Penetapanpabeanlainnya',
            'l_pib' => 'L Pib',
            'l_invoice' => 'L Invoice',
            'l_packinglist' => 'L Packinglist',
            'l_awb_bl' => 'L Awb Bl',
            'l_dokpelengkaplainnya' => 'L Dokpelengkaplainnya',
            'berkaslengkapbenar' => 'Berkaslengkapbenar',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemohon()
    {
        return $this->hasOne(\app\models\Daftarimportir::className(), ['id' => 'idpemohon']);
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
     * @return \app\models\TtpermohonanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\TtpermohonanQuery(get_called_class());
    }
}
