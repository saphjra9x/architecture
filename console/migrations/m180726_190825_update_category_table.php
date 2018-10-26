<?php

use yii\db\Migration;

/**
 * Class m180726_190825_update_category_table
 */
class m180726_190825_update_category_table extends Migration {
	/**
	 * {@inheritdoc}
	 */
	public function safeUp() {
		$this->addColumn( 'category', 'icon', $this->string() );
	}

	/**
	 * {@inheritdoc}
	 */
	public function safeDown() {
		echo "m180726_190825_update_category_table cannot be reverted.\n";

		return false;
	}

	/*
	// Use up()/down() to run migration code without a transaction.
	public function up()
	{

	}

	public function down()
	{
		echo "m180726_190825_update_category_table cannot be reverted.\n";

		return false;
	}
	*/
}
