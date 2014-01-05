<?php
	//require_once(MODEL_PATH.DS.'database.php');

	class product extends DatabaseObject{

		protected static $table_name = "product";
		protected static $db_fields = array(
			'product_id',
			'brand_id',
			'clothingType_id',
			'name',
			'url',
			'description',
			'gender',
			'price',
			'default_filename',
			'small_filename',
			'num_of_views',
			'added_date',
			'added_time',
			'edited_time'
		);

		public $product_id;
		public $brand_id;
		public $clothingType_id;
		public $name;
		public $url;
		public $description;
		public $gender;
		public $price;
		public $default_filename;
		public $small_filename;
		public $num_of_views;
		public $added_date;
		public $added_time;
		public $edited_time;

		
		

		

	}


?>