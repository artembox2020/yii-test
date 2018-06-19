<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `unit_beta_data`.
 * Has foreign keys to the tables:
 *
 * - `unit_beta`
 */
class m180618_224405_create_unit_beta_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('unit_beta_data', [
            'id' => Schema::TYPE_PK,
            'sn' => $this->integer(11),
            'unit_beta_id' => $this->integer(11),
        ]);

        // creates index for column `unit_beta_id`
        $this->createIndex(
            'idx-unit_beta_data-unit_beta_id',
            'unit_beta_data',
            'unit_beta_id'
        );

        // add foreign key for table `unit_beta`
        $this->addForeignKey(
            'fk-unit_beta_data-unit_beta_id',
            'unit_beta_data',
            'unit_beta_id',
            'unit_beta',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `unit_beta`
        $this->dropForeignKey(
            'fk-unit_beta_data-unit_beta_id',
            'unit_beta_data'
        );

        // drops index for column `unit_beta_id`
        $this->dropIndex(
            'idx-unit_beta_data-unit_beta_id',
            'unit_beta_data'
        );

        $this->dropTable('unit_beta_data');
    }
}
