<?php

use yii\db\Migration;

/**
 * Class m181106_030359_update_project_table
 */
class m181106_030359_update_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('project', 'category_project_id', $this->integer());


        $this->addForeignKey('project_category_project', 'project', 'category_project_id', 'project', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181106_030359_update_project_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181106_030359_update_project_table cannot be reverted.\n";

        return false;
    }
    */
}
