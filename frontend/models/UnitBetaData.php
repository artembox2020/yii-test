<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_beta_data".
 *
 * @property int $id
 * @property int $sn
 * @property int $unit_beta_id
 *
 * @property UnitBeta $unitBeta
 */
class UnitBetaData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_beta_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sn', 'unit_beta_id'], 'integer'],
            [['unit_beta_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnitBeta::className(), 'targetAttribute' => ['unit_beta_id' => 'id']],
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
            'unit_beta_id' => 'Unit Beta ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitBeta()
    {
        return $this->hasOne(UnitBeta::className(), ['id' => 'unit_beta_id']);
    }
}
