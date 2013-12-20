<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title>Try On - ModiShow</title>
		<meta charset="UTF-8">
		<meta id="view" name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<link rel="stylesheet" href="css/main.css">
		<script type="text/javascript" src="javascript/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="javascript/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.ui.rotatable.min.js"></script>
		<script type="text/javascript" src="javascript/external.js"></script>


		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

			<link rel="stylesheet" type="text/css" href="includes/stylesheet_ie.css" />
		<![endif]-->
	</head>
	<body id="tryclothes" class="tryonPage background_white">
		<div id="header" class="background_themeColor">
			<div id="logo" class="space">
				<a href="index.php">
					<h1 id="logo_modi">Modi</h1>
					<h1 id="logo_show">Show</h1>
				</a>
			</div>
			<ul id="header_leftOptions">
				<li class="firstChild">
					<a href="feed.php"><h2>FEED</h2></a>
				</li>
				<li>
					<a  href="index.php"><h2>EXPLORE</h2> </a>
				</li>					
				<li>
					<a href="shopOverall.php"><h2>SHOP</h2></a>
					<ul class="submenu background_dark round_bottom">
						<li>
							<a href="shop.php">New Items</a>
						</li>
						<li class="underscore">
							<a href="shop.php">On Sale</a>
						</li>
						<li class="submenu_list list_clothing">
							<a class="submenu_second_parent" href="shop.php">
								Clothing
							</a>
							<div class="submenu_second">
								<ul>
									<li>
										<a href="shop.php">
											Dresses
										</a>
									</li>
									<li>
										<a href="shop.php">
											Skirts
										</a>
									</li>
									<li>
										<a href="shop.php">
											Tops
										</a>
									</li>
									<li>
										<a href="shop.php">
											Outwear
										</a>
									</li>
									<li>
										<a href="shop.php">
											Jeans
										</a>
									</li>
									<li>
										<a href="shop.php">
											Pants
										</a>
									</li>
								</ul>
								<ul>
									<li>
										<a href="shop.php">
											Shorts
										</a>
									</li>
									<li>
										<a href="shop.php">
											Jumpsuits &amp; Rompers
										</a>
									</li>
									<li>
										<a href="shop.php">
											Intimates
										</a>
									</li>
									<li>
										<a href="shop.php">
											Swimwear
										</a>
									</li>
									<li>
										<a href="shop.php">
											Activewear
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="submenu_list list_shoes">
							<a class="submenu_second_parent" href="shop.php">
								Shoes
							</a>
							<div class="submenu_second">
								<ul>
									<li>
										<a href="shop.php">
											Boots
										</a>
									</li>
									<li>
										<a href="shop.php">
											Clogs
										</a>
									</li>
									<li>
										<a href="shop.php">
											Flats
										</a>
									</li>
									<li>
										<a href="shop.php">
											Oxford
										</a>
									</li>
									<li>
										<a href="shop.php">
											Pumps
										</a>
									</li>
									<li>
										<a href="shop.php">
											Sandles
										</a>
									</li>
								</ul>
								<ul>
									<li>
										<a href="shop.php">
											Sneakers
										</a>
									</li>
									<li>
										<a href="shop.php">
											Moccasines
										</a>
									</li>
									<li>
										<a href="shop.php">
											Loafers &amp; Moccasins
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="submenu_list list_accessories">
							<a class="submenu_second_parent" href="shop.php">Accessories</a>
							<div class="submenu_second">
								<ul >
									<li>
										<a href="shop.php">
											Jewelry
										</a>
									</li>
									<li>
										<a href="shop.php">
											Bags
										</a>
									</li>
									<li>
										<a href="shop.php">
											Cases covers
										</a>
									</li>
									<li>
										<a href="shop.php">
											Belts
										</a>
									</li>
									<li>
										<a href="shop.php">
											Hats
										</a>
									</li>
									<li>
										<a href="shop.php">
											Sunglasses
										</a>
									</li>
								</ul>
								<ul>	
									<li>
										<a href="shop.php">
											Hair &amp; Beauty
										</a>
									</li>
									<li>
										<a href="shop.php">
											Scarves Ponchos
										</a>
									</li>
									<li>
										<a href="shop.php">
											Socks &amp; Legwear
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="submenu_list list_beauty">
							<a class="submenu_second_parent" href="shop.php">
								Beauty
							</a>
							<div class="submenu_second">
								<ul >
									<li>
										<a href="shop.php">
											Makeup
										</a>
									</li>
									<li>
										<a href="shop.php">
											Skincare
										</a>
									</li>
									<li>
										<a href="shop.php">
											Fragance
										</a>
									</li>
									<li>
										<a href="shop.php">
											Hair
										</a>
									</li>
									<li>
										<a href="shop.php">
											Nails
										</a>
									</li>
									<li>
										<a href="shop.php">
											Accessories
										</a>
									</li>	
								</ul>
								<ul>
									<li>
										<a href="shop.php">
											Bath &amp; Body
										</a>
									</li>	
									<li>
										<a href="shop.php">
											Sets &amp;Kits
										</a>
									</li>
								</ul>
							</div>							
						</li>
					</ul>
				</li>
				<li>
					<a class="tryon"  href="tryon.php">
						<ul>
							<li class="icon_clothes"></li>
							<li class="currentPage"><h2>TRY-ON</h2></li>
						</ul>
					</a>
				</li>
			</ul>
			<form id="searchBox">
				<input class="round_weak background_grey color_lightWhite" type="text" name="search_name" placeholder="Search..."/>
			</form>
			<ul id="header_rightOptions" class="space">
				<li class="lastChild">
					<a class="jumpToSignup pointer">
						Sign up / Log in
					</a>
				</li>	
			</ul>					
			<div id="notificationBox" class="round_weak background_grey color_lightWhite pointer">
					0
			</div>
		</div>
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
				<div class="submitPanel background_shadow opaque_weak round_medium">
					<ul>
						<li class="button_publish">Publish</li>
						<li class="button_clear ">Clear</li>
					</ul>
				</div>
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
								<div class="subHeader-list selectionBox background_white font_calistro">
									<span class="default">Choose your items</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
										<span class="icon_close">&#10006;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>
											<li>My likes</li>	
											<!--<li>My uploads</li>-->
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="iconWrapper">
									<span class="magnifier">
									</span>
								</div>
								<form>
									<input class="keyword" type="text" name="Keyword" placeholder="Search by keywords"/>
								</form>
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
								<div class="subHeader-list selectionBox background_white font_calistro">
									<span class="default">Choose categories</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
										<span class="icon_close">&#10006;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>
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
										</ul>
									</div>
								</div>
							</li>
							<li class="filterOrderWrapper">
								<div class="subHeader-list background_white font_calistro filterOrder filter">
									<span>Filter</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>			
											<li>
												Color
												<div class="submenu-second firstChild">	
													<form>
														<ul>
															<label><li><input type="checkbox" value="white"/> White</li> </label>
															<label><li><input type="checkbox" value="black"/> Black</li> </label>
															<label><li><input type="checkbox" value="grey"/> Grey</li></label>
															<label><li><input type="checkbox" value="brown"/> Brown</li> </label>
															<label><li><input type="checkbox" value="beige"/> Beige</li></label>
															<label><li><input type="checkbox" value="green"/> Green </li></label>
															<label><li><input type="checkbox" value="blue"/> Blue</li></label>
															<label><li ><input type="checkbox" value="purple"/> Purple</li></label>
															<label><li ><input type="checkbox" value="yellow"/> Yellow</li></label>
															<label><li><input type="checkbox" value="pink"/> Pink</li></label>
															<label><li><input type="checkbox" value="red"/> Red</li></label>
															<label><li ><input type="checkbox" value="orange"/> Orange</li></label>
															<label><li> <input type="checkbox" value="silver"/> Silver </li></label>
															<label><li><input type="checkbox" value="gold"/> Gold</li></label>
															<label><li ><input type="checkbox" value="others"/> Others</li></label>
														</ul>
													</form>											
												</div>									
											</li>
											<li>
												Pattern
												<div class="submenu-second">
													<form>
														<ul>
															<label><li><input type="checkbox" value="plain"/> Plain</li></label>
															<label><li><input type="checkbox" value="stripe"/> Stripe</li></label>
															<label><li><input type="checkbox" value="check"/> Check</li></label>
															<label><li><input type="checkbox" value="border"/> Border</li></label>
															<label><li><input type="checkbox" value="dot"/> Dot</li></label>
															<label><li><input type="checkbox" value="camouflage"/> Camouflage</li></label>							
															<label><li><input type="checkbox" value="embroidery"/> Embroidery, lace</li></label>
															<label><li><input type="checkbox" value="animal"/> Animal </li></label>
															<label><li><input type="checkbox" value="floral"/> Floral</li></label>
															<label><li><input type="checkbox" value="patterned"/> Patterned all over print</li></label>
															<label><li><input type="checkbox" value="print"/> Print(logos,etc.)</li></label>
															<label><li><input type="checkbox" value="onePoint"/> One point</li></label>
														</ul>
													</form>
												</div>
											</li>
											<li>
												Material
												<div class="submenu-second">
													<form>
														<ul>
															<label><li><input type="checkbox" value="chino"/> Chino</li></label>
															<label><li><input type="checkbox" value="cotton"/> Cotton</li></label>
															<label><li><input type="checkbox" value="corduroy"/> Corduroy</li></label>
															<label><li><input type="checkbox" value="wool"/> Wool series</li></label>
															<label><li><input type="checkbox" value="line"/> Line series</li></label>
															<label><li><input type="checkbox" value="nylon"/> Nylon series</li></label>
															<label><li><input type="checkbox" value="sweat"/> Sweat</li></label>
															<label><li><input type="checkbox" value="jersey"/> Jersey</li></label>
															<label><li><input type="checkbox" value="stretch"/> Stretch</li></label>
															<label><li><input type="checkbox" value="leather"/> Leather material</li></label>
														</ul>
													</form>
												</div>
											</li>
											<li>
												Price
												<div class="submenu-second">						
													<form>								
														<ul>
															<label><li><input type="radio"/>
																~ $50									
															</li></label>

															<label><li><input type="radio"/>
																$51~ $100
															</li></label>
															<label><li><input type="radio"/>
																$101 ~ $200
															</li></label>
															<label><li><input type="radio"/>
																$201~ $300
															</li></label>
															<label><li><input type="radio"/>
																$301~ $400
															</li></label>
															<label><li><input type="radio"/>
																$401~ $500
															</li></label>
															<label><li><input type="radio"/>
																$501~ $750
															</li></label>
															<label><li><input type="radio"/>
																$751~ $1,000
															</li></label>
															<label><li><input type="radio"/>
																$1001 ~
															</li></label>
														</ul>
													</form>
												</div>
											</li>
											<li>
												Brand
												<div class="submenu-second">			
													<form>							
														<ul>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>	
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
															<label><li><input type="checkbox" value=""/> ABCD</li></label>
														</ul>
													</form>
												</div>	
											</li>								
										</ul>				
									</div>
								</div>
							</li>	
							<li class="filterOrderWrapper">
								<div class="subHeader-list background_white font_calistro filterOrder order">
									<span class="default">Order</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>
											<li>
												Most Viewed	
												<div class="submenu-second firstChild">
													<ul>
														<li>All time</li>
														<li>Today</li>
														<li>This week</li>
														<li>This month</li>							
													</ul>							
												</div>
											</li>
											<li >
												Most Popular
												<div class="submenu-second">
													<ul>
														<li>All time</li>
														<li>Today</li>
														<li>This week</li>
														<li>This month</li>							
													</ul>							
												</div>							
											</li>
											<li class="lastChildList">
												Price
												<div class="submenu-second">
													<ul>
														<li>High to low</li>
														<li>Low to high</li>
													</ul>									
												</div>
											</li>								
										</ul>									
									</div>
								</div>
							</li>	
							<li>
								<div class="iconWrapper">
									<span class="magnifier">
									</span>
								</div>
								<form>
									<input class="keyword" type="text" name="Keyword" placeholder="Search by keywords"/>
								</form>
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
								<div class="subHeader-list selectionBox background_white font_calistro">
									<span class="default">Choose your model</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
										<span class="icon_close">&#10006;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>
											<li>Natasha</li>	
											<!--<li>My uploads</li>-->
										</ul>
									</div>
								</div>
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
							</li>
							<!--
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
							-->
							<li>
								<div class="iconWrapper">
									<span class="magnifier">
									</span>
								</div>
								<form>

									<input class="keyword" type="text" name="Keyword" placeholder="Search by keywords"/>
								</form>
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
								<div class="subHeader-list selectionBox background_white font_calistro">
									<span class="default">Choose categories</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
										<span class="icon_close">&#10006;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>
											<li>Text</li>
											<li>Frames & borders</li>
											<li>Effects</li>
											<li>Backgrounds</li>	
										</ul>
									</div>
								</div>
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
		<div id="registration_modalBox">
			<div id="transparentBackground">
			</div>
			<div id="signup_modalBox">
				<a class="closeBox modalbox-fixPosition round_weak background_gradientGrey">
					<span class="icon_close">&#10006;</span>
				</a>
				<div id="signup" class="setting">
					<form>
						<div class="setting-wrapper">
							<div class="sub-header">
								<span>Account Information</span>
							</div>
							<ul>
								<li>
									<span>Name: </span>
									<input id="name" type="text" name="name"/>
								</li>
								<li>
									<span>E-mail Address: </span>
									<input id="email" type="text" value="" placeholder="ex) modishow@gmail.com"/>
								</li>
								<li>
									<span>Password:</span>
									<input id="newPassword" type="password" placeholder="Enter your new password"/>
								</li>
								<li>
									<input id="verifiedPassword" type="password" placeholder="Re-type your new password"/>
								</li>
								<li>
									<span>Country:</span>
									<select id="country">
										<option value="0">Please select your country</option>
										<option value="Afganistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bonaire">Bonaire</option>
										<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Canary Islands">Canary Islands</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Channel Islands">Channel Islands</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos Island">Cocos Island</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote DIvoire">Cote D'Ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Curaco">Curacao</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Ter">French Southern Ter</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Great Britain">Great Britain</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Hawaii">Hawaii</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea North">Korea North</option>
										<option value="Korea Sout">Korea South</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Malawi">Malawi</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Midway Islands">Midway Islands</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Nambia">Nambia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherland Antilles">Netherland Antilles</option>
										<option value="Netherlands">Netherlands (Holland, Europe)</option>
										<option value="Nevis">Nevis</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau Island">Palau Island</option>
										<option value="Palestine">Palestine</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Phillipines">Philippines</option>
										<option value="Pitcairn Island">Pitcairn Island</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Republic of Montenegro">Republic of Montenegro</option>
										<option value="Republic of Serbia">Republic of Serbia</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="St Barthelemy">St Barthelemy</option>
										<option value="St Eustatius">St Eustatius</option>
										<option value="St Helena">St Helena</option>
										<option value="St Kitts-Nevis">St Kitts-Nevis</option>
										<option value="St Lucia">St Lucia</option>
										<option value="St Maarten">St Maarten</option>
										<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
										<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
										<option value="Saipan">Saipan</option>
										<option value="Samoa">Samoa</option>
										<option value="Samoa American">Samoa American</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syria">Syria</option>
										<option value="Tahiti">Tahiti</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Erimates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States of America">United States of America</option>
										<option value="Uraguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State">Vatican City State</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
										<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
										<option value="Wake Island">Wake Island</option>
										<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
										<option value="Yemen">Yemen</option>
										<option value="Zaire">Zaire</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
								</li>
								<li>
									<span>Gender:</span>
									<label>
										<input type="radio" name="sex" value="Unspecified"> Unspecified
									</label>
									<label>
										<input type="radio" name="sex" value="female"/> Female
									</label>
									<label>
										<input type="radio" name="sex" value="male"  checked="checked"/> Male
									</label>
								</li>
								<li class="lastChild">
									<span class="legalStatement">
										By creating an account, I accept ModiShow's <a href="terms.php">Terms of Service</a> and <a href="privacy.php">Privacy Policy</a>.
									</span>
								</li>
							</ul>
						</div>
						<div class="confirmation">
							<div class="login round_weak">
								<span>Log In</span>
							</div>
							<div class="cancel round_weak"/>
								<span>Cancel</span>
							</div>
							<div id="confirm" class="round_weak">
								<span>Confirm</span>
							</div>
						</div>
						<div class="popup-box moreInformatin">
							<div class="popup-box-header">
								<span class="firstChild">
									Could you tell us a little bit  about you?
								</span>
							</br>
								<span class="secondChild">
									You will be able to search for a specific outfit </br>
									 ex - "A cute outfit created by the people with my body size"
								</span>
							</div>
							<input id="moveToMoreInfo" type="submit" name="yes" value="Sure"/>
							<input id="backToThePage" type="submit" name="no" value="Maybe later"/>
						</div>
					</form>
				</div>
				<div id="login" class="setting">
					<form>
						<div class="setting-wrapper">
							<div class="sub-header ">
								<span>Log in</span>
							</div>
							<ul>
								<li>
									<span>E-mail Address: </span>
									<input id="loginEmail" type="text" value="" placeholder="ex) modishow@gmail.com"/>
								</li>
								<li class="lastChild">
									<span>Password:</span>
									<input id="loginPassword" type="password" placeholder="Enter your new password"/>
								</li>
								<div class="round_weak forgotPassword">
									<span class="pointer">Forgot your password?</a>
								</div>
							</ul>
						</div>
						<div class="confirmation">
							<div class="round_weak firstList">
								<span>Signup</span>
							</div>
							<div class="cancel round_weak">
								<span>Cancel</span>
							</div>
							<input id="loginConfirm" class="round_weak" type="submit" name="Login" value="Login"/>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</body>
</html>
<?php 
	if(isset($connection)){
		mysqli_close($connection);
	}
?>