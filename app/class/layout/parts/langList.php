<?php
	$default = $user->language;
	$lang = array(
		'en'=>"English",
		'jp'=>"Japanese",
	);
	
	foreach($lang as $key=>$val){
		echo ($key==$default)?"<option selected=\"selected\" value=\"$key\">$val</option>":"<option value=\"$key\">$val</option>";
	}

						
?>