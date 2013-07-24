<?php

class m130723_181718_table_group_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tab_groups', array(
		'id' => 'pk',
		'service_table_id' => 'string' , // as it can be specific 
		'default_waiter_id' => 'integer' , 
		'capacity' => 'integer' ,
		'start_time' => 'datetime' ,
		'end_time' => 'datetime'
		));
		
		
	}

	public function safeDown()
	{
		$this->dropTable('tab_groups') ;
	}
}