<?php
	class style extends DatabaseObject{
		public $style_id;
		public $outfitOnModel_id;
		public $collage_id;
		public $user_id;
		public $category_id;
		public $title;
		public $description;
		public $num_of_views;
		public $visibility;
		public $added_date;
		public $added_time;
		public $edited_time;
		const primaryKey="style_id";
		protected static $table_primaryKey="style_id";
		protected static $table_name = "style";
		protected static $db_fields = array(
			'style_id',
			'outfitOnModel_id',
			'collage_id',
			'user_id',
			'category_id',
			'title',
			'description',
			'num_of_views',
			'visibility',
			'added_date',
			'added_time',
			'edited_time'
		);
		


		// function find_outfit_category($category){
		// 	global $connection;

		// 	$query = "SELECT * ";
		// 	$query .= "FROM outfit ";
		// 	$query .= "WHERE category = '{$category}' ";
		// 	$outfit_category = mysqli_query($connection,$query);
		// 	confirm_query($outfit_category);
		// 	return $outfit_category;

		// }

		// function find_outfit_order($order,$query){
		// 	global $connection;

		// 	$query .= "ORDER BY '{$order}' ASC";
		// 	$outfit_order = mysqli_query($connection,$query);
		// 	confirm_query($outfit_category);
		// 	return $outfit_order, $query;

		// }

		// function find_outfit_filter($filter,$query){
		// 	global $connection;

		// 	//if canceled, take out the query

		// 	$query .= "AND filter = '{$filter}' ";
		// 	$outfit_filter = mysqli_query($connection,$query);
		// 	confirm_query($outfit_category);
		// 	return $outfit_filter, $query;

		// }

		// function find_outfit_creator($category,$creator){
		// 	global $connection;

		// 	//if canceled, take out the query

		// 	$query .= "WHERE creator = '{$creator}' ";
		// 	$outfit_creator = mysqli_query($connection,$query);
		// 	confirm_query($outfit_category);
		// 	return $$outfit_creator, $query;

		// 	}

	
	}

	


// Resizing
// 1 step = get the image
// 2 step = get the width and the height to resize
// 3 step = resize the image based on the values from the 2nd step

// cropping
// 1 step = get the image
// 2 step = get the width, the height, and the position to crop
// 3 step = crop the image with the value

	

?>