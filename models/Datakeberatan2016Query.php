<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Datakeberatan2016]].
 *
 * @see Datakeberatan2016
 */
class Datakeberatan2016Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Datakeberatan2016[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Datakeberatan2016|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}