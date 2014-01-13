<?php 
	
	require_once("../app/config/initialize.php");
	
	//this deletes the outfitCollage information which did not get stored with collage 
	//this happens when users skip the process of creating collages.
	if(!empty($_SESSION['style_info'])){
		$style_array = $_SESSION['style_info'];
		$outfitOnModel_id = $style_array['outfitOnModel_id'];
		$_SESSION['style_info']="";
		$found_outfitOnModel = Outfit_on_model::find_by_id($outfitOnModel_id);
		$result = $found_outfitOnModel->delete();
	}
	

	include(LAYOUT_PATH.DS."structure/header.php");
?>

<div id="content">
	<?php include(LAYOUT_PATH.DS."parts/about_button.php");?>
	<div id="content_wrapper">
		<div class="content_stream clear">
			<h5> Currently Under Construction</h5>
		</div>	
	</div>
</div>
	
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>