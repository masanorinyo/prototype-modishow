<?php 
	require_once("../app/config/initialize.php");
	if(!$session->is_logged_in()){
		redirect_to(ROOT_PATH."public/index");
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
			<li class="itemList_items currently_focus">Items</li> 
			<li class="itemList_beauty">Beauty</li>
			<li class="itemList_people">People</li>
			<li class="itemList_Embelishment">Embelishment</li>
		</ul>
	</div>		
	<div class="itembox_subHeader fullWidth background_white">
		<div id="itemList">	
			<ul class="controlBoxes fullWidth">
				<li class="firstChild">
					<?php include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
						<li>Inner</li>	
						<li>Inner</li>
						<li>Jacket</li>
					<?php include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>					
				</li>
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
					<?php include(LAYOUT_PATH.DS."parts/searchbox.php");?>	
				</li>	
				<li class="filterOrderWrapper">
					<?php include(LAYOUT_PATH.DS."parts/order.php");?>	
				</li>	
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
				</ul>
			-->
		</div>
		<div id="peopleList">
			<ul class="controlBoxes fullWidth">
				<li class="firstChild">
					<?php include(LAYOUT_PATH.DS."parts/searchbox.php");?>	
				</li>	
				<li class="filterOrderWrapper">
					<?php include(LAYOUT_PATH.DS."parts/order.php");?>	
				</li>		
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
				</ul>
			-->
		</div>
		<div id="embelishmentList">
			<ul class="controlBoxes fullWidth">
				<li class="firstChild">
					<?php include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>	
						<li>Text</li>
						<li>Frames & borders</li>
						<li>Effects</li>
						<li>Colors</li>	
						<li>Backgrounds</li>
						<li>Articles</li>
						<li>Patterns</li>
						<li>Others</li>
					<?php include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>	
				</li>		
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
				</ul>
			-->
		</div>
	</div>
	<div id="itemImages" class="itemBox">
		<ul class="itemIconsWrapper">
			<li>
				<img src="images/productItems/inner_1.png"/>
				<span class="itemDescription">Inner</span>
			</li>
			<li>
				<img src="images/productItems/item1.png"/>
				<span class="itemDescription">Inner</span>
			</li>
			<li>
				<img src="images/productItems/item3.png"/>
				<span class="itemDescription">Jacket</span>
			</li>

		</ul>
		<ul class="itemBoxImages collageCanvas">	
			<li class="items-wrapper">
				<img id="1accessory" class="accessory product" src="images/productItems/accessory_1.png"/>
			</li>
			<li class="items-wrapper">
				<img id="3item" class="inner product" src="images/productItems/item3.png"/>
			</li>
			<li class="items-wrapper">
				<img id="1item" class="inner product" src="images/productItems/item1.png"/>
			</li>
			<li class="items-wrapper">
				<img id="1inner" class="inner product" src="images/productItems/inner_1.png"/>
			</li>
			<li class="items-wrapper">
				<img id="1skirt" class="skirt product" src="images/productItems/skirt_1.png"/>
			</li>
			<li class="items-wrapper">
				<img id="2skirt" class="skirt product" src="images/productItems/skirt_2.png"/>
			</li>
			<li class="items-wrapper">
				<img id="1dress" class="dress product" src="images/productItems/dress_1.png"/>
			</li>
			<li class="items-wrapper">
				<img id="2top" class="top product" src="images/productItems/top_2.png"/>
			</li>
			<li class="items-wrapper">
				<img id="1shirt" class="shirt product" src="images/productItems/shirt_1.png"/>
			</li>
			<li class="items-wrapper">
				<img id="3top" class="top product" src="images/productItems/top_3.png"/>
			</li>
			<li class="items-wrapper">
				<img id="4top" class="top product" src="images/productItems/top_4.png"/>
			</li>
			<li class="items-wrapper">
				<img id="5top" class="top product" src="images/productItems/top_5.png"/>
			</li>
		</ul>
	</div>
	<div id="beautyImages" class="itemBox">
		<ul class="itemBoxImages">
			<span class="unavailable">Currently unavailable</span>
		</ul>
	</div>
	<div id="peopleImages" class="itemBox">
		<ul class="itemBoxImages">
			<span class="unavailable">Currently unavailable</span>
		</ul>
	</div>
	<div id="embelishmentImages" class="itemBox">
		<ul class="itemIconsWrapper">
			<li>
				<span class="itemIcon textImage"></span>
				<span class="itemDescription">Text</span>
			</li>
			<li>
				<span class="itemIcon frameImage"></span>		
				<span class="itemDescription">Frames & borders</span>
			</li>
			
			<li>
				<span class="itemIcon backgroundImage"></span>
				<span class="itemDescription">Backgrounds</span>
			</li>
			<!--
			<li>
				<span class="itemIcon"></span>
				<span class="itemDescription">Effect</span>
			</li>
			<li>
				<span class="itemIcon"></span>
				<span class="itemDescription">Colors</span>
			</li>
			<li>
				<span class="itemIcon"></span>
				<span class="itemDescription">Articles</span>
			</li>
			<li>
				<span class="itemIcon"></span>
				<span class="itemDescription">Patterns</span>
			</li>
			<li>
				<span class="itemIcon"></span>
				<span class="itemDescription">Others</span>
			</li>
			-->
		</ul>					
		<ul class="itemBoxImages">		
			<span class="unavailable">Currently unavailable</span>	
		</ul>
	</div>
</div>
</div>
<div id="popup_overlay">
	<div id="transparentBackground">
	</div>
	<div id="modalbox">
		<div class="popup-box publish_collage">
			<span class="icon_close opaque_strong"></span>
			<div class="popup-box-header"><span>Publish</span></div>
			<a class="noUnloadMessage sendInfo" href="index.php"><div class="button_medium publish">Publish</div></a>
			<div class="button_medium cancel"><span>Cancel</span></div>
			<span class="label">Share with friends</span> <!--Currently not working-->
			<div class="button_medium sns_facebook sns"><span>Facebook</span></div>
			<div class="button_medium sns_twitter sns"><span>Twitter</span></div>
			<div class="button_medium sns_pinterest sns"><span>Pinterest</span></div>
		</div>
	</div>
</div>	
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>