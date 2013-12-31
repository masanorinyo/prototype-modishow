<?php
	require_once("../../config/initialize.php");


	$message = "";
	//Remember to give your form's submit tag a name = "submit" attribute!
	if(isset($_POST['email_to_check'])){
		$email = trim($_POST['email_to_check']);
		
		//check database to see if username/password exist;
		$found_user = User::find_by_email($email);

		$required_fields = array("email_to_check");
		$email_presence=User::validate_presences($required_fields);
		$fields_with_max_lengths = array("email_to_check" => 50);
		$too_long_email = User::validate_max_lengths($fields_with_max_lengths);

		if($found_user){
			echo $message = "This e-mail is already used.";
		}else if($email_presence){
			echo $email_presence." cannot be blank.";
		}else if($too_long_email){
			echo $too_long_email." must be less than 50 characters.";
		}else{
			echo $message = "new_email"; 
		}

	}else if(isset($_POST['submit'])){
			
			// validations
			$required_fields = array("email","password");
			$email_presence=User::validate_presences($required_fields);
			$fields_with_max_lengths = array("email" => 50);
			$too_long_email = User::validate_max_lengths($fields_with_max_lengths);
			  
			if(!($email_presence && $too_long_email)){
				
			    $email = $_POST["email"];
			    $parts = explode("@", $email);
				$username = $parts[0];
				$country = $_POST['country'];
				$gender = $_POST['gender'];
			    $hashed_password = User::password_encrypt($_POST["password"]);
			    $thumbnail = isset($_POST['file_upload'])? $_POST['file_upload']:"default";
			    $skin_color = isset($_POST['skin_color'])? $_POST['skin_color']:NULL;
			    $age = isset($_POST['age'])? $_POST['age']:NULL;
			    $bodyshape = isset($_POST['bodyshape'])? $_POST['bodyshape']:NULL;
			    $size = isset($_POST['size'])? $_POST['size']:NULL;
			    $height = isset($_POST['height'])? $_POST['height']:NULL;

			    $query  = "INSERT INTO user (";
			    $query .= "  username, email,password,country,gender,thumbnail,skin_color,age,bodyshape,size,height";
			    $query .= ") VALUES (";
			    $query .= "'{$username}', '{$email}', '{$hashed_password}', '{$country}'";
			    $query .= "'{$gender}', '{$thumbnail}', '{$skin_color}', '{$age}'";
			    $query .= "'{$bodyshape}', '{$size}', '{$height}'\"";
			    $query .= ")";
			    $result = mysqli_query($connection, $query);

			    if ($result) {
			      // Success
			      $_SESSION["message"] = "User created.";
			      redirect_to(SITE_ROOT."app/class/view/userPage");
			    } else {
			      // Failure
			      echo "fail";
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