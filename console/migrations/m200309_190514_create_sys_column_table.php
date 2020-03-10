<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sys_column}}`.
 */
class m200309_190514_create_sys_column_table extends Migration
{
    /**
     * {@inheritdoc}
     */


    public function safeUp()
    {
        $this->createTable('{{%sys_column}}', [
            'sys_id' => $this->primaryKey(),
            'table_id' => $this->integer(),
            'column_type_id' => $this->integer(),
            'column_name' => $this->string()
        ]);

        $this->createIndex(
            'idx-sys_column-table_id',
            'sys_column',
            'table_id'
        );
        $this->addForeignKey(
            'fk-sys_column-table_id',
            'sys_column',
            'table_id',
            'sys_table',
            'sys_id'
        );

        $this->createIndex(
            'idx-sys_column_type_id',
            'sys_column',
            'column_type_id'
        );
        $this->addForeignKey(
            'fk-sys_column_type_id',
            'sys_column',
            'column_type_id',
            'sys_field_type',
            'sys_id'
        );
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sys_column}}');
    }
}
