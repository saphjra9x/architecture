<?php

use yii\db\Migration;

/**
 * Handles the creation of table `commune`.
 */
class m130107_032554_create_commune_table extends Migration
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
        $this->createTable('commune', [
            'id' => $this->primaryKey(),
            'ten' => $this->string()->notNull(),
            'ten_tieng_anh' => $this->string(),
            'cap' => $this->string(),
            'district_id' => $this->integer()->notNull(),
            'phi_van_chuyen' => $this->double()
        ],$tableOptions);
        $this->addForeignKey('fk_commune_district', 'commune', 'district_id', 'district', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('commune');
    }
}
