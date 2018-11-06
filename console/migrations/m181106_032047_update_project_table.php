<?php

use yii\db\Migration;

/**
 * Class m181106_032047_update_project_table
 */
class m181106_032047_update_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('project', 'province_id', $this->integer());
        $this->addColumn('project', 'district_id', $this->integer());
        $this->addColumn('project', 'commune_id', $this->integer());

        $this->addForeignKey('project_province', 'project', 'province_id', 'province', 'id', 'CASCADE');
        $this->addForeignKey('project_district', 'project', 'district_id', 'district', 'id', 'CASCADE');
        $this->addForeignKey('project_commune', 'project', 'commune_id', 'commune', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181106_032047_update_project_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181106_032047_update_project_table cannot be reverted.\n";

        return false;
    }
    */
}
