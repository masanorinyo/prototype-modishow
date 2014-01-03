<?php
	$default = $user->skin_color;
	$skin = array(
		"0"=>"Please select your skin color",
		"paf"=>"Pallo-African",
		"maf"=>"Midtone-African",
		"taf"=>"Tanned-African",
		"pas"=>"Pallor-Asian",
		"mas"=>"Midtone-Asian",
		"tas"=>"Tanned-Asian",
		"pca"=>"Pallor-Caucasian",
		"mca"=>"Midtone-Caucasian",
		"tca"=>"Tanned-Caucasian"
	);
	
	foreach($skin as $key=>$val){
		echo ($key==$default)?"<option selected=\"selected\" value=\"$key\">$val</option>":"<option value=\"$key\">$val</option>";

	}

						
?>