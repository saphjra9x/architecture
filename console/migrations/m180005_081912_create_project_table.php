<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m180005_081912_create_project_table extends Migration
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
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'category_id' => $this->integer(),
            'user_id' => $this->integer()->notNull(),
            'serial' => $this->integer()->defaultValue(0),
            'avatar' => $this->string(),
            'describe' => $this->text(),
            'content' => $this->text(),
            'design_area' => $this->double(),
            'area_of_land' => $this->double(),
            'type_of_construction_id' => $this->integer(),
            'year_of_design' => $this->string(),
            'year_completed' => $this->string(),
            'style_id' => $this->integer(),
            'floor' => $this->integer(),
            'address' => $this->string(),
            'investor' => $this->string(),
            'display_homepage' => $this->integer()->defaultValue(0),
            'status' => $this->integer()->defaultValue(0),
            'featured' => $this->integer()->defaultValue(0),
            'seo_tool_id' => $this->integer(),
            'slug' => $this->string(),
            'created_at' => $this->dateTime(),
            'views' => $this->integer()->defaultValue(0),
            'images' => $this->text(),
            'code' => $this->text(),
            'province_id' => $this->integer(),
            'district_id' => $this->integer(),
            'commune_id' => $this->integer(),
            'category_project_id' => $this->integer(),
            'price' => $this->double(),
            'unit_id' => $this->integer(),
            'position_id' => $this->integer()
        ], $tableOptions);
        $this->addForeignKey('fk_project_user', 'project', 'user_id', 'user', 'id', 'CASCADE');
        $this->addForeignKey('fk_project_type_of_construction', 'project', 'type_of_construction_id', 'type_of_construction', 'id', 'CASCADE');
        $this->addForeignKey('fk_project_style', 'project', 'style_id', 'style', 'id', 'CASCADE');
        $this->addForeignKey('fk_project_category_project', 'project', 'category_project_id', 'category_project', 'id', 'CASCADE');
        $this->addForeignKey('fk_project_province', 'project', 'province_id', 'province', 'id', 'CASCADE');
        $this->addForeignKey('fk_project_district', 'project', 'district_id', 'district', 'id', 'CASCADE');
        $this->addForeignKey('fk_project_commune', 'project', 'commune_id', 'commune', 'id', 'CASCADE');
        $this->addForeignKey('fk_project_unit', 'project', 'unit_id', 'unit', 'id', 'CASCADE');
        $this->addForeignKey('fk_project_position', 'project', 'position_id', 'position', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project');
    }
}
