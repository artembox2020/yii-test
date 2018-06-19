<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_alfa_data".
 *
 * @property int $id
 * @property int $sn
 * @property int $unit_alfa_id
 *
 * @property UnitAlfa $unitAlfa
 */
class UnitAlfaData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_alfa_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sn', 'unit_alfa_id'], 'integer'],
            [['unit_alfa_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnitAlfa::className(), 'targetAttribute' => ['unit_alfa_id' => 'id']],
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
            'unit_alfa_id' => 'Unit Alfa ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitAlfa()
    {
        return $this->hasOne(UnitAlfa::className(), ['id' => 'unit_alfa_id']);
    }
}
