<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ImsMaster]].
 *
 * @see ImsMaster
 */
class ImsMasterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ImsMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ImsMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}