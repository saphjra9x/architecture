<?php

use yii\db\Migration;

/**
 * Class m181106_033455_update_project_table
 */
class m181106_033455_update_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('project', 'price', $this->double());
        $this->addColumn('project', 'unit_id', $this->integer());
        $this->addColumn('project', 'position_id', $this->integer());

        $this->addForeignKey('project_unit', 'project', 'unit_id', 'unit', 'id', 'CASCADE');
        $this->addForeignKey('project_position', 'project', 'position_id', 'position', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181106_033455_update_project_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181106_033455_update_project_table cannot be reverted.\n";

        return false;
    }
    */
}
