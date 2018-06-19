<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `unit_alfa_data`.
 * Has foreign keys to the tables:
 *
 * - `unit_alfa`
 */
class m180618_224314_create_unit_alfa_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('unit_alfa_data', [
            'id' => Schema::TYPE_PK,
            'sn' => $this->integer(11),
            'unit_alfa_id' => $this->integer(11),
        ]);

        // creates index for column `unit_alfa_id`
        $this->createIndex(
            'idx-unit_alfa_data-unit_alfa_id',
            'unit_alfa_data',
            'unit_alfa_id'
        );

        // add foreign key for table `unit_alfa`
        $this->addForeignKey(
            'fk-unit_alfa_data-unit_alfa_id',
            'unit_alfa_data',
            'unit_alfa_id',
            'unit_alfa',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `unit_alfa`
        $this->dropForeignKey(
            'fk-unit_alfa_data-unit_alfa_id',
            'unit_alfa_data'
        );

        // drops index for column `unit_alfa_id`
        $this->dropIndex(
            'idx-unit_alfa_data-unit_alfa_id',
            'unit_alfa_data'
        );

        $this->dropTable('unit_alfa_data');
    }
}
