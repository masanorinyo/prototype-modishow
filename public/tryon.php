<?php require_once("../app/config/initialize.php");?>
<?php include(LAYOUT_PATH.DS."structure/header.php");?>

<div id="tryonContent" class="fullWidth">
	<div id="creationCanvas" class="background_black floatLeft overflowHidden">
		<img id="1background" class="embelishment backgroundImage" src="images/embelishment/Outfit_background1.png"/>
		<img id="1model"class="virtualModel center" src="images/model/raw_natashaModel.png"/>
		<div id="outfitItems">
			
		</div>
		<div id="embelishmentItems">

		</div>
		<div class="openLayer center"></div><!--click the virtual model to see item info-->
		<!--
		<div class="leftArrow_subSlideshow_two opaque_strong pointer hide"></div>
		<div class="rightArrow_subSlideshow_two opaque_strong pointer hide"></div>
		-->
		<div class="userPreference hide">
			<div class="opaque_medium button_heart broken">
				<span class="brokenHeart_empty"></span>
				<span class="brokenHeart_filled"></span>
			</div>
			<div class="opaque_medium button_heart whole">
				<span class="heart_empty"></span>
				<span class="heart_filled"></span>
			</div>
		</div>
		<?php include(LAYOUT_PATH.DS."parts/submission_panel.php");?>
		<div class="controlPanel">
			<ul>
				<li class="button_category background_shadow round_medium opaque_weak ">
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
				</li>
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
		<div id="itembox_header" class="fullWidth">
			<ul>
				<li class="itemList_myItems currently_focus">My Items</li> 
				<li class="itemList_clothing">Clothing & Accessories
				</li>
				<li class="itemList_model ">Models</li>
				<li class="itemList_Embelishment">Embelishment</li>
			</ul>
		</div>		
		<div class="itembox_subHeader fullWidth background_white">
			<div id="myItemList">	
				<ul class="controlBoxes fullWidth">
					<li class="firstChild">
						<?php include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
							<li>My likes</li>	
						<!--<li>My uploads</li>-->
						<?php include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>			
					</li>
					<li>
						<?php include(LAYOUT_PATH.DS."parts/searchbox.php");?>		
					</li>
				</ul>
				<!-- item view will be different - bigger item vs smaller item & you can upload your item here
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
				--> 
			</div>
			<div id="clothingItemList">
				<ul class="controlBoxes fullWidth">
					<li class="firstChild">
						<?php include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
							<li>Dress</li>
							<li>Skirts</li>
							<li>Tops</li>
							<li>Outwears</li>
							<li>Jeans</li>
							<li>Pants</li>
							<li>Shorts</li>
							<li>Jumpsuits & Rompers</li>
							<li>Intimates</li>
							<li>Swimwear</li>
							<li>Activewear</li>
						<?php include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>			
					</li>
					<li class="filterOrderWrapper">
						<?php include(LAYOUT_PATH.DS."parts/filters.php");?>		
					</li>
					<li class="filterOrderWrapper">
						<?php include(LAYOUT_PATH.DS."parts/order.php");?>
					</li>
					<li>
						<?php include(LAYOUT_PATH.DS."parts/searchbox.php");?>		
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
			<div id="modelList">
				<ul class="controlBoxes fullWidth">
					<li class="firstChild">
						<?php include(LAYOUT_PATH.DS."parts/categorybox_head.php");?>
							<li>Natasha</li>	
							<!--<li>My uploads</li>-->
						<?php include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>
					</li>
					<!--<div class="subHeader-submenu">
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
					</div>-->
					<!--<li class="shape">
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
						</li>-->
					<li>
						<?php include(LAYOUT_PATH.DS."parts/searchbox.php");?>		
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
							<li>Backgrounds</li>	
						<?php include(LAYOUT_PATH.DS."parts/categorybox_foot.php");?>	
					</li>
					<li>
						<?php include(LAYOUT_PATH.DS."parts/searchbox.php");?>	
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
		<div id="myItemImages" class="itemBox">	
			<ul class="itemIconsWrapper">
				<li>
					<span class="itemIcon heart_filled"></span>
					<span class="itemDescription">My likes</span>
				</li>
				<!--  Users can see their own uploaded items here
					<li>
						<span class="itemIcon"></span>
						<span class="itemDescription">My uploads</span>
					</li>
				-->
			</ul>
			<ul class="itemBoxImages">		
				<span class="unavailable">Currently unavailable</span>
			</ul>
		</div>
		<div id="clothingImages" class="itemBox">
			<ul class="itemIconsWrapper">
				<!--
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Dress</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Bags</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Shoes</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Accessories</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Jeans</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Pants</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Shorts</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Jumpsuits & Rompers</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Intimates</span>
				</li>
				<li>
					<span class="itemIcon "></span>
					<span class="itemDescription">Swimwear</span>
				</li>
				-->
				<li>
					<span class="itemIcon skirtImage"></span>		
					<span class="itemDescription">Skirts</span>
				</li>
				<li>
					<span class="itemIcon topImage"></span>
					<span class="itemDescription">Tops</span>
				</li>
				<li>
					<span class="itemIcon outwearImage"></span>
					<span class="itemDescription">Outwears</span>
				</li>
				<li>
					<span class="itemIcon jewelryImage"></span>
					<span class="itemDescription">Jewelries</span>
				</li>
			</ul>
			<ul  class="itemBoxImages">
				<li class="items-wrapper"><img id="1accessory" class="accessory product" src="images/items/accessory_1.png"/></li>
				<li class="items-wrapper"><img id="1jacket" class="jacket product" src="images/items/jacket_1.png"/></li>
				<li class="items-wrapper"><img id="1shirt" class="top product" src="images/items/shirt_1.png"/></li>
				<li class="items-wrapper"><img id="1skirt" class="skirt product" src="images/items/skirt_1.png"/></li>
				<li class="items-wrapper"><img id="1inner" class="top product" src="images/items/inner_1.png"/></li>

			</ul>
		</div>
		<div id="modelImages" class="itemBox">
			<ul class="itemIconsWrapper">
				<li>	
					<span class="itemIcon">
						<img id="natasha-1" src="images/model/model_face.png"/>
					</span>
					<span class="itemDescription">Natasha Little</span>
				</li>
			</ul>
			<ul  class="itemBoxImages">
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
				<!--<li>
					<span class="itemIcon"></span>
					<span class="itemDescription">Effect</span>
				</li>-->
				<li>
					<span class="itemIcon backgroundImage"></span>
					<span class="itemDescription">Background</span>
				</li>
			</ul>					
			<ul  class="itemBoxImages">
				<span class="unavailable">Currently unavailable</span>	
			</ul>
		</div>
	</div>
