<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `device`.
 * Has foreign keys to the tables:
 *
 * - `address`
 */
class m180618_223612_create_device_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('device', [
            'id' => Schema::TYPE_PK,
            'serial_number' => $this->integer(11),
            'address_id' => $this->integer(11),
        ]);

        // creates index for column `address_id`
        $this->createIndex(
            'idx-device-address_id',
            'device',
            'address_id'
        );

        // add foreign key for table `address`
        $this->addForeignKey(
            'fk-device-address_id',
            'device',
            'address_id',
            'address',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `address`
        $this->dropForeignKey(
            'fk-device-address_id',
            'device'
        );

        // drops index for column `address_id`
        $this->dropIndex(
            'idx-device-address_id',
            'device'
        );

        $this->dropTable('device');
    }
}
