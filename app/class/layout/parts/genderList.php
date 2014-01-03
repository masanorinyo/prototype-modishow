<?php 
	$selected = $user->gender;
	$unspecified= false;
	$female=false;
	$male=false;
	switch ($selected){
		case "u":
			$unspecified = true;
			break;
		
		case "f":
			$female = true;
			break;
		
		case "m":
			$male = true;
			break;
	}

;?>

<label>
	<input type="radio" name="gender" value="u" <?php if ($unspecified) echo 'checked="checked"';?>/> Unspecified
</label>
<label>
	<input type="radio" name="gender" value="f" <?php if ($female) echo 'checked="checked"';?>/> Female
</label>
<label>
	<input type="radio" name="gender" value="m"  <?php if ($male) echo 'checked="checked"';?>/> Male
</label>

