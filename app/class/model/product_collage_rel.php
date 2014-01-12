<?php
	class Product_collage_rel extends DatabaseObject{
		public $productCollage_id;
		public $collage_id;
		public $product_id;
		public $z_index;
		public $x_value;
		public $y_value;
		public $width;
		public $height;
		public $angle;
		public $mirrored;
		const primaryKey="productCollage_id";
		protected static $table_primaryKey="productCollage_id";
		protected static $table_name = "product_collage_rel";
		protected static $db_fields = array(
			'productCollage_id',
			'collage_id',
			'product_id',
			'z_index',
			'x_value',
			'y_value',
			'width',
			'height',
			'angle',
			'mirrored'
		);
	
	}

	


?>