<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->unique(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'full_name' => $this->string(),
            'gender' => $this->string(),
            'specialty_id' => $this->integer(),
            'position_id' => $this->integer(),
            'avatar' => $this->string(),
            'phone' => $this->string(),
            'province_id' => $this->integer(),
            'district_id' => $this->integer(),
            'address' => $this->string(),
            'images' => $this->text(),
            'like_number' => $this->integer(),
            'follow_number' => $this->integer(),
            'birthday' => $this->dateTime(),
            'permission' => $this->integer()->defaultValue(0),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'fb_link' => $this->string()->unique(),
            'website_link' => $this->string(),
        ], $tableOptions);
        $this->addForeignKey('fk_user_province', 'user', 'province_id', 'province', 'id', 'CASCADE');
        $this->addForeignKey('fk_user_district', 'user', 'district_id', 'district', 'id', 'CASCADE');
        $this->addForeignKey('fk_user_specialty_id', 'user', 'specialty_id', 'specialty', 'id', 'CASCADE');
        $this->addForeignKey('fk_user_position_id', 'user', 'position_id', 'position', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
