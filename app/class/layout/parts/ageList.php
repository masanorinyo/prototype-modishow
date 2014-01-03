<?php
	$default = $user->age;
	$age = array(
		"0"=>"Please select your age",
		"17"=>"~17",
		"21"=>"18 ~ 21",
		"25"=>"22 ~ 25",
		"30"=>"26 ~ 30",
		"40"=>"31 ~ 40",
		"41"=>"41 ~   "
	);
	
	foreach($age as $key=>$val){
		echo ($key==$default)?"<option selected=\"selected\" value=\"$key\">$val</option>":"<option value=\"$key\">$val</option>";

	}

						
?>