<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `balance_holder`.
 * Has foreign keys to the tables:
 *
 * - `compnay`
 */
class m180618_223139_create_balance_holder_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('balance_holder', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string(100),
            'company_id' => $this->integer(11),
        ]);

        // creates index for column `company_id`
        $this->createIndex(
            'idx-balance_holder-company_id',
            'balance_holder',
            'company_id'
        );

        // add foreign key for table `compnay`
        $this->addForeignKey(
            'fk-balance_holder-company_id',
            'balance_holder',
            'company_id',
            'compnay',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `compnay`
        $this->dropForeignKey(
            'fk-balance_holder-company_id',
            'balance_holder'
        );

        // drops index for column `company_id`
        $this->dropIndex(
            'idx-balance_holder-company_id',
            'balance_holder'
        );

        $this->dropTable('balance_holder');
    }
}
