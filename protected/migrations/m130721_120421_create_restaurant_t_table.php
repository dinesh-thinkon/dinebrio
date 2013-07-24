<?php

class m130721_120421_create_restaurant_t_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('restaurant_tabs', array(
		'id' => 'pk',
		'restaurant_id' => 'integer' ,
		'table_id' =>'integer' , //on application layer uniqueness check
		'capacity' => 'integer' , 
		'shape_id' => 'integer'
		));
		
		$this->createTable('tab_shapes',array(
			'id' => 'pk',
			'name'=>'string',
			'shape_image'=>'string'
		));
	}

	public function safeDown()
	{
		$this->dropTable('restaurant_tabs') ;
		$this->dropTable('tab_shapes') ;
	}
}