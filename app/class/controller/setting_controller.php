<?php

	if(isset($_POST['submit'])){
		$old_password = htmlentities(trim($_POST["password"]));
		$new_password = htmlentities(trim($_POST["password"]));
		
		$found_user = User::find_by_id($_SESSION["user_id"]);

		$authenticated_user = User::authenticate($found_user->email,$old_password);

		if($authenticated_user){
			$hashed_password=User::password_encrypt($new_password);
			echo $hashed_password;
		}else{
			echo "fail";
		}





	}else{
		redirect_to(ROOT_PATH."public/index");
	}




?>