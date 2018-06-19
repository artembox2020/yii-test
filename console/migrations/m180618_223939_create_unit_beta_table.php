<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `unit_beta`.
 * Has foreign keys to the tables:
 *
 * - `device`
 */
class m180618_223939_create_unit_beta_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('unit_beta', [
            'id' => Schema::TYPE_PK,
            'sn' => $this->integer(11),
            'device_id' => $this->integer(11),
        ]);

        // creates index for column `device_id`
        $this->createIndex(
            'idx-unit_beta-device_id',
            'unit_beta',
            'device_id'
        );

        // add foreign key for table `device`
        $this->addForeignKey(
            'fk-unit_beta-device_id',
            'unit_beta',
            'device_id',
            'device',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `device`
        $this->dropForeignKey(
            'fk-unit_beta-device_id',
            'unit_beta'
        );

        // drops index for column `device_id`
        $this->dropIndex(
            'idx-unit_beta-device_id',
            'unit_beta'
        );

        $this->dropTable('unit_beta');
    }
}
