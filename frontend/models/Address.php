<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property string $name
 * @property int $balance_holder_id
 *
 * @property BalanceHolder $balanceHolder
 * @property Device[] $devices
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['balance_holder_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['balance_holder_id'], 'exist', 'skipOnError' => true, 'targetClass' => BalanceHolder::className(), 'targetAttribute' => ['balance_holder_id' => 'id']],
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
            'balance_holder_id' => 'Balance Holder ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBalanceHolder()
    {
        return $this->hasOne(BalanceHolder::className(), ['id' => 'balance_holder_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevices()
    {
        return $this->hasMany(Device::className(), ['address_id' => 'id']);
    }
}
