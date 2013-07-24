<?php

class m130723_182110_address_table extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('address', array(
		'id' => 'pk',
		'street_address_1' => 'string' , 
		'street_Address_2' => 'string' , 
		'city' => 'string' ,
		'state' => 'string' ,
		'country' => 'string' , 
		'nearby' => 'string' 
		));
		
		
	}

	public function safeDown()
	{
		$this->dropTable('address') ;
	}
}