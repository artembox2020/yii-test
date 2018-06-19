<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `unit_alfa`.
 * Has foreign keys to the tables:
 *
 * - `device`
 */
class m180618_223902_create_unit_alfa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('unit_alfa', [
            'id' => Schema::TYPE_PK,
            'serial_number' => $this->integer(11),
            'device_id' => $this->integer(11),
        ]);

        // creates index for column `device_id`
        $this->createIndex(
            'idx-unit_alfa-device_id',
            'unit_alfa',
            'device_id'
        );

        // add foreign key for table `device`
        $this->addForeignKey(
            'fk-unit_alfa-device_id',
            'unit_alfa',
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
            'fk-unit_alfa-device_id',
            'unit_alfa'
        );

        // drops index for column `device_id`
        $this->dropIndex(
            'idx-unit_alfa-device_id',
            'unit_alfa'
        );

        $this->dropTable('unit_alfa');
    }
}
