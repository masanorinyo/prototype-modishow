<?php
	$default = $user->size;
	$size = array(
		"0"=>"Please select your size",
		"xs"=>"~ 3 (XS)",
		"s"=>"4 ~ 6 (S)",
		"m"=>"7 ~ 9 (M)",
		"l"=>"10 ~ 12 (L)",
		"xl"=>"13 ~  (XL)"
	);
	
	foreach($size as $key=>$val){
		echo ($key==$default)?"<option selected=\"selected\" value=\"$key\">$val</option>":"<option value=\"$key\">$val</option>";

	}						
?>