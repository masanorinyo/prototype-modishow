<?php
	//require_once(MODEL_PATH.DS.'database.php');

	class Product_image_rel extends DatabaseObject{
		const primaryKey="product_id";
		protected static $table_primaryKey="product_id";
		protected static $table_name = "product_image_rel";
		protected static $db_fields = array(
			'product_id',
			'productImage_id'
		);

		public $product_id;
		public $productImage_id;

	}


?>