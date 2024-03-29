<?php
	require_once("../../config/initialize.php");


	$message = "";
	

	if(isset($_POST['submit'])){
		$name = trim($_POST['username']);
		$introduction = $_POST['introduction'];
		//check database to see if username/password exist;
		$found_user = User::find_by_id($_SESSION['user_id']);

		//validate the data
		$required_fields = array("username");
		$name_presence=User::validate_presences($required_fields);
		$fields_with_max_lengths = array("new_username" => 20);
		$too_long_name = User::validate_max_lengths($fields_with_max_lengths);
			  
			if(!($name_presence && $too_long_name)){
				
				$modified_user = new User;
				$modified_user->user_id = $_SESSION["user_id"];
				$modified_user->username = $name;
				$modified_user->introduction= $introduction;

				
				$result = $modified_user->save();

			 
			    if ($result) {
			    	// Success
		 	 		$_SESSION["message"] = "Your information has been updated.";
		 	 		redirect_to(ROOT_PATH."app/class/view/userPage");
			    } else {
			      // Failure
			      $_SESSION["message"] = "Update failed.";
			      redirect_to(ROOT_PATH."app/class/view/userPage");
			    }
			}else{
				$_SESSION["message"] = "Update failed.";
				redirect_to(ROOT_PATH."app/class/view/userPage");
			}
	}else if(isset($_POST["cancel"])){
		redirect_to(ROOT_PATH."app/class/view/userPage");
	}

	


?>