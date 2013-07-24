<?php

class m130723_180143_deault_table_group_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('default_tab_groups', array(
		'id' => 'pk',
		'service_table_id' => 'string' , // as it can be specific 
		'default_waiter_id' => 'integer' , 
		'capacity' => 'integer'
		));
		
		$this->createTable('tab_group_tabs',array(
			'id' => 'pk',
			'service_table_id'=>'string',
			'table_id'=>'integer'
		));
	}

	public function safeDown()
	{
		$this->dropTable('default_tab_groups') ;
		$this->dropTable('tab_group_tabs') ;
	}
}