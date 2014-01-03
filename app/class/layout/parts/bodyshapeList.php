<?php
	$default = $user->bodyshape;
	$body = array(
		"0"=>"Please select your body type",
		"tr"=>"Triangle",
		"in"=>"Invertied Triangle",
		"ho"=>"Hourglass",
		"re"=>"Rectangle",
		"di"=>"Diamond",
		"ro"=>"Rounded"
	);
	
	foreach($body as $key=>$val){
		echo ($key==$default)?"<option selected=\"selected\" value=\"$key\">$val</option>":"<option value=\"$key\">$val</option>";

	}

						
?>