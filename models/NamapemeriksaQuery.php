<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Namapemeriksa]].
 *
 * @see Namapemeriksa
 */
class NamapemeriksaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Namapemeriksa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Namapemeriksa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}