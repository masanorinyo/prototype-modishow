<?php
	//require_once(MODEL_PATH.DS.'database.php');

	class Clothing_type extends DatabaseObject{
		public $clothingType_id;
		public $main_category;
		public $sub_category;
		public $sub_sub_category;
		const primaryKey="clothingType_id";
		protected static $table_primaryKey="clothingType_id";
		protected static $table_name = "clothing_type";
		protected static $db_fields = array(
			'clothingType_id',
			'main_category',
			'sub_category',
			'sub_sub_category'
		);

		
		
	}


?>