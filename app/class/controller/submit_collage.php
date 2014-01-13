<?php
	require_once("../../config/initialize.php");
	
	$collage_id = isset($_POST['collage_id'])? $_POST['collage_id']: false;
	$title = isset($_POST['title'])? $_POST['title']: false;
	$outfitOnModel_id = isset($_POST['outfitOnModel_id'])? $_POST['outfitOnModel_id']: false;
	$description = isset($_POST['description'])? $_POST['description']: false;
	$user_id = isset($_SESSION['user_id'])? $_SESSION['user_id']: false;
	$category_id = isset($_POST['category_id'])? $_POST['category_id']: false;
	

	if($collage_id && $title && $outfitOnModel_id && $category_id && $user_id){

		$new_style = new Style;
		$new_style->outfitOnModel_id=$outfitOnModel_id;
		$new_style->user_id=$user_id;
		$new_style->collage_id=$collage_id;
		$new_style->category_id=$category_id;
		$new_style->title=$title;
		$new_style->description=$description;
		$new_style->num_of_views=0;
		$new_style->visibility=0;
		date_default_timezone_set('America/New_York');
		$new_style->added_date=date('Y-m-d H:i:s');
		$new_style->added_time=date('Y-m-d H-i-s');

		$result = $new_style->save();
		
		if($result){
			$_SESSION['style_info']="";
			echo $message = "Your style was successfully saved";
		}else{
			echo  $message = "Failed to save your creation.";
		}

		redirect_to(ROOT_PATH."app/class/view/userPage.php");
	}else{

		$message = "Failed to create a style";

		redirect_to(ROOT_PATH."app/class/view/userPage.php");
	}


?>