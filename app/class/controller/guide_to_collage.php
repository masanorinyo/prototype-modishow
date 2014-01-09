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
	$model_id=isset($_POST["modelId"])? $_POST["modelId"]: false;
	


	echo $outfit_on_model_id;

	if($product_id && $m_category && $s_category && $outfit_on_model_id && $title){
		$new_style = new Style;
		echo $outfit_on_model_id;
	}else{
		$message="Failed to create a style.";
	}

?>