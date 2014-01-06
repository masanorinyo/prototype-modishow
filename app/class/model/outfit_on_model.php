<?php
	class outfit_on_model extends DatabaseObject{
		public $outfitOnModel_id;
		public $model_i=1;
		public $default_filename;
		public $m_size_filename;
		const primaryKey="outfitOnModel_id";
		protected static $table_primaryKey="outfitOnModel_id";
		protected static $table_name = "outfit_on_model";
		protected static $db_fields = array(
			'outfitOnModel_id',
			'model_id',
			'default_filename',
			'm_size_filename'
			
		);
		



	
	}

	


?>