<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_beta".
 *
 * @property int $id
 * @property int $sn
 * @property int $device_id
 *
 * @property Device $device
 * @property UnitBetaData[] $unitBetaDatas
 */
class UnitBeta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_beta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sn', 'device_id'], 'integer'],
            [['device_id'], 'exist', 'skipOnError' => true, 'targetClass' => Device::className(), 'targetAttribute' => ['device_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sn' => 'Sn',
            'device_id' => 'Device ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevice()
    {
        return $this->hasOne(Device::className(), ['id' => 'device_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitBetaDatas()
    {
        return $this->hasMany(UnitBetaData::className(), ['unit_beta_id' => 'id']);
    }
}
