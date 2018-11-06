<?php

use yii\db\Migration;

/**
 * Class m181031_033215_update_user_table
 */
class m181031_033215_update_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'commune_id', $this->integer());
        $this->addForeignKey('fk_user_commune', 'user', 'commune_id', 'commune', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181031_033215_update_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181031_033215_update_user_table cannot be reverted.\n";

        return false;
    }
    */
}
