<?php 
	require_once("../../config/initialize.php");
	
	if(!$session->is_logged_in()){
		redirect_to(ROOT_PATH."public/index");
	}
	
	//this deletes the outfitCollage information which did not get stored with collage 
	//this happens when users skip the process of creating collages.
	if(!empty($_SESSION['style_info'])){
		$style_array = $_SESSION['style_info'];
		$outfitOnModel_id = $style_array['outfitOnModel_id'];
		$_SESSION['style_info']="";
		$found_outfitOnModel = Outfit_on_model::find_by_id($outfitOnModel_id);
		$d_url = $found_outfitOnModel->default_filename;
		$s_url = $found_outfitOnModel->m_size_filename;

		$full_d_url = SITE_ROOT.DS."resources/styles/".$d_url;
		$full_s_url = SITE_ROOT.DS."resources/styles/".$s_url;

		unlink($full_d_url);
		unlink($full_s_url);
		$result = $found_outfitOnModel->delete();
	}

	include(LAYOUT_PATH.DS."structure/header.php");


?>

<div class="setting">
	<form id="setting_form" action="<?php echo ROOT_PATH."app/class/controller/setting_controller";?>" enctype="multipart/form-data"  method="post">
		<div class="setting-wrapper account">
			<div class="sub-header accountInfo">
				<span>
					Account Information
					<?php
						if(isset($_SESSION["success"])){
							if($_SESSION["success"]=="true"){
								echo "<span class='color_lightBlue errorMessage wrongCombo'>{$message}</span>";
								$_SESSION['message']="";
							}else{
								echo "<span class='color_red errorMessage wrongCombo'>{$message}</span>";	
								$_SESSION['message']="";
							}
						}else if(isset($message)){
							echo "<span class='color_red errorMessage wrongCombo'>{$message}</span>";
							$_SESSION['message']="";

						}
					;?>
				</span>

			</div>
			<ul>
				<li>
					<span>Profile Picture:</span>
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>"/>
					<input id="profile_pic" type="file" name="file_upload" />
				</li>
				<li>
					<span>Username: </span>
					<input id="name" name="username" type="text" value="<?php echo $user->username;?>" placeholder=" ex) modishow"/>
				</li>
				<li>
					<span>E-mail Address: </span>
					<input id="email" name="email" type="text" value="<?php echo  $user->email;?>" placeholder=" ex) modishow@gmail.com"/>
				</li>
				<li>
					<span>Password:</span>
					<input id="password" name="password" type="password" placeholder=" Enter your current password"/>
				</li>
				<li>
					<input id="newPassword" name="new_password" type="password" placeholder=" Enter your new password"/>
				</li>
				<li>
					<input id="verifiedPassword" name="verified_new_password" type="password" placeholder=" Re-type your new password"/>
				</li>
				
				<li>
					<span>Language:</span>
					<select id="language" name="language">
						<?php include(LAYOUT_PATH.DS."parts/langList.php");?>
					</select>
				</li>
				<li>
					<span>Country:</span>
					<select id="country" name="country">
						<?php include(LAYOUT_PATH.DS."parts/countryList.php");?>
					</select>
				</li>
				<li>
					<input id="cityName" type="text" name="city" placeholder=" Please type your city" value="<?php echo $user->city;?>" maxlength="20"/>
				<li class="lastChild">
					<span>Gender:</span>
					<?php include(LAYOUT_PATH.DS."parts/genderList.php");?>
					
				</li>
			</ul>
		</div>
		<div class="setting-wrapper personal">
			<div class="sub-header">
				<span>Personal Information</span>
			</div>
			<?php include(LAYOUT_PATH.DS."structure/personal_info.php");?>	
		</div>
		<div class="confirmation">
			<div id="deactivate" class="openModal round_weak" name="deactivate" value="deactivate">
				Deactivate
			</div>
			<div id="cancel" class="round_weak pointer"><span>Cancel</span></div>
			<input id="confirm" class="round_weak" type="submit" value="Confirm" name="confirm">
		</div>
	</form>
</div>
<div id="popup_overlay">
	<div id="transparentBackground">
	</div>
	<div id="modalbox">
		<div class="popup-box">
			<span class="icon_close opaque_strong"></span>
			<div class="popup-box-header">
				<span>Deactivate!? Are you sure?</span>
			</div>
			<div id="account_delete" class="button_large background-strong firstList round_weak">
				<span>
					YES
				</span>
			</div><!--Write PHP code to destroy the user's account-->
			<div class="button_large background-weak secondList closeBox round_weak">
				<span>No</span>
			</div>			
		</div>			
	</div>
</div>			

<?php include(LAYOUT_PATH.DS."structure/footer.php");?>



