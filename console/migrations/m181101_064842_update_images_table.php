<?php

use yii\db\Migration;

/**
 * Class m181101_064842_update_images_table
 */
class m181101_064842_update_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('image', 'project_id', $this->integer());
        $this->addForeignKey('fk_image_project', 'image', 'project_id', 'project', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181101_064842_update_images_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181101_064842_update_images_table cannot be reverted.\n";

        return false;
    }
    */
}
