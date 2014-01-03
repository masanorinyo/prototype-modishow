<?php
	require_once("../../config/initialize.php");
	
	if(isset($_POST['confirm'])){
		$old_password = htmlentities(trim($_POST["password"]));
		$new_password = htmlentities(trim($_POST["new_password"]));
		$username = htmlentities(trim($_POST["username"]));
		$new_email = htmlentities(trim($_POST["email"]));
		$country = $_POST["country"];
		$gender = $_POST["gender"];
		$language = $_POST["language"];

		if(isset($_POST["city"])){
			$city = htmlentities($_POST["city"]);
		}

		$age = $_POST["age"]==0? NULL:$_POST["age"];
		$height = $_POST["height"]==0? NULL:$_POST["height"];
		$skin_color = $_POST["skin_color"]=="0"? NULL:$_POST["skin_color"];
		$size = $_POST["size"]=="0"? NULL:$_POST["size"];
		$bodyshape =$_POST["bodyshape"]=="0"? NULL:$_POST["bodyshape"];


		$found_user = User::find_by_id($_SESSION["user_id"]);

		$authenticated_user = User::authenticate($found_user->email,$old_password);


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

		if($old_password){
			if($authenticated_user){
				if($new_password){
					$hashed_password=User::password_encrypt($new_password);
				
					$modified_user->password= $hashed_password;	
				}else{
					$_SESSION["failed_authentication"]="Please input a new password";
					$_SESSION["update_message"]="";
				}
			}else{
				$_SESSION["failed_authentication"]="Please input the correct password";
				$_SESSION["update_message"]="";
			}
		}else if($new_password){
			$_SESSION["failed_authentication"]="Please input the correct password";
			$_SESSION["update_message"]="";
		}else{
			$_SESSION["failed_authentication"]="";
		}
		

		$result = $modified_user->save();

	    if ($result) {
	    	// Success
 	 		$_SESSION["success_message"]= "Your information has been updated.";
 	 		$_SESSION["failed_authentication"]="";
 	 		$_SESSION["update_message"] = "";

 	 		redirect_to(ROOT_PATH."app/class/view/setting");
	    } else {
	      // Failure
	      if($_SESSION["failed_authentication"]==""){
			$_SESSION["failed_authentication"]=="";
			$_SESSION["update_message"] = "Nothing has changed.";
	      }
	      redirect_to(ROOT_PATH."app/class/view/setting");
	    }





	}else{
		$_SESSION["update_message"] = "Nothing has changed.";
		redirect_to(ROOT_PATH."app/class/view/setting");
	}




?>