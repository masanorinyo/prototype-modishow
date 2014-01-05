<?php
	//require_once(MODEL_PATH.DS.'database.php');

	class Clothing_type extends DatabaseObject{

		protected static $table_name = "clothing_type";
		protected static $db_fields = array(
			'clothingType_id',
			'main_category',
			'sub_category',
			'sub_sub_category'
		);

		public $clothingType_id;
		public $main_category;
		public $sub_category;
		public $sub_sub_category;
		
	}


?>