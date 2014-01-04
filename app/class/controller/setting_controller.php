<?php
	require_once("../../config/initialize.php");
	
	if(isset($_POST['confirm'])){
		//get all the data from the form
		$old_password = htmlentities(trim($_POST["password"]));
		$new_password = htmlentities(trim($_POST["new_password"]));
		$username = htmlentities(trim($_POST["username"]));
		$new_email = htmlentities(trim($_POST["email"]));
		$country = $_POST["country"];
		$gender = $_POST["gender"];
		$language = $_POST["language"];
		require_once("file_controller.php");

		if(isset($_POST["city"])){
			$city = htmlentities($_POST["city"]);
		}

		//if no change was made in the form, the follow variables will be null.
		$age = $_POST["age"]==0? NULL:$_POST["age"];
		$height = $_POST["height"]==0? NULL:$_POST["height"];
		$skin_color = $_POST["skin_color"]=="0"? NULL:$_POST["skin_color"];
		$size = $_POST["size"]=="0"? NULL:$_POST["size"];
		$bodyshape =$_POST["bodyshape"]=="0"? NULL:$_POST["bodyshape"];


		$found_user = User::find_by_id($_SESSION["user_id"]);

		$authenticated_user = User::authenticate($found_user->email,$old_password);

		//Make a new user with the new values.
		$modified_user = new User;
		$modified_user->user_id = $_SESSION["user_id"];
		$modified_user->username = $username;
		$modified_user->email = $new_email;
		$modified_user->gender = $gender;
		$modified_user->language = $language;
		$modified_user->country = $country;
		$modified_user->city = $city;	
		$modified_user->age = $age;
		$modified_user->height = $height;
		$modified_user->skin_color = $skin_color;
		$modified_user->size = $size;
		$modified_user->bodyshape = $bodyshape;

		//if the new image is submitted, set them as the user profile image.
		if(isset($default_img)){
			$modified_user->default_img = $default_img;
			$modified_user->thumbnail = $thumbnail;
		}
		

		if($old_password){
			if($authenticated_user){
				if($new_password){
					$hashed_password=User::password_encrypt($new_password);
				
					$modified_user->password= $hashed_password;	
				}else{
					$session->message("Please input a new password");
				}
			}else{
				$session->message("Please input the correct password");
			}
		}else if($new_password){
			$session->message("Please input the correct password");
		}else{
			$session->message("");	
		}
		
		$result = $modified_user->save();

	    if ($result) {
	    	$_SESSION["success"]="true";
 	 		$session->message("Your information has been updated.");

 	 		redirect_to(ROOT_PATH."app/class/view/setting");
	    }else{
	    	// Failure
	    	$_SESSION["success"]="false";
	    	$session->message("Update failed");
	    	redirect_to(ROOT_PATH."app/class/view/setting");
	    }





	}else{
		$session->message("Nothing has changed.");
		redirect_to(ROOT_PATH."app/class/view/setting");
	}




?>