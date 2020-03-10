<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sys_query}}`.
 */
class m200309_172013_create_sys_query_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sys_query}}', [
            'sys_id' => $this->primaryKey(),
            'query_body' => $this->string(),
            'query_name' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sys_query}}');
    }
}
