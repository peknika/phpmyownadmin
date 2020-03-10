<?php

use yii\db\Migration;

/**
 * Class m200309_174706_fill_sys_field_type
 */
class m200309_174706_fill_sys_field_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $queries = [
           "INSERT INTO \"public\".\"sys_field_type\"(\"sys_id\", \"type_name\", \"type_scalar\") VALUES (1, 'string', 'varchar');",
           "INSERT INTO \"public\".\"sys_field_type\"(\"sys_id\", \"type_name\", \"type_scalar\") VALUES (2, 'integer', 'int4');",
           "INSERT INTO \"public\".\"sys_field_type\"(\"sys_id\", \"type_name\", \"type_scalar\") VALUES (3, 'boolean', 'bool');"
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
        echo "m200309_174706_fill_sys_field_type cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200309_174706_fill_sys_field_type cannot be reverted.\n";

        return false;
    }
    */
}
