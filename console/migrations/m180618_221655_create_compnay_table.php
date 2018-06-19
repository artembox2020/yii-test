<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `compnay`.
 */
class m180618_221655_create_compnay_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('compnay', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('compnay');
    }
}
