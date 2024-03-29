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

<div id="tryonContent" class="fullWidth">
	<div id="creationCanvas" class="background_black floatLeft overflowHidden">
		<img id="1background" class="embelishment backgroundImage" src="<?php echo RESOURCE_PATH;?>/embelishment/background_1.png"/>
		<img id="1shadow"class="virtualModel shadow center" src="<?php echo RESOURCE_PATH;?>/model/shadow_1.png"/>
		<img id="1torso"class="virtualModel torso center" src="<?php echo RESOURCE_PATH;?>/model/torso_1.png"/>
		<img id="1legs"class="virtualModel legs center" src="<?php echo RESOURCE_PATH;?>/model/legs_1.png"/>
		<img id="1arms"class="virtualModel arms center" src="<?php echo RESOURCE_PATH;?>/model/arms_1.png"/>
		<img id="1face"class="virtualModel face center" src="<?php echo RESOURCE_PATH;?>/model/face_natasha.png"/>
		<div id="outfitItems">
			
		</div>
		<div id="embelishmentItems">

		</div>
		<div class="openLayer center"></div><!--click the virtual model to see item info-->
		<!--
		<div class="leftArrow_subSlideshow_two opaque_strong pointer hide"></div>
		<div class="rightArrow_subSlideshow_two opaque_strong pointer hide"></div>
		-->
		<!-- <div class="userPreference hide">
			<div class="opaque_medium button_heart broken">
				<span class="brokenHeart_empty"></span>
				<span class="brokenHeart_filled"></span>
			</div>
			<div class="opaque_medium button_heart whole">
				<span class="heart_empty"></span>
				<span class="heart_filled"></span>
			</div>
		</div> -->
		<?php include(LAYOUT_PATH.DS."parts/submission_panel.php");?>
		<!-- This will change the outfit according to the selected cateogry -->
		<div class="controlPanel">
			<ul>
				<!--  <li class="button_category background_shadow round_medium opaque_weak "> 
					<div>All categories</div>
					<div>
						<span class="stickynavi_listArrow"></span>
					</div>
					<div class="hiddenBox background_shadow round_medium">
						<ul class="opaque_weak">
							<li>All categories</li>
							<li>Featured</li>
							<li>Random</li>
							<li class="parent-submenu">
							Style
								<div class="hiddenBox-submenu round_medium background_shadow styleOutfit">
									<ul>
										<li>Active</li>
										<li>Basic</li>
										<li>Business Causual</li>
										<li>Bohemian</li>
										<li>Casual</li>
										<li>Classical</li>
										<li>Comfortable</li>
										<li>Celebrity</li>
										<li>Cute</li>
										<li>Elegant</li>
										<li>Formal</li>
										<li>Goth</li>
										<li>Preppy</li>
										<li>Punk</li>
										<li>Runway</li>
										<li>Runway</li>
										<li>Sexy</li>
										<li>Swimwear</li>
										<li>Vintage</li>
									</ul>
								</div>
							</li>
							<li class="parent-submenu">Occassion
								<div class="hiddenBox-submenu background_shadow occassionOutfit">
									<ul>
										<li>Casual date</li>
										<li>Classy date</li>
										<li>Everyday</li>
										<li>Formal events</li>
										<li>Night out</li>
										<li>Outdoor activities</li>
										<li>Work</li>
									</ul>
								</div>
							</li>
							<li class="parent-submenu">Season
								<div class="hiddenBox-submenu background_shadow seasonOutfit">
									<ul>
										<li>Spring</li>
										<li>Mid-Spring</li>
										<li>Summer</li>
										<li>Fall</li>
										<li>Mid-Fall</li>
										<li>Winter</li>
									</ul>
								</div>
							</li>
							<li class="parent-submenu">Weather
								<div class="hiddenBox-submenu background_shadow weahterOutfit">
									<ul>
										<li>Warm</li>
										<li>Freezing</li>
										<li>Cold</li>
										<li>Raining</li>
										<li>Hot</li>
										<li>Snowing</li>
										<li>Tropical</li>
									</ul>
								</div>
							</li>
						</ul> 
					</div>						
				</li> -->
				<li class="button_layer background_shadow round_medium opaque_weak">
					<div>
						<span class="layer_item_icon"></span>
					</div>
					<div>Layer</div>
					<div>
						<span class="generaterHeader_downArrow"></span>
					</div>	
					<div class="hiddenBox round_medium">
						<ul id="sortable" class="opaque_weak tryon_list">
						</ul>
					</div>
					<span class="dragAndDropGuide"><span>
				</li>
			</ul>
		</div> 
	</div>
	<div id="creationToolbox">
		<!-- <div id="itembox_header" class="fullWidth">
			<ul>
				<li class="itemList_myItems currently_focus">My Items</li> 
				<li class="itemList_clothing">Clothing & Accessories
				</li>
				<li class="itemList_model ">Models</li>
				<li class="itemList_Embelishment">Embelishment</li>
			</ul>
		</div>		 -->
		<div class="itembox_subHeader fullWidth background_white">
			<!-- <div id="myItemList">	
				<ul class="controlBoxes fullWidth">
					<li class="firstChild">
						<?php //include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
							<li>My likes</li>	
							<li>My uploads</li>
						<?php //include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>			
					</li>
				</ul>
				 item view will be different - bigger item vs smaller item & you can upload your item here
					<ul class="subHeader-right">
						<li>
							<div class="uploadPic">Upload</div>
							<div class="iconWrapper">
							</div>
						</li>
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
				 
			</div> -->
			<div id="clothingItemList">
				<ul class="controlBoxes fullWidth">
					<li class="firstChild">
						<?php include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
							<li class="dress">Dress</li>
							<li class="bag">Bags</li>
							<li class="accessories">Accessories</li>
							<li class="jeans">Jeans</li>
							<li class="pants">Pants</li>
							<li class="shorts">Shorts</li>
							<li class="jumpsuit_romper">Jumpsuits & Rompers</li>
							<li class="intimates">Intimates</li>
							<li class="skirt">Skirts</li>
							<li class="top">Tops</li>
							<li class="outerwear">Outwear</li>
						<?php include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>			
					</li>
					<!-- <li class="filterOrderWrapper">
						<?php //include(LAYOUT_PATH.DS."parts/filters.php");?>		
					</li>
					<li class="filterOrderWrapper">
						<?php //include(LAYOUT_PATH.DS."parts/order.php");?>
					</li>
					<li>
						<?php //include(LAYOUT_PATH.DS."parts/searchbox.php");?>		
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
					</ul>	
				-->				
			</div>
			<!-- <div id="modelList">
				<ul class="controlBoxes fullWidth">
					<li class="firstChild">
						<?php //include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
							<li>Natasha</li>	
							<li>My uploads</li>
						<?php //include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>
					</li>
					<div class="subHeader-submenu">
								<ul>			
									<li>
										Skin Color	
										<div class="submenu-second firstChild">	
											<form>
												<ul>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Light
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Light
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Light
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Light
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Light
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Light
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Light
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Light
														</li>
													</label>
												</ul>
											</form>											
										</div>									
									</li>								
									</li>
									<li>
										Hair Style
										<div class="submenu-second">	
											<form>
												<ul>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Long
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Very long
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Short
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Afro
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Pony tail
														</li>
													</label>
												</ul>
											</form>											
										</div>	
									</li>
									<li>
										Ethnicity
										<div class="submenu-second">	
											<form>
												<ul>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Asian
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															African-American 
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Caucasian
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Hispanic
														</li>
													</label>
													<label>
														<li>
															<input type="checkbox" value=""/> 
															Indian
														</li>
													</label>
												</ul>
											</form>											
										</div>	
									</li>
								</ul>
					</div>
					<li class="shape">
							<div class="subHeader-list selectionBox background_white font_calistro">
								shape
								<div class="iconWrapper">
									<span class="filledDownArrow">&#9660;</span>
								</span>
								</div>
								<div class="subHeader-submenu">
									<ul>			
										<li class="firstChild">
											shape A <span class="modelShape-A">test</span>
										</li>	
										<li>
											shape A <span class="modelShape-A"></span>
										</li>	
										<li>
											shape A <span class="modelShape-A"></span>
										</li>	
										<li>
											shape A <span class="modelShape-A"></span>
										</li>	
									</ul>
								</div>
							</div>
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
				
			</div> -->
			<!-- <div id="embelishmentList">
				<ul class="controlBoxes fullWidth">
					<li class="firstChild">
						<?php //include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
							<li>Text</li>
							<li>Frames & borders</li>
							<li>Backgrounds</li>	
						<?php //include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>	
					</li>
					<li>
						<?php //include(LAYOUT_PATH.DS."parts/searchbox.php");?>	
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
			</div> -->
		</div>
		<!-- <div id="myItemImages" class="itemBox">	
			<ul class="itemIconsWrapper">
				<li>
					<span class="itemIcon heart_filled"></span>
					<span class="itemDescription">My likes</span>
				</li>
				  Users can see their own uploaded items here
				<li>
					<span class="itemIcon"></span>
					<span class="itemDescription">My uploads</span>
				</li>
				
			</ul>
			
		</div> -->
		<div id="clothingImages" class="itemBox">
			<ul class="itemIconsWrapper">
				
				<li class="dress">
					<span class="itemIcon"></span>
					<span class="itemDescription">Dress</span>
				</li>
				<li class="bag">
					<span class="itemIcon"></span>
					<span class="itemDescription">Bags</span>
				</li>
				<!-- <li id="shoes_icon">
					<span class="itemIcon "></span>
					<span class="itemDescription">Shoes</span>
				</li> -->
				<li class="accessories">
					<span class="itemIcon "></span>
					<span class="itemDescription">Accessories</span>
				</li>
				<li class="jeans">
					<span class="itemIcon "></span>
					<span class="itemDescription">Jeans</span>
				</li>
				<li class="pants">
					<span class="itemIcon "></span>
					<span class="itemDescription">Pants</span>
				</li>
				<li class="shorts">
					<span class="itemIcon "></span>
					<span class="itemDescription">Shorts</span>
				</li>
				<li class="jumpsuit_romper">
					<span class="itemIcon "></span>
					<span class="itemDescription">Jumpsuits & Rompers</span>
				</li>
				<li class="intimates">
					<span class="itemIcon "></span>
					<span class="itemDescription">Intimates</span>
				</li>
				<!-- <li id="swimwear_icon">
					<span class="itemIcon "></span>
					<span class="itemDescription">Swimwear</span>
				</li> -->
				<li class="skirt">
					<span class="itemIcon skirtImage"></span>		
					<span class="itemDescription">Skirts</span>
				</li>
				<li class="top">
					<span class="itemIcon topImage"></span>
					<span class="itemDescription">Tops</span>
				</li>
				<li class="outerwear">
					<span class="itemIcon outwearImage"></span>
					<span class="itemDescription">Outwears</span>
				</li>
				
			</ul>
		</div>
		<!-- <div id="modelImages" class="itemBox">
			<ul class="itemIconsWrapper">
				<li>	
					<span class="itemIcon">
						<img id="natasha-1" src="images/model/model_face.png"/>
					</span>
					<span class="itemDescription">Natasha Little</span>
				</li>
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
					<span class="itemIcon"></span>
					<span class="itemDescription">Effect</span>
				</li>
				<li>
					<span class="itemIcon backgroundImage"></span>
					<span class="itemDescription">Background</span>
				</li>
			</ul>					
			
		</div>-->
		<div>
			<ul id="itemLoadingBox" class="itemBoxImages">
				<div class="loader"></div>
			</ul>
		</div>
	</div>
