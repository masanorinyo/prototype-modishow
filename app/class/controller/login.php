<?php
	require_once("../../config/initialize.php");
	if(isset($_POST['submit'])){
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		echo $email."&".$password;

		// check database to see if username/password exist;
		$found_user = User::authenticate($email,$password);

		

		if($found_user){
			$session->login($found_user);
			// $accessed_time = strftime("%Y-%m-%d %H:%M:%S",time());
			// $log_message = "[{$found_user->id}] - {$found_user->username} logged in at {$accessed_time}";
			// write_logs("Login",$log_message);
			redirect_to("../view/userPage");
			
			

		}else{
			$message = "Username/password combination incorrect.";
		}

	}else{
		$message = "wrong input information";
	}

?>