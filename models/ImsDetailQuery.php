<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ImsDetail]].
 *
 * @see ImsDetail
 */
class ImsDetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ImsDetail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ImsDetail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}