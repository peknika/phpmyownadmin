<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sys_table}}`.
 */
class m200309_185807_create_sys_table_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sys_table}}', [
            'sys_id' => $this->primaryKey(),
            'table_name' => $this->string(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sys_table}}');
    }
}
