<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ttpermohonan]].
 *
 * @see Ttpermohonan
 */
class TtpermohonanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Ttpermohonan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Ttpermohonan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}