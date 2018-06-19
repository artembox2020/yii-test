<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compnay".
 *
 * @property int $id
 * @property string $name
 *
 * @property BalanceHolder[] $balanceHolders
 */
class Compnay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compnay';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBalanceHolders()
    {
        return $this->hasMany(BalanceHolder::className(), ['company_id' => 'id']);
    }
}
