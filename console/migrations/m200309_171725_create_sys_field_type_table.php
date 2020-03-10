<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sys_field_type}}`.
 */
class m200309_171725_create_sys_field_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sys_field_type}}', [
            'sys_id' => $this->primaryKey(),
            'type_name' => $this->string(),
            'type_scalar' => $this->string()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sys_field_type}}');
    }
}
