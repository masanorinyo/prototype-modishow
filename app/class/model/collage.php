<?php
	class Collage extends DatabaseObject{
		public $collage_id;
		public $default_filename;
		public $m_size_filename;
		const primaryKey="collage_id";
		protected static $table_primaryKey="collage_id";
		protected static $table_name = "collage";
		protected static $db_fields = array(
			'collage_id',
			'default_filename',
			'm_size_filename'
		);
	}
		


?>