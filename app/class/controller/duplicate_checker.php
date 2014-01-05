<?php	
	require_once("../../config/initialize.php");

	$message = "";
	//Remember to give your form's submit tag a name = "submit" attribute!


	
	if(isset($_POST['new_username'])){
		$name = trim($_POST['new_username']);
		
		//check database to see if username/password exist;
		$found_user = User::find_by_attribute($name,"username");

		$found_user=empty($found_user) ?  false:array_shift($found_user);

		//validate the data
		$required_fields = array("new_username");
		$name_presence=User::validate_presences($required_fields);
		$fields_with_max_lengths = array("new_username" => 20);
		$too_long_name = User::validate_max_lengths($fields_with_max_lengths);

		//return the data 
		if($found_user){
			if($found_user->user_id==$_SESSION["user_id"]){
				echo $message = "true";
			}else{
				echo $message = "This name is already used.";
			}
		}else if($name_presence){
			echo $name_presence." cannot be blank.";
		}else if($too_long_name){
			echo $too_long_name." must be less than 20 characters.";
		}else{
			echo $message = "true";
		}

	}else if(isset($_POST['email_to_check'])){
		$email = trim($_POST['email_to_check']);
		
		//check database to see if username/password exist;
		$found_user = User::find_by_attribute($email,"email");
		$found_user=empty($found_user) ?  false:array_shift($found_user);

		//validate the data
		$required_fields = array("email_to_check");
		$email_presence=User::validate_presences($required_fields);
		$fields_with_max_lengths = array("email_to_check" => 50);
		$too_long_email = User::validate_max_lengths($fields_with_max_lengths);

		//return the data 
		if($found_user){
			if(isset($_SESSION["user_id"])){
				if($found_user->user_id==$_SESSION["user_id"]){
					echo $message="new_email";
				}else{
					echo $message = "This e-mail is already used.";	
				}
			}else{
				echo $message = "This e-mail is already used.";	
			}
		}else if($email_presence){
			echo $email_presence." cannot be blank.";
		}else if($too_long_email){
			echo $too_long_email." must be less than 50 characters.";
		}else{
			echo $message = "new_email"; 
		}

	}else if(isset($_POST['new_password'])){
		$email = trim($_POST['new_password']);
		
		//check database to see if username/password exist;
		$found_user = User::find_by_id($_SESSION["user_id"]);

		//validate the data
		$required_fields = array("new_password");
		$password_presence=User::validate_presences($required_fields);

		//return the data 
		if($found_user){
			if(isset($_SESSION["user_id"])){
				if($found_user->user_id==$_SESSION["user_id"]){
					echo $message="new_email";
				}else{
					echo $message = "This e-mail is already used.";	
				}
			}else{
				echo $message = "This e-mail is already used.";	
			}
		}else if($email_presence){
			echo $email_presence." cannot be blank.";
		}else if($too_long_email){
			echo $too_long_email." must be less than 50 characters.";
		}else{
			echo $message = "new_email"; 
		}

	}
?>