<?php require_once("../app/config/initialize.php");?>
<?php include(LAYOUT_PATH.DS."structure/header.php");?>
		

<div id="content">
	<?php include(LAYOUT_PATH.DS."parts/scrollToTop.php");?>
	<?php include(LAYOUT_PATH.DS."parts/about_button.php");?>
	<div id="feed_navi" class="fullWidth">
		<ul class="center">
			<li class="current">
				Overall
			</li>
			<li>
				Following's Likes
			</li>
			<li>
				Following's Creations
			</li>
		</ul>
	</div>
	<div id="feed_content">
		<div class="clear left">
			<?php include(LAYOUT_PATH.DS."presentation/all.php");?>
		</div>
		<div class="clear right">
			<?php include(LAYOUT_PATH.DS."presentation/all.php");?>
		</div>
		<div class="clear left">
			<?php include(LAYOUT_PATH.DS."presentation/smalls_mediums.php");?>
		</div>
		<div class="clear right">
			<?php include(LAYOUT_PATH.DS."presentation/larges_smalls.php");?>
		</div>
		<div class="clear left">
			<?php include(LAYOUT_PATH.DS."presentation/allMediums.php");?>
		</div>
		<div class="clear right">
			<?php include(LAYOUT_PATH.DS."presentation/allSmalls.php");?>
		</div>
	</div>
</div>


<?php include(LAYOUT_PATH.DS."structure/quickview_modal.php");?>		
<?php include(LAYOUT_PATH.DS."structure/outfit_modal.php");?>	
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>