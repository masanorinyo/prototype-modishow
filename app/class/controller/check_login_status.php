<?php
	require_once("../../config/initialize.php");
	
	if(isset($_SESSION["user_id"])){
		echo "true";
	}else{
		echo "false";
	}

?>