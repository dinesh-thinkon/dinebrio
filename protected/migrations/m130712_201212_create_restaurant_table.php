<?php

class m130712_201212_create_restaurant_table extends CDbMigration
{
	/*
	public function up()
	{
		$this->createTable('restaurant', array(
		'id' => 'pk',
		'internal_name' => 'string NOT NULL',
		'external_name' => 'string NOT NULL',
		));
	}

	public function down()
	{
		 $this->dropTable('restaurant');
	}
*/
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('restaurants', array(
		'id' => 'pk',
		'internal_name' => 'string NOT NULL',
		'external_name' => 'string NOT NULL',
		'address_id' => 'integer' ,
		'budget' => 'integer' , //for two person
		'google_map_location_id' =>'integer', //latitude_longitude
		'service_time' => 'integer'//in minutes 
		));
	}

	public function safeDown()
	{
		$this->dropTable('restaurants') ;
	}
	
}