<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Daftarpfpd]].
 *
 * @see Daftarpfpd
 */
class DaftarpfpdQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Daftarpfpd[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Daftarpfpd|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}