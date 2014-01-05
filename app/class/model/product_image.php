<?php
	//require_once(MODEL_PATH.DS.'database.php');

	class Product_image extends DatabaseObject{
		const primaryKey="productImage_id";
		protected static $table_primaryKey="productImage_id";
		protected static $table_name = "product_image";
		protected static $db_fields = array(
			'productImage_id',
			'image_type',
			'position',
			'action',
			'image_direction',
			'default_filename',
			's_size_filename'
		);

		public $productImage_id;
		public $image_type;
		public $position;
		public $action;
		public $image_direction;
		public $default_filename;
		public $s_size_filename;

	}


?>