</div>
<div id="popup_overlay">
	<div id="transparentBackground">
	</div>
	<div id="modalbox">
		
		<form id="style_creation_form" name="style_form" method="POST" action="<?php echo ROOT_PATH.'app/class/controller/guide_to_collage'; ?>" >
			<div class="popup-box publishes">
				<span class="icon_close opaque_strong"></span>
				<div class="popup-box-header">
					<span>Tell us more about the style</span>
				</div>
				<div class="title_box">
					<span>
						Title:<span class="required">*</span>
					</span>
					<input id="titleName" name="titleName" type="text"/>
				</div>
				<div class="category_box">
					<span>
						Category:
						<span class="required">*</span>
					</span>
					<div class="firstChild">
						<select id="categorySelect" name="main_category">
							<option value="0">Please choose a category</option>
							<option value='style'>Style</option>
							<option value='Occassion'>Occassion</option>
							<option value='Season'>Season</option>
							<option value='Weather'>Weather</option>
						</select>
					</div>
					<div class="middleChild">
						<select id="subCategorySelect">
						</select>
					</div>
					<div class="lastChild">
						<select class="style_select" name="sub_category" >
							<option value="active">Active</option>
							<option value="basic">Basic</option>
							<option value="business_casual">Business Casual</option>
							<option value="bohemian">Bohemian</option>
							<option value="Casual">Casual</option>
							<option value="Classic">Classic</option>
							<option value="Comfortable">Comfortable</option>
							<option value="Celebrity">Celebrity</option>					
							<option value="Cute">Cute</option>
							<option value="Elegant">Elegant</option>
							<option value="Formal">Formal</option>
							<option value="Goth">Goth</option>
							<option value="Preppy">Preppy</option>
							<option value="Punk">Punk</option>
							<option value="Runway">Runway</option>
							<option value="Sexy">Sexy</option>
							<option value="Swimwear">Swimwear</option>
							<option value="Vintage">Vintage</option>
						</select>
						<select class="occassion_select" name="sub_category" >
							<option value="Casual_date">Casual date</option>
							<option value="Classy_date">Classy date</option>
							<option value="Everyday">Everyday</option>
							<option value="Formal_events">Formal events</option>
							<option value="Night_out">Night out</option>
							<option value="Outdoor_activities">Outdoor activities</option>
							<option value="Work">Work</option>						
						</select>
						<select class="season_select" name="sub_category" >
							<option value="Spring">Spring</option>
							<option value="Mid-Spring">Mid-Spring</option>
							<option value="Summer">Summer</option>
							<option value="Fall">Fall</option>
							<option value="Mid-Fall">Mid-Fall</option>
							<option value="Winters">Winters</option>
						</select>
						<select class="weather_select" name="sub_category" >
							<option value="Warm">Warm</option>
							<option value="Freezing">Freezing</option>
							<option value="Cold">Cold</option>
							<option value="Raining">Raining</option>
							<option value="Hot">Hot</option>
							<option value="Snowing">Snowing</option>
							<option value="Tropical">Tropical</option>
						</select>
					</div>
				</div>
				<div class="description_box">
					<span>
						Description: <span class="optional"></span>
					</span>
					<textarea id="message" placeholder="400 words left" name="description"></textarea>
				</div>
				<div class="button_medium publish"><span>Publish</span></div>
				<div class="button_medium cancel"><span>Cancel</span></div>
			</div>
			<div class="popup-box createCollage">
				<div class="popup-box-header">
					<span>Create a collage for this style?</span>
				</div>
				<!-- <input type="submit" name="submit" id="confirm_button"  value="YES"/> -->
				<div id="confirm" class="button_large background-strong round_weak noUnloadMessage sendInfo">YES</div>
-				<div id="cancel" class="button_large background-weak round_weak noUnloadMessage sendInfo">Maybe later</div>	
			</div>		
		</form>	
	</div>
</div>


<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>