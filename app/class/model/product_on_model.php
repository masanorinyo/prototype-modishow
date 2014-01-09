<?php
	class Product_on_model extends DatabaseObject{
		public $outfitOnModel_id;
		public $product_id;
		public $z_index;
		protected static $table_name = "Product_on_model";
		protected static $db_fields = array(
			'outfitOnModel_id',
			'product_id',
			'z_index'
		);
	
	}

	


?>