<?php

use yii\db\Migration;

/**
 * Handles the creation of table `type_of_construction`.
 */
class m130326_085055_create_type_of_construction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('type_of_construction', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'status' => $this->integer()->defaultValue(0)
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('type_of_construction');
    }
}
