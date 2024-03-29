<?php
	require_once("../../config/initialize.php");

	$message = "";

	if(isset($_POST['submit'])){
			
			// validations
			$required_fields = array("email","password");
			$email_presence=User::validate_presences($required_fields);
			$fields_with_max_lengths = array("email" => 50);
			$too_long_email = User::validate_max_lengths($fields_with_max_lengths);
			  
			if(!($email_presence && $too_long_email)){
				
			    $email = $_POST["email"];
				$country = $_POST['country'];
				$gender = $_POST['gender'];
			    $hashed_password = User::password_encrypt($_POST["password"]);
			    $skin_color = $_POST['skin_color'];
			    $age = $_POST['age'];
			    $bodyshape = $_POST['bodyshape'];
			    $size = $_POST['size'];
			    $height = $_POST['height'];
			    
			    //determine if the same username exists in the database
			    //if any, add numbers
			    $parts = explode("@", $email);
				$username = $parts[0];
				$num=1;
				while(User::find_by_attribute($username,"username")){
					if($num == 1){
						$username .=$num;	
					}else if($num<10){
						$username = substr($username,0,-1);
						$username .=$num;	
					}else if($num <100){
						$username = substr($username,0,-2);
						$username .=$num;	
					}else{
						$username = substr($username,0,-3);
						$username .=$num;	
					}
					
					$num++;
				}
				
				require_once("file_controller.php");


				$user = User::make(
					$username,
					$email,
					$hashed_password,
					$thumbnail,
					$country,
					$gender,
					$age,
					$bodyshape,
					$size,
					$height,
					$skin_color,
					$default_img,
					$thumbnail
				);

				
				$result = $user ->save();


			   
			    if ($result) {
			    // Success
			    	$_SESSION["message"] = "User created.";
			      	$session->login($user);
			      	if($_POST["from_tryon"]){
			      		redirect_to(ROOT_PATH."public/tryon");	
			      	}
			     	redirect_to(ROOT_PATH."app/class/view/userPage");
			    } else {
			      // Failure
			      $_SESSION["message"] = "User creation failed.";
			    }
			}else{
				$_SESSION["message"] = "User creation failed.";
			}

	}else{
		$username="";
		$password="";
	}


?>