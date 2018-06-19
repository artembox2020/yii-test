<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_alfa".
 *
 * @property int $id
 * @property int $serial_number
 * @property int $device_id
 *
 * @property Device $device
 * @property UnitAlfaData[] $unitAlfaDatas
 */
class UnitAlfa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_alfa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serial_number', 'device_id'], 'integer'],
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
            'serial_number' => 'Serial Number',
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
    public function getUnitAlfaDatas()
    {
        return $this->hasMany(UnitAlfaData::className(), ['unit_alfa_id' => 'id']);
    }
}
