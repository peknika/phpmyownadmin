<?php

use yii\db\Migration;

/**
 * Class m200309_180601_fill_sys_table_table
 */
class m200309_190316_fill_sys_table_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $queries = [
            "INSERT INTO \"public\".\"sys_table\"(\"sys_id\", \"table_name\") VALUES (1, 'sys_table');",
            "INSERT INTO \"public\".\"sys_table\"(\"sys_id\", \"table_name\") VALUES (2, 'sys_column');",
            "INSERT INTO \"public\".\"sys_table\"(\"sys_id\", \"table_name\") VALUES (3, 'sys_field_type');",
            "INSERT INTO \"public\".\"sys_table\"(\"sys_id\", \"table_name\") VALUES (4, 'user');",
            "INSERT INTO \"public\".\"sys_table\"(\"sys_id\", \"table_name\") VALUES (5, 'sys_query');",
        ];

        foreach ($queries as $q)
        {
            Yii::$app->db->createCommand($q)->execute();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200309_180601_fill_sys_table_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200309_180601_fill_sys_table_table cannot be reverted.\n";

        return false;
    }
    */
}

