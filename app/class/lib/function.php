<?php
	function confirm_query($result_set){
		if(!$result_set){
			die("Database query failed.");
		}
	}

	function strip_zeros_from_date($marked_string=""){
		//first remove the marked zeros
		$no_zeros = str_replace("*0","",$marked_string);
		//then remove any remainig marks 
		$cleaned_string = str_replace("*","",$no_zeros);
		return $cleaned_string;
	}

	function redirect_to($location = NULL){
		if($location != NULL){
			header("Location: {$location}");
			exit;
		}
	}

	function output_message($message=" "){
		if(!empty($message)){
			return "<p class=\"message\"> {$message}</p>";
		}else{
			return "";
		}
	}


	function __autoLoad($class_name){//gives instructions what to do in case of class problem
		$class_name = strtolower($class_name);
		$path = LIB_PATH.DS."{$class_name}.php";
		if(file_exists($path)){
			require_once($path);
		}else{
			die("The file {$class_name}.php could not be found");
		}
	}

	function include_layout_template($template=""){
		include(SITE_ROOT.DS."public".DS."layouts".DS.$template);
	}

	function write_logs($action, $message){
		$log_file = SITE_ROOT.DS."logs".DS."log.txt";

		if(file_exists($log_file)){
			
			if($handler = fopen($log_file,"a")){
				
				fwrite($handler,"\nAction: [{$action}] - {$message}");
				
				fclose($handler);
			
			}else{
				echo "Sorry we could not open the file";
			}

		}else{
			echo "Sorry we could not find the log file.";
		}		
	}

	function datetime_to_text($datetime=""){
		$unixdatetime=strtotime($datetime);
		return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);

	}

?>