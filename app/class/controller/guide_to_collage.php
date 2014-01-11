<?php
	require_once("../../config/initialize.php");

	// require_once(CONT_PATH.DS."outfit_model_creation.php");
	// require_once(CONT_PATH.DS."collage_automatic_creation.php");
	$title = isset($_POST["titleName"])? $_POST["titleName"]: false;
	$outfit_on_model_id = isset($_POST["outfit_on_model_id"])? $_POST["outfit_on_model_id"]: false;
	$cancel = isset($_POST["cancel"])? $_POST["cancel"]: false;
	$user_id = isset($_SESSION["user_id"])? $_SESSION["user_id"]: false;
	$product_id=isset($_SESSION["product_id"])?$_SESSION["product_id"]:false;
	$m_category=isset($_POST["main_category"])? $_POST["main_category"]: false;
	$s_category=isset($_POST["sub_category"])? $_POST["sub_category"]: false;
	$description=isset($_POST["description"])? $_POST["description"]: false;
	
	$found_category = Category::find_by_attribute($s_category,"sub_category");
	$found_category = !empty($found_category)? array_shift($found_category):false;

	$category_id=$found_category->category_id;
	

	if($product_id && $m_category && $s_category && $outfit_on_model_id && $title){
		
		if($cancel){

			require_once("collage_automatic_creation.php");

			$new_style = new Style;
			$new_style->outfitOnModel_id=$outfit_on_model_id;
			$new_style->user_id=$user_id;
			$new_style->collage_id=$collage_id;
			$new_style->category_id=$category_id;
			$new_style->title=$title;
			$new_style->description=$description;
			$new_style->num_of_views=0;
			$new_style->visibility=0;
			date_default_timezone_set('America/New_York');
			$new_style->added_date=date('Y-m-d H:i:s', strtotime('2010-10-12 15:09:00'));
			$new_style->added_time=date('Y-m-d H-i-s');

			$result = $new_style->save();
			
			if($result){
				echo $message = "Your style was successfully saved";
			}else{
				echo  $message = "Failed to save your creation.";
			}

			redirect_to(ROOT_PATH."app/class/view/userPage.php");

		}else{
			$style_info=array(
				"title"=>$title,
				"outfitOnModel_id"=>$outfit_on_model_id,
				"product_id"=>$product_id,
				"category_id"=>$category_id,
				"description"=>$description
			);

			$_SESSION["style_info"]=$style_info;

			redirect_to("../../../public/collage.php");
		}

		
		
	}else{
		$message="Failed to create a style.";
	}

?>