<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title>Create Collage - ModiShow</title>
		<meta charset="UTF-8">
		<meta id="view" name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<link rel="stylesheet" href="css/main.css">
		<link href="css/smoothness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
		<script type="text/javascript" src="javascript/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="javascript/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="javascript/jquery.ui.rotatable.min.js"></script>
		<script type="text/javascript" src="javascript/external.js"></script>

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

			<link rel="stylesheet" type="text/css" href="includes/stylesheet_ie.css" />
		<![endif]-->
	</head>
	<body id="collage" class="tryonPage background_white">
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
					<a href="userPage.php">
						<img class="round_circle" src="images/user/userPhoto.gif" />
						<h2>masanorinyo1243</h2>		
						<span class="downArrow spriteImage opaque_strong"></span>
					</a>
					<ul class="userProfile_list submenu background_dark round_bottom">
						<li><a href="userPage.php">Profile</a></li>
						<li><a href="userPage.php">Creations</a></li>
						<li><a href="userPage.php">Likes</a></li>
						<li><a href="userPage.php">Followings</a></li>
						<li><a href="userPage.php">Followers</a></li><li class="underscore"><a href="userPage.php">Message</a></li>
						<li><a href="setting.php">Setting</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</li>
			</ul>					
			<div id="notificationBox" class="round_weak background_grey color_lightWhite pointer">
					0
			</div>
		</div>
		<div id="tryonContent" class="tryon-collage fullWidth">
			<div id="creationCanvas" class="floatLeft">
				<div class="background_grid fullWidth">
					<ul id="outfitItems" class="draggable">
						
					</ul>
					<div class="submitPanel background_shadow opaque_weak round_medium">
						<ul>
							<li class="button_publish">Publish</li>
							<li class="button_clear ">Clear</li>
						</ul>
					</div>
				</div>
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
								<div class="subHeader-list selectionBox background_white font_calistro">
									<span class="default">Choose your items</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
										<span class="icon_close">&#10006;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>
											<li>Inner</li>	
											<li>Inner</li>
											<li>Jacket</li>
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
					<div id="beautyList">
						<ul class="controlBoxes fullWidth">
							<li class="firstChild">
								<div class="iconWrapper">
									<span class="magnifier">
									</span>
								</div>
								<form>
									<input class="keyword" type="text" name="Keyword" placeholder="Search by keywords"/>
								</form>
							</li>	
							<li class="filterOrderWrapper">
								<div class="subHeader-list filterOrder order background_white font_calistro">
									<span class="default">Order</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>
											<li>
												Most Used	
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
								<div class="iconWrapper">
									<span class="magnifier">
									</span>
								</div>
								<form>
									<input class="keyword" type="text" name="Keyword" placeholder="Search by keywords"/>
								</form>
							</li>
							<li class="filterOrderWrapper">
								<div class="subHeader-list filterOrder order background_white font_calistro">
									<span class="default">Order</span>
									<div class="iconWrapper">
										<span class="filledDownArrow">&#9660;</span>
									</div>
									<div class="subHeader-submenu">
										<ul>
											<li>
												Most used	
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
											<li>Colors</li>	
											<li>Backgrounds</li>
											<li>Articles</li>
											<li>Patterns</li>
											<li>Others</li>
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
							<img id="accessory-1" src="images/productItems/accessory_1.png"/>
						</li>
						<li class="items-wrapper">
							<img id="item3" src="images/productItems/item3.png"/>
						</li>
						<li class="items-wrapper">
							<img id="item1" src="images/productItems/item1.png"/>
						</li>
						<li class="items-wrapper">
							<img id="inner-1" src="images/productItems/inner_1.png"/>
						</li>
						<li class="items-wrapper">
							<img id="skirt-1" src="images/productItems/skirt_1.png"/>
						</li>
						<li class="items-wrapper">
							<img id="skirt-2" src="images/productItems/skirt_2.png"/>
						</li>
						<li class="items-wrapper">
							<img id="dress-1" src="images/productItems/dress_1.png"/>
						</li>
						<li class="items-wrapper">
							<img id="top-2" src="images/productItems/top_2.png"/>
						</li>
						<li class="items-wrapper">
							<img id="shirt-1" src="images/productItems/shirt_1.png"/>
						</li>
						<li class="items-wrapper">
							<img id="top-3" src="images/productItems/top_3.png"/>
						</li>
						<li class="items-wrapper">
							<img id="top-4" src="images/productItems/top_4.png"/>
						</li>
						<li class="items-wrapper">
							<img id="top-5" src="images/productItems/top_5.png"/>
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
					<a class="noUnloadMessage" href="index.php"><div class="button_medium publish">Publish</div></a>
					<div class="button_medium cancel"><span>Cancel</span></div>
					<span class="label">Share with friends</span> <!--Currently not working-->
					<div class="button_medium sns_facebook sns"><span>Facebook</span></div>
					<div class="button_medium sns_twitter sns"><span>Twitter</span></div>
					<div class="button_medium sns_pinterest sns"><span>Pinterest</span></div>
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