</div>
<div id="popup_overlay">
	<div id="transparentBackground">
	</div>
	<div id="modalbox">
		<form>
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
						<select id="categorySelect">
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
						<select class="style_select">
							<option>Active</option>
							<option>Basic</option>
							<option>Business Casual</option>
							<option>Bohemian</option>
							<option>Casual</option>
							<option>Classic</option>
							<option>Comfortable</option>
							<option>Celebrity</option>					<option>Cute</option>
							<option>Elegant</option>
							<option>Formal</option>
							<option>Goth</option>
							<option>Preppy</option>
							<option>Punk</option>
							<option>Runway</option>
							<option>Sexy</option>
							<option>Swimwear</option>
							<option>Vintage</option>
						</select>
						<select class="occassion_select">
							<option>Casual date</option>
							<option>Classy date</option>
							<option>Everyday</option>
							<option>Formal events</option>
							<option>Night out</option>
							<option>Outdoor activities</option>
							<option>Work</option>						
						</select>
						<select class="season_select">
							<option>Spring</option>
							<option>Mid-Spring</option>
							<option>Summer</option>
							<option>Fall</option>
							<option>Mid-Fall</option>
							<option>Winters</option>
						</select>
						<select class="weather_select">
							<option>Warm</option>
							<option>Freezing</option>
							<option>Cold</option>
							<option>Raining</option>
							<option>Hot</option>
							<option>Snowing</option>
							<option>Tropical</option>
						</select>
					</div>
				</div>
				<div class="description_box">
					<span>
						Description: <span class="optional"></span>
					</span>
					<textarea id="message" placeholder="400 words left"></textarea>
				</div>
				<div class="button_medium publish"><span>Publish</span></div>
				<div class="button_medium cancel"><span>Cancel</span></div>
			</div>
			<div class="popup-box createCollage">
				<div class="popup-box-header">
					<span>Create a collage for this style?</span>
				</div>
				<div class="button_large background-strong round_weak"><a class="noUnloadMessage sendInfo" href="collage.php">YES</a></div>
				<span>or</span>
				<div class="button_large background-weak round_weak"><a class="noUnloadMessage sendInfo"href="index.php">Maybe later</a></div>			
			</div>		
		</form>	
	</div>
</div>


<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>