<?php
	class Category extends DatabaseObject{
		public $category_id;
		public $main_category;
		public $sub_category;
		const primaryKey="category_id";
		protected static $table_primaryKey="category_id";
		protected static $table_name = "category";
		protected static $db_fields = array(
			'category_id',
			'main_category',
			'sub_category'
		);

	}

	


?>