<?php
	require_once("../../config/initialize.php");

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);


	
		
	// check database to see if username/password exist;
	 $found_user = User::authenticate($email,$password);
	

	if($found_user){
		$session->login($found_user);
		// $accessed_time = strftime("%Y-%m-%d %H:%M:%S",time());
		// $log_message = "[{$found_user->id}] - {$found_user->username} logged in at {$accessed_time}";
		// write_logs("Login",$log_message);
		echo "true";
	}else{
		echo "false";
	}

?>