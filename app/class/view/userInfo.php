<?php require_once("../../config/initialize.php");?>
<?php include(LAYOUT_PATH.DS."structure/header.php");?>
		
<div class="setting">
	<form>
		<div class="setting-wrapper personal">
			<div class="sub-header">
				<span>Personal Information</span>
			</div>
			<ul>
				<li>
					<span>Age group</span>
					<select id="ageGroup">
						<option value="0">
							Please select your age
						</option>
						<option>
							~17
						</option>
						<option>
							18 ~ 21
						</option>
						<option>
							22 ~ 25
						</option>
						<option>
							26 ~ 30
						</option>
						<option>
							31 ~ 40
						</option>
						<option>
							40 ~ 
						</option>
					</select>	
				</li>
				<li>
					<span>Height</span>
					<select id="heightGroup">
						<option value="0">
							Please select your height
						</option>
						<option>
							~ 4'11' ( 150cm )
						</option>
						<option>
							4'11.4' ( 151cm ) ~ 5'3' ( 160cm )
						</option>
						<option>
							5'3.4' ( 161cm ) ~ 5'6.9' ( 170cm )
						</option>
						<option>
							5'7.3' ( 171cm ) ~ 5'10.9' ( 180cm )
						</option>
						<option>
							5'11.3' ( 181cm ) ~ 6'2.8' ( 190cm )
						</option>
						<option>
							6'3.2' ( 191cm ) ~ 
						</option>
					</select>	
				</li>
				<li>
					<span>Skin color</span>
					<select id="skinGroup">
						<option value="0">
							Please select your skin color
						</option>
						<option>
							Pallo-African
						</option>
						<option>
							Midtone-African
						</option>
						<option>
							Tanned-African
						</option>
						<option>
							Pallor-Asian
						</option>
						<option>
							Midtone-Asian
						</option>
						<option>
							Tanned-Asian
						</option>
						<option>
							Pallor-Caucasian
						</option>
						<option>
							Midtone-Caucasian
						</option>
						<option>
							Tanned-Caucasian
						</option>
					</select>	
				</li>
				<li>
					<span>Size</span>
					<select id="sizeGroup">
						<option value="0">
							Please select your size
						</option>
						<option>
							~ 3 (XS)
						</option>
						<option>
							4 ~ 6 (S)
						</option>
						<option>
							7 ~ 9 (M)
						</option>
						<option>
							10 ~ 12 (L)
						</option>
						<option>
							13 ~  (XL)
						</option>
					</select>	
				</li>
				<li class="lastChild">
					<span>Body</span>
					<select id="bodyTypeGroup">
						<option value="0">
							Please select your body type
						</option>
						<option>
							Triangle
						</option>
						<option>
							Invertied Triangle
						</option>
						<option>
							Hourglass
						</option>
						<option>
							Rectangle
						</option>
						<option>
							Diamond
						</option>
						<option>
							Rounded
						</option>
					</select>	
				</li>
			</ul>
		</div>
		<div class="confirmation">
			<input id="cancel" class="round_weak" type="submit" name="cancel" value="Cancel">
			<input id="confirm" class="round_weak" type="submit" value="Confirm" name="confirm">
		</div>
	</form>
</div>	

<?php include(LAYOUT_PATH.DS."structure/footer.php");?>