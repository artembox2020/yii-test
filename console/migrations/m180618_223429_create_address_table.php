<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `address`.
 * Has foreign keys to the tables:
 *
 * - `balance_holder`
 */
class m180618_223429_create_address_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('address', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string(100),
            'balance_holder_id' => $this->integer(11),
        ]);

        // creates index for column `balance_holder_id`
        $this->createIndex(
            'idx-address-balance_holder_id',
            'address',
            'balance_holder_id'
        );

        // add foreign key for table `balance_holder`
        $this->addForeignKey(
            'fk-address-balance_holder_id',
            'address',
            'balance_holder_id',
            'balance_holder',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `balance_holder`
        $this->dropForeignKey(
            'fk-address-balance_holder_id',
            'address'
        );

        // drops index for column `balance_holder_id`
        $this->dropIndex(
            'idx-address-balance_holder_id',
            'address'
        );

        $this->dropTable('address');
    }
}
