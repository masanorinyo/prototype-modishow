<?php 
	require_once("../app/config/initialize.php");
	//|| empty($_SESSION['style_info'])
	if(!$session->is_logged_in()){
		redirect_to(ROOT_PATH."public/index");
	}else{
		$title = $_SESSION['style_info']['title'];
		$outfitOnModel_id = $_SESSION['style_info']['outfitOnModel_id'];
		$category_id = $_SESSION['style_info']['category_id'];
		$product_array = $_SESSION['style_info']['product_id'];
		$description = $_SESSION['style_info']['description'];
		$user_id = $_SESSION['user_id'];
		$_SESSION['style_info']="";
	}
	
?>


<?php include(LAYOUT_PATH.DS."structure/header.php");?>
		
<div id="tryonContent" class="tryon-collage fullWidth">
<div id="creationCanvas" class="floatLeft">
	<ul id="outfitItems" class="draggable">
		
	</ul>
	<?php include(LAYOUT_PATH.DS."parts/submission_panel.php");?>
	<div class="background_grid fullWidth"></div>
	<div class="controlPanel">
		<ul>
			<li id="remove" class="background_shadow round_medium opaque_weak ">Remove
			</li>
			<li id="clone" class="background_shadow round_medium opaque_weak ">Clone
			</li>
			<li id="mirror" class="background_shadow round_medium opaque_weak ">Mirror
			</li>
			<li id="front" class="background_shadow round_medium opaque_weak ">Front
			</li>
			<li id="back" class="background_shadow round_medium opaque_weak ">Back
			</li>
			<li class="button_layer background_shadow round_medium opaque_weak">
				<div>
					<span class="layer_item_icon"></span>
				</div>
				<div class="font_monotype">i</div>
				<div>
					<span class="generaterHeader_downArrow"></span>
				</div>	
				<div class="hiddenBox round_medium">
					<ul id="sortable" class="collageSortable opaque_weak">
					</ul>
				</div>
			</li>
			<span class="dragAndDropGuide"><span>
		</ul>
	</div>
</div>
<div id="creationToolbox">
	<div id="itembox_header" class="fullWidth">
		<ul>
			<!-- <li class="itemList_items currently_focus">Items</li> 
			<li class="itemList_beauty">Beauty</li>
			<li class="itemList_people">People</li>
			<li class="itemList_Embelishment">Embelishment</li> -->
		</ul>
	</div>		
	<div class="itembox_subHeader fullWidth background_white">
		<div id="itemList">	
			<ul class="controlBoxes fullWidth">
				<!-- <li class="firstChild">
					<?php //include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
						<li>Inner</li>	
						<li>Inner</li>
						<li>Jacket</li>
					<?php //include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>					
				</li> -->
			</ul>
			<!--
				<ul class="subHeader-right">					
					<li>
						<div class="changeView">
							<span class="smallerBox"></span>
						</div>
					</li>
					<li>
						<div class="changeView">
							<span class="biggerBox"></span>
						</div>
					</li>
				</ul>-->
		</div>
		<div id="beautyList">
			<ul class="controlBoxes fullWidth">
				<li class="firstChild">
					<?php //include(LAYOUT_PATH.DS."parts/searchbox.php");?>	
				</li>	
				<li class="filterOrderWrapper">
					<?php// include(LAYOUT_PATH.DS."parts/order.php");?>	
				</li>	
			</ul>
			<ul class="subHeader-right">					
				<li>
					<div class="changeView">
						<span class="smallerBox"></span>
					</div>
				</li>
				<li>
					<div class="changeView">
						<span class="biggerBox"></span>
					</div>
				</li>
			</ul>
			
		</div>
		<div id="peopleList">
			<ul class="controlBoxes fullWidth">
				<li class="firstChild">
					<?php //include(LAYOUT_PATH.DS."parts/searchbox.php");?>	
				</li>	
				<li class="filterOrderWrapper">
					<?php// include(LAYOUT_PATH.DS."parts/order.php");?>	
				</li>		
			</ul>
			<ul class="subHeader-right">					
				<li>
					<div class="changeView">
						<span class="smallerBox"></span>
					</div>
				</li>
				<li>
					<div class="changeView">
						<span class="biggerBox"></span>
					</div>
				</li>
			</ul>
			
		</div>
		<div id="embelishmentList">
			<ul class="controlBoxes fullWidth">
				<li class="firstChild">
					<?php //include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>	
						<li>Text</li>
						<li>Frames & borders</li>
						<li>Effects</li>
						<li>Colors</li>	
						<li>Backgrounds</li>
						<li>Articles</li>
						<li>Patterns</li>
						<li>Others</li>
					<?php //include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>	
				</li>		
			</ul>
			<ul class="subHeader-right">						
				<li>
					<div class="changeView">
						<span class="smallerBox"></span>
					</div>
				</li>
				<li>
					<div class="changeView">
						<span class="biggerBox"></span>
					</div>
				</li>				
			</ul>
		</div>
	</div>
	<div id="beautyImages" class="itemBox">
		<ul class="itemBoxImages">
			<span class="unavailable">Currently unavailable</span> 
		</ul>
	</div>
	<div>
		<ul id="itemLoadingBox" class="itemBoxImages collageCanvas">	
			<?php 
				foreach($product_array as $p_id){
					$found_product = Product::find_by_id($p_id);
					$small_img = $found_product->small_filename;
					$clothingType_id = $found_product->clothingType_id;
					$clothingType = Clothing_type::find_by_id($clothingType_id);
					$clothing_category =$clothingType->sub_category;

					$output ="<li class='items-wrapper'>";
					$output .="<img id='".$p_id.$clothing_category."' class='".$clothing_category."' src='".ROOT_PATH."resources/items/".$small_img."' alt='".$small_img."'/>";
					$output.="</li>";

					echo $output;
				}
			?>
		</ul>
	</div>
</div>
</div>
<div id="popup_overlay">
	<div id="transparentBackground">
	</div>
	<div id="modalbox">
		<div class="popup-box publish_collage">
			<form id="collage_creation_form" name="collage_creation_form" method="POST" action="<?php echo ROOT_PATH.'app/class/controller/submit_collage'; ?>" >
				<input type="hidden" name="title" value="<?php echo $title; ?>"/>
				<input type="hidden" name="outfitOnModel_id" value="<?php echo $outfitOnModel_id;?>"/>
				<input type="hidden" name="category_id" value="<?php echo $category_id;?>"/>
				<input type="hidden" name="description" value="<?php echo $description;?>"/>
				<input type="hidden" name="user_id" value="<?php echo $user_id;?>"/>
				<span class="icon_close opaque_strong"></span>
				<div class="popup-box-header"><span>Publish</span></div>
				<div class="noUnloadMessage sendInfo button_medium publish">Publish</div>
				<div class="button_medium cancel"><span>Cancel</span></div>
				<span class="label">Share with friends</span> <!--Currently not working-->
				<div class="button_medium sns_facebook sns"><span>Facebook</span></div>
				<div class="button_medium sns_twitter sns"><span>Twitter</span></div>
				<div class="button_medium sns_pinterest sns"><span>Pinterest</span></div>
			</form>
		</div>
	</div>
</div>	
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>