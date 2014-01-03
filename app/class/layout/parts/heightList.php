<?php
	$default = $user->height;
	$height = array(
		"0"=>"Please select your height",
		"150"=>"~ 4'11' ( 150cm )",
		"160"=>"4'11.4' ( 151cm ) ~ 5'3' ( 160cm )",
		"170"=>"5'3.4' ( 161cm ) ~ 5'6.9' ( 170cm )",
		"180"=>"5'7.3' ( 171cm ) ~ 5'10.9' ( 180cm )",
		"190"=>"5'11.3' ( 181cm ) ~ 6'2.8' ( 190cm )",
		"191"=>"6'3.2' ( 191cm ) ~ "
	);
	
	foreach($height as $key=>$val){
		echo ($key==$default)?"<option selected=\"selected\" value=\"$key\">$val</option>":"<option value=\"$key\">$val</option>";

	}

						
?>