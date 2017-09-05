<?php

use yii\db\Migration;

class m170902_074816_add_column_role_to_table_user extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $this->addColumn('users', 'role', 'tinyint(2) default 10');
    }

    public function down()
    {
        echo "m170902_074816_add_column_role_to_table_user cannot be reverted.\n";

        return false;
    }
}
