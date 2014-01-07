<?php
	require_once("../../config/initialize.php");

	// require_once(CONT_PATH.DS."outfit_model_creation.php");
	// require_once(CONT_PATH.DS."collage_automatic_creation.php");
	$title = isset($_POST["titleName"])? $_POST["titleName"]: false;
	$default_url = isset($_POST["default_url"])? $_POST["default_url"]: false;
	$small_url = isset($_POST["small_url"])? $_POST["small_url"]: false;
	$cancel = isset($_POST["cancel"])? $_POST["cancel"]: false;
	$user_id = isset($_SESSION["user_id"])? $_SESSION["user_id"]: false;

	echo $title;
	echo $default_url;
	echo $small_url;
	echo $user_id;
	var_dump($cancel);

	if(isset($_POST['confirm'])){
		echo "test";
	}

?>