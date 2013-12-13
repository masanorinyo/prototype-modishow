<?php
	function confirm_query($result_set){
		if(!$result_set){
			die("Database query failed.");
		}
	}

	function find_outfit_category($category){
		global $connection;

		$query = "SELECT * ";
		$query .= "FROM outfit ";
		$query .= "WHERE category = '{$category}' ";
		$outfit_category = mysqli_query($connection,$query);
		confirm_query($outfit_category);
		return $outfit_category;

	}

//function find_outfit_order($order,$query){
//	global $connection;

//	$query .= "ORDER BY '{$order}' ASC";
//	$outfit_order = mysqli_query($connection,$query);
//	confirm_query($outfit_category);
//	return $outfit_order, $query;

//}

//function find_outfit_filter($filter,$query){
//	global $connection;

//	//if canceled, take out the query

//	$query .= "AND filter = '{$filter}' ";
//	$outfit_filter = mysqli_query($connection,$query);
//	confirm_query($outfit_category);
//	return $outfit_filter, $query;

//}

//function find_outfit_creator($category,$creator){
//	global $connection;

//	//if canceled, take out the query

//	$query .= "WHERE creator = '{$creator}' ";
//	$outfit_creator = mysqli_query($connection,$query);
//	confirm_query($outfit_category);
//	return $$outfit_creator, $query;

//	}


?>