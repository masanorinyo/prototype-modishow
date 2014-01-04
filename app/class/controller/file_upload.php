<?php
	require_once("../../config/initialize.php");
	
	$user=User::find_by_id($_SESSION["user_id"]);
	$username=$user->username;

	

	require_once("file_controller.php");
	
	//for file upload from userpage 
	
	$modified_user = new User;
	$modified_user->user_id = $_SESSION["user_id"];
	$modified_user->default_img = $default_img;
	$modified_user->thumbnail = $thumbnail;
	$result = $modified_user->save();

    if ($result) {
	 		$session->message("Your information has been updated.");

	 		redirect_to(ROOT_PATH."app/class/view/userPage");
    }else{

    	$session->message("Update failed");
    	redirect_to(ROOT_PATH."app/class/view/userPage");
    }


?>