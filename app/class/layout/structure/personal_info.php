<ul>
	<li>
		<span>Age group</span>

		<select id="ageGroup" name="age">
			<?php include(LAYOUT_PATH.DS."parts/ageList.php");?>
		</select>	
	</li>
	<li>
		<span>Height</span>
		<select id="heightGroup" name="height">
			<?php include(LAYOUT_PATH.DS."parts/heightList.php");?>
		</select>	
	</li>
	<li>
		<span>Skin color</span>
		<select id="skinGroup" name="skin_color">
			<?php include(LAYOUT_PATH.DS."parts/skinList.php");?>
		</select>	
	</li>
	<li>
		<span>Size</span>
		<select id="sizeGroup" name="size">
			<?php include(LAYOUT_PATH.DS."parts/sizeList.php");?>
		</select>	
	</li>
	<li class="lastChild">
		<span>Body</span>
		<select id="bodyTypeGroup" name="bodyshape">
			<?php include(LAYOUT_PATH.DS."parts/bodyshapeList.php");?>
		</select>	
	</li>
</ul>