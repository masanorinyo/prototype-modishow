<?php
	require_once("../../config/initialize.php");
	
	if(isset($_POST['confirm'])){
		$old_password = htmlentities(trim($_POST["password"]));
		$new_password = htmlentities(trim($_POST["new_password"]));
		$username = htmlentities(trim($_POST["username"]));
		$new_email = htmlentities(trim($_POST["email"]));
		$country = $_POST["country"];
		$city = htmlentities(isset($_POST["city"]));
		$age = $_POST["age"]==0? NULL:$_POST["age"];
		$height = $_POST["height"]==0? NULL:$_POST["height"];
		$skin_color = $_POST["skin_color"]==0? NULL:$_POST["skin_color"];
		$size = $_POST["size"]==0? NULL:$_POST["size"];
		$bodyshape =$_POST["bodyshape"]==0? NULL:$_POST["bodyshape"];
		
		$found_user = User::find_by_id($_SESSION["user_id"]);

		$authenticated_user = User::authenticate($found_user->email,$old_password);

		if($authenticated_user){
			$hashed_password=User::password_encrypt($new_password);
			
			$modified_user = new User;
			$modified_user->user_id = $_SESSION["user_id"];
			$modified_user->username = $username;
			$modified_user->email = $new_email;
			$modified_user->country = $country;
			$modified_user->city = $city?$city:false;	
			$modified_user->age = $age?$age:false;
			$modified_user->height = $height?$height:false;
			$modified_user->skin_color = $skin_color?$skin_color:false;
			$modified_user->size = $size?$size:false;
			$modified_user->bodyshape = $bodyshape?$bodyshape:false;
			$modified_user->password= $hashed_password;
			
			$result = $modified_user->save();

		    if ($result) {
		    	// Success
	 	 		$_SESSION["message"] = "Your information has been updated.";
	 	 		redirect_to(ROOT_PATH."app/class/view/setting");
		    } else {
		      // Failure
		      $_SESSION["message"] = "Update failed.";
		      redirect_to(ROOT_PATH."app/class/view/setting");
		    }

		}else{
			$_SESSION["message"]="wrong password";
			redirect_to(ROOT_PATH."app/class/view/setting");
		}





	}else{
		redirect_to(ROOT_PATH."app/class/view/setting");
	}




?>