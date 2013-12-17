<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title>UserPage - ModiShow</title>
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
	<body id="userPage">	
		<div id="header" class="background_themeColor">
			<div class="inner background_themeColor center">
				<div class="inner-inside center" >
					<div id="logo">
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
							<a href="index.php"><h2>EXPLORE</h2> </a>
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
							<a class="tryon" href="tryon.php">
								<ul>
									<li class="icon_clothes"></li>
									<li><h2>TRY-ON</h2></li>
								</ul>
							</a>
						</li>
					</ul>
					<form id="searchBox">
						<input class="round_weak background_grey color_lightWhite" type="text" name="search_name" placeholder="Search..."/>
					</form>
					<ul id="header_rightOptions">
						<li class="lastChild">
							<a class="currentPage" href="userPage.php">
								<img class="round_circle" src="images/user/userPhoto.gif" />
								<h2>masanorinyo1243</h2>		
								<span class="downArrow opaque_strong"></span>
							</a>
							<ul class="userProfile_list submenu background_dark round_bottom">
								<li><a href="userPage.php">Profile</a></li>
								<li><a href="userPage.php">Creations</a></li>
								<li><a href="userPage.php">Likes</a></li>
								<li><a href="userPage.php">Followings</a></li>
								<li><a href="userPage.php">Followers</a></li>
								<li class="underscore"><a href="userPage.php">Message</a></li>
								<li><a href="setting.php">Setting</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>					
					<div id="notificationBox" class="round_weak background_grey color_lightWhite pointer">
							0
					</div>
				</div>
			</div>
		</div>
		<div class="content round_weak">
			<a id="scrollToTop" class="backToTop modalbox-fixPosition round_circle background_shadow opaque_strong" href="#header"><span class="upwardArrow"></span></a>
			<span id="about" class="button_about modalbox-fixPosition round_circle background_shadow opaque_strong">i</span>
			<div class="top">
				<div class="leftSide round_medium">
					<div class="userProfile">
						<div>
							<img class="round_circle" src="images/user/userPhoto.gif"/>
							<div class="round_weak">
								<span>Change Picture</span>
							</div>
						</div>
					</div>
					<div class="rightSide">
						<div class="userInformation">
							<ul>
								<li class="userName">
									Masanori Sen
								</li>
								<li class="location">
									<span class="location_icon">
										
									</span>
									U.S.
								</li>
								<li class="joinDate">
									- Joined 10 days ago
								</li>
							</ul>
							<span id="editProfileInfo" class="editIcon opaque_strong pointer"></span>
						</div>
						
						<div class="introduction clear">
							<p class="expandable">
								“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.” - Alexander 
								“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.” - Alexander 
								“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.“I think there is beauty in everything. What ‘normal’ people would perceive as ugly, I can usually see something of beauty in it.” - Alexander 

							</p>
							<span class="moreText pointer">Show More</span>
						</div>
						<div class="right-bottom">
							<ul>
								<li class="twitter">
									<a href="#">
										<img src="images/twitter.png" style="width:20px"/>
									</a>
								</li>
								<li class="facebook">
									<a href="#">
										<img src="images/facebook.png" style="width:20px; margin:0 5px;" />
									</a>
								</li>
								<li class="url"><a href-"#">- modishow.com</a></li>
							</ul>
						</div>
						<div class="lastChild">
							<ul class="leftSide">
								<li class="follow round_medium">Follow</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="rightSide round_medium">
					<ul class="award">
						<li>
							<span class="award_icon"></span>
							<span class="middle"> Most viewed in this week </span>							
						</li>
						<li class="hidden">
							<span class="award_icon"></span>
							<span class="middle"> Most viewed in this week </span>
						</li>
						<li class="hidden">
							<span class="award_icon"></span>
							<span class="middle"> Most viewed in this week </span>
						</li>
						<li class="hidden">
							<span class="award_icon"></span>
							<span class="middle"> Most viewed in this week </span>
						</li>
						<li class="hidden">
							<span class="award_icon"></span>
							<span class="middle"> Most viewed in this week </span>
						</li>
						<li class="hidden">
							<span class="award_icon"></span>
							<span class="middle"> Most viewed in this week </span>
						</li>
						<li class="hidden">
							<span class="award_icon"></span>
							<span class="middle"> Most viewed in this week </span>
						</li>
					</ul>
					<span class="moreAward pointer">Show More</span>
					<ul class="dashboard">
						<li>
							<div>
								<span class="view_icon"></span> 
								<span class="dashboard-number">1300
								</span>
								<span class="lastChild"> View
								</span>
							</div>
						</li>
						<li>
							<div>
								<span class="heart_empty "></span> 
								<span class="dashboard-number">2000</span>
								<span class="lastChild" > Likes </span>
							</div>
						</li>
						<li>
							<div>
								<span class="comment_icon"></span>
								<span class="dashboard-number">9</span>
								<span class="lastChild"> Discuss
								</span>
							</div>
						</li>
						<li>
							<div>
								<span class="follow_icon"></span>
								<span class="dashboard-number">9</span>
								<span class="lastChild"> Followings
								</span>
							</div>
						</li>
						<li>
							<div>
								<span class="follow_icon"></span>
								<span class="dashboard-number">9</span>
								<span class="lastChild">
									Followers
								</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="bottom round_medium">
				<div class="subHeader">
					<ul>
						<li id="all">	
							<span class="blue-color">All</span>
						</li>
						<li id="creation">
							<span class="number">11111 </span>
							<span>Creations</span>
						</li>
						<li id="likes">
							<span class="number">11111 </span>
							<span>My Likes</span>
						</li>
						<li id="following">
							<span class="number">11111</span>
							<span>followings</span>
						</li>
						<li id="follower">
							<span class="number">11111 </span>
							<span>followers</span>
						</li>
						<li id="comment">
							<span>Message</span>
						</li>
					</ul>
				</div>
				<div class="inside">
					<span class="hidden">No Items</span>
					<div class="overall">
						<div id="feed_content">
							<div class="clear left">
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#">
												<img class="singleItemImage" src="images/productItems/item1.png"/>
											</a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="large_boxes">
									<div class="button_heart">
										<span class="heart_empty"><span>40</span></span>
										<span class="heart_filled"><span>40</span></span>						
									</div>
									<div class="button_flip">
										<span class="icon_flip_grey"></span>	
										<span class="icon_flip_dark"></span>							
									</div>
									<div class="collageBox openModal">
										<a class="collageBox-inside" href="#">
											<img src="images/style/outfit2.png">
										</a>
									</div>
									<div class="modelBox openModal">
										<a href="#">
											<img class="modelPic" src="images/style/model1.png"/>
										</a>
									</div>
									<div class="peopleBox openModal">
										<a href="#">
										</a>
									</div>
									<div class="descriptionBox_wrapper">
										<div class="descriptionBox">			
											<div class="styleTitle">
												<span class="openModal"> Beauty of Simplicity</span>
											</div>
											<div class="styleInfo">
												<a class="artist_name" href="userPage.php">
													By 
													<span>
														Kaori Kuniyoshi 
													</span>
												</a>
												<a class="styleCategory" href="#">
													Category
													<span>
													 - Sexy
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clear right">
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#">
												<img class="singleItemImage" src="images/productItems/item1.png"/>
											</a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="large_boxes">
									<div class="button_heart">
										<span class="heart_empty"><span>40</span></span>
										<span class="heart_filled"><span>40</span></span>						
									</div>
									<div class="button_flip">
										<span class="icon_flip_grey"></span>	
										<span class="icon_flip_dark"></span>							
									</div>
									<div class="collageBox openModal">
										<a class="collageBox-inside" href="#">
											<img src="images/style/outfit2.png">
										</a>
									</div>
									<div class="modelBox openModal">
										<a href="#">
											<img class="modelPic" src="images/style/model1.png"/>
										</a>
									</div>
									<div class="peopleBox openModal">
										<a href="#">
										</a>
									</div>
									<div class="descriptionBox_wrapper">
										<div class="descriptionBox">			
											<div class="styleTitle">
												<span class="openModal"> Beauty of Simplicity</span>
											</div>
											<div class="styleInfo">
												<a class="artist_name" href="userPage.php">
													By 
													<span>
														Kaori Kuniyoshi 
													</span>
												</a>
												<a class="styleCategory" href="#">
													Category
													<span>
													 - Sexy
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clear left">
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="clear right">
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="large_boxes">
									<div class="button_heart">
										<span class="heart_empty"><span>40</span></span>
										<span class="heart_filled"><span>40</span></span>						
									</div>
									<div class="button_flip">
										<span class="icon_flip_grey"></span>	
										<span class="icon_flip_dark"></span>							
									</div>
									<div class="collageBox openModal">
										<a class="collageBox-inside" href="#">
											<img src="images/style/outfit2.png">
										</a>
									</div>
									<div class="modelBox openModal">
										<a herf="#">
											<img class="modelPic" src="images/style/model1.png"/>
										</a>
									</div>
									<div class="peopleBox openModal">
										<a href="#">
										</a>
									</div>
									<div class="descriptionBox_wrapper">
										<div class="descriptionBox">			
											<div class="styleTitle">
												<span class="openModal"> Beauty of Simplicity</span>
											</div>
											<div class="styleInfo">
												<a class="artist_name" href="userPage.php">
													By 
													<span>
														Kaori Kuniyoshi 
													</span>
												</a>
												<a class="styleCategory" href="#">
													Category
													<span>
													 - Sexy
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="large_boxes">
									<div class="button_heart">
										<span class="heart_empty"><span>40</span></span>
										<span class="heart_filled"><span>40</span></span>						
									</div>
									<div class="button_flip">
										<span class="icon_flip_grey"></span>	
										<span class="icon_flip_dark"></span>							
									</div>
									<div class="collageBox openModal">
										<a class="collageBox-inside" href="#">
											<img src="images/style/outfit2.png">
										</a>
									</div>
									<div class="modelBox openModal">
										<a href="#">
											<img class="modelPic" src="images/style/model1.png"/>
										</a>
									</div>
									<div class="peopleBox openModal">
										<a href="#">
										</a>
									</div>
									<div class="descriptionBox_wrapper">
										<div class="descriptionBox">			
											<div class="styleTitle">
												<span class="openModal"> Beauty of Simplicity</span>
											</div>
											<div class="styleInfo">
												<a class="artist_name" href="userPage.php">
													By 
													<span>
														Kaori Kuniyoshi 
													</span>
												</a>
												<a class="styleCategory" href="#">
													Category
													<span>
													 - Sexy
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clear left">
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="clear right">
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="creation content_stream">
						<ul>
							<li class="content_small firstChild">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#"> <!--Use PHP-->
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#">
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#">
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small firstChild">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#"> <!--Use PHP-->
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#">
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#">
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small firstChild">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#"> <!--Use PHP-->
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#">
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#">
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small firstChild">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#"> <!--Use PHP-->
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#">
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li class="content_small">
								<div class="button_heart">
									<span class="heart_empty">
										<span>40000</span>
									</span>
									<span class="heart_filled">
										<span>40000</span>
									</span>			
								</div>
								<div class="button_flip">
									<span class="icon_flip_grey"></span>	
									<span class="icon_flip_dark"></span>				
								</div>
								<div class="collageBox openModal">
									<a href="#">
										<div class="collageBox-inside">
											<img src="images/style/outfit1.png"/>
										</div>
									</a>
								</div>
								<div class="modelBox openModal">
									<a href="#">
										<img src="images/style/model1.png"/>
									</a>
								</div>
								<div class="peopleBox openModal">
									<a href="#">
									</a>
								</div>
								<div class="descriptionBox_wrapper">
									<div class="descriptionBox">
										<div class="styleTitle ">
											<span class="openModal"> 	<a href="#">
													Beauty of Simplicity
												</a>
											</span>
										</div>
										<div class="styleInfo">
											<a class="artist_name" href="userPage.php">
												By 
												<span>
														Kaori Kuniyoshi 
												</span>
											</a>
											<a class="styleCategory" href="#">
												Category
												<span>
												 - Sexy
												</span>
											</a>
										</div>
									</div>
								</div>
							</li>
						</ul>	
					</div>
					<div class="likes">
						<div id="feed_content">
							<div class="clear left">
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="clear right">
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="large_boxes">
									<div class="button_heart">
										<span class="heart_empty"><span>40</span></span>
										<span class="heart_filled"><span>40</span></span>						
									</div>
									<div class="button_flip">
										<span class="icon_flip_grey"></span>	
										<span class="icon_flip_dark"></span>							
									</div>
									<div class="collageBox openModal">
										<a class="collageBox-inside" href="#">
											<img src="images/style/outfit2.png">
										</a>
									</div>
									<div class="modelBox openModal">
										<a href="#">
											<img class="modelPic" src="images/style/model1.png"/>
										</a>
									</div>
									<div class="peopleBox openModal">
										<a href="#">
										</a>
									</div>
									<div class="descriptionBox_wrapper">
										<div class="descriptionBox">			
											<div class="styleTitle">
												<span class="openModal"> Beauty of Simplicity</span>
											</div>
											<div class="styleInfo">
												<a class="artist_name" href="userPage.php">
													By 
													<span>
														Kaori Kuniyoshi 
													</span>
												</a>
												<a class="styleCategory" href="#">
													Category
													<span>
													 - Sexy
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="large_boxes">
									<div class="button_heart">
										<span class="heart_empty"><span>40</span></span>
										<span class="heart_filled"><span>40</span></span>						
									</div>
									<div class="button_flip">
										<span class="icon_flip_grey"></span>	
										<span class="icon_flip_dark"></span>							
									</div>
									<div class="collageBox openModal">
										<a class="collageBox-inside" href="#">
											<img src="images/style/outfit2.png">
										</a>
									</div>
									<div class="modelBox openModal">
										<a href="#">
											<img class="modelPic" src="images/style/model1.png"/>
										</a>
									</div>
									<div class="peopleBox openModal">
										<a href="#">
										</a>
									</div>
									<div class="descriptionBox_wrapper">
										<div class="descriptionBox">			
											<div class="styleTitle">
												<span class="openModal"> Beauty of Simplicity</span>
											</div>
											<div class="styleInfo">
												<a class="artist_name" href="userPage.php">
													By 
													<span>
														Kaori Kuniyoshi 
													</span>
												</a>
												<a class="styleCategory" href="#">
													Category
													<span>
													 - Sexy
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clear left">
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="medium_boxes">	
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="openModal" src="images/style/outfit1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="clear right">
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="small_boxes">
									<ul>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
										<li>
											<div class="button_heart">
												<span class="heart_empty"><span>40</span></span>
												<span class="heart_filled"><span>40</span></span>		
											</div>
											<a href="#"><img class="singleItemImage" src="images/productItems/item1.png"/></a>
											<span>Liked by
												<a class="user" href="userPage.php">Natasha
												</a>
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="follower follow">
						<div>
							<div class="leftSide">
								<ul>
									<li class="firstChild">
										<a class="userName" href="userPage.php">
											Sara cook
										</a>
									</li>
									<li class="lastChild">
										<img src="images/user/userPhoto.gif"/>
									</li>
									<li class="hidden pointer opaque_weak">
										<span class="follow">
											Follow
										</span>
									</li>
								</ul>
							</div>
							<div class="rightSide">
								<span class="leftArrow_mainSlideshow"></span>
								<span class="rightArrow_mainSlideshow"></span>
								<ul>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
								</ul>
							</div>
						</div>
						<div>
							<div class="leftSide">
								<ul>
									<li class="firstChild">
										<a class="userName" href="userPage.php">
											Sara cook
										</a>
									</li>
									<li class="lastChild">
										<img src="images/user/userPhoto.gif"/>
									</li>
									<li class="hidden pointer opaque_weak">
										<span class="follow">
											Follow
										</span>
									</li>
								</ul>
							</div>
							<div class="rightSide">
								<span class="leftArrow_mainSlideshow"></span>
								<span class="rightArrow_mainSlideshow"></span>
								<ul>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="following follow">
						<div>
							<div class="leftSide">
								<ul>
									<li class="firstChild">
										<a class="userName" href="userPage.php">
											Sara cook
										</a>
									</li>
									<li class="lastChild">
										<img src="images/user/userPhoto.gif"/>
									</li>
									<li class="hidden pointer opaque_weak">
										<span class="unfollow">
											Unfollow
										</span>
									</li>
								</ul>
							</div>
							<div class="rightSide">
								<span class="leftArrow_mainSlideshow"></span>
								<span class="rightArrow_mainSlideshow"></span>
								<ul>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
								</ul>
							</div>
						</div>
						<div>
							<div class="leftSide">
								<ul>
									<li class="firstChild">
										<a class="userName" href="userPage.php">
											Sara cook
										</a>
									</li>
									<li class="lastChild">
										<img src="images/user/userPhoto.gif"/>
									</li>
									<li class="hidden pointer opaque_weak">
										<span class="unfollow">
											Unfollow
										</span>
									</li>
								</ul>
							</div>
							<div class="rightSide">
								<span class="leftArrow_mainSlideshow"></span>
								<span class="rightArrow_mainSlideshow"></span>
								<ul>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
									<li class="openModal">
										<img src="images/style/outfit1.png"/>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="comment">
						<div class="round_weak">
							<div class="comment-messageBox">
								<img src="images/user/userPhoto.gif"/>
								<form>
									<textarea id="message"></textarea>
									<input type="button" value="Post"/>
								</form>
							</div>
							<div class="comment-others">
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>
									<ul>
										<li>
											<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  
											<span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board"> Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best IdeaBest Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best IdeaBest Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best IdeaBest Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea
									</div>
								</div>
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>	
									<ul>
										<li>
											<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board">Best Idea
									</div>
								</div>
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>	
									<ul>
										<li>
											<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board">Best Idea
									</div>
								</div>
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>
									<ul>
										<li>
											<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board">Best Idea
									</div>
								</div>
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>
									<ul>
										<li>
											<a class="color_lightBlue"  href="#">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board">Best Idea
									</div>
								</div>
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>
									<ul>
										<li>
											<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board">Best Idea
									</div>
								</div>
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>
									<ul>
										<li>
											<a class="color_lightBlue" href="userPage.php">Sara Cook</a> <span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board">Best Idea
									</div>
								</div>
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>
									<ul>
										<li>
											<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board">Best Idea
									</div>
								</div>
								<div class="others-commentWrapper">
									<a href="#">
										<img src="images/user/userPhoto.gif"/>
									</a>
									<ul>
										<li>
											<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
										</li>
									</ul>
									<div class="message_board">Best Idea
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>	
			<div id="subFooter" class="clear"><span>Loading...</span></div>
		</div>
		<div id="popup_overlay">
			<div id="transparentBackground">
			</div>
			<div id="modalbox">
				<a class="closeBox modalbox-fixPosition round_weak background_gradientGrey">
					<span class="icon_close">&#10006;</span>
				</a>
				<div  id="popup">
					<div class="popup-mainContainer round_weak preventClose_modalBox background_white">
						<div id="mainContainer_header">
							<div class="button_tryon_medium background_gradientDarkBlue round_medium pointer  ">
								<a href="tryon.php">
									<ul>
										<li class="basicWebLayout icon_clothes"></li>
										<li>TRY ON</li>
									</ul>
								</a>	
							</div>
							<div class="button_heart_medium background_gradientGrey round_medium pointer">
								<div class="mediumButton-leftside">
									<span class="heart_filled"></span>
									<span class="heart_empty"></span>
								</div>
								<div class="mediumButton-rightside">
									<span>
										2000
									</span>
								</div>
							</div>
						</div>
						<div id="mainContainer_content">
							<div class="content-top">
								<div class="button_rectanglar center round-little">
									<div class="rectanglar-left">Collage</div>
									<div class="rectanglar-medium">Model</div>
									<div class="rectanglar-right">People</div>
								</div>
							</div>
							<div class="content-middle">
								<div>
									<img class="content_collage" src="images/style/large_collage.png" />
									<img class="content_model" src="images/style/model2.gif"/>
									<img class="content_people" src="images/style/people1.gif"/>			
								</div>
							</div>	
							<div class="content-bottom">
								<div class="content_description-bottom">
									<span>Other styles created by 
										<a class="username color_lightBlue" href="userPage.php">
											Sara Cook
										</a>
									</span>
								</div>
								
								<div class="content-bottom_slider">
									<ul class="slider-middle">
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>							
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>					
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>					
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>					
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>					
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>					
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>					
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>					
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>					
										</li>
										<li>
											<a href="#"><img src="images/style/outfit1.png"/></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="popup-side-top round_weak preventClose_modalBox background_white">
						<div class="profileBox fullWidth">
							<div class="profile_image">
								<a href="userPage.php"><img class="round_circle" src="images/user/userPhoto.gif"/></a>
							</div>
							<div class="profile_name">
								<a class="username" href="#">Sara Cook</a>
								<div class="timeStamp">Created 8 weeks ago</div>	
								<div class="followLink"><span class="color_lightBlue pointer">Follow</span></div>				
							</div>				
						</div>	
						<div class="titleBox">
							<div class="title">"<span>Love simple stuff</span>"</div>
							<div class="description">
								<p>I usually wear simple stuff. I am a minimalistic person. Call me a mini bucket.
															I usually wear simple stuff. I am a minimalistic person. Call me a mini bucket.

								I usually wear simple stuff. I am a minimalistic person. Call me a mini bucket.

								I usually wear simple stuff. I am a minimalistic person. Call me a mini bucket.

								I usually wear simple stuff. I am a minimalistic person. Call me a mini bucket.

								I usually wear simple stuff. I am a minimalistic person. Call me a mini bucket.</p>

								

							</div>
							<span class="category_name">
								<label>Category - 
									<a class="category" href="#"> Sexy
									</a>
								</label> 
							</span>
							<div class="clear"></div>
						</div>
						
						<ul class="dashboard">
							<li class="dashboard-view">
								<div>
									<span class="view_icon"></span> 
									<span class="dashboard-number">1300</span>
								</div>
							</li>
							<li class="dashboard-comment">
								<div>
									<span class="comment_icon"></span>
									<span class="dashboard-number">9</span>
								</div>
							</li>
							<li class="dashboard-likes">
								<div>
									<span class="heart_empty"></span> 
									<span class="dashboard-number">2000</span>
								</div>
							</li>
						<!--<li class="numberOfPutIntoMagazines></li>-->
						</ul>	
					</div>
					<div class="popup-side_middle round_weak preventClose_modalBox background_white">
						<div>
							<span class="side_middle-description">Liked by these people</span>
						</div>
						<ul class="side_middle-users round_little">
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
							<li>
								<a href="userPage.php"><img class="otherUsers" src="images/user/userPhoto.gif"/></a>
							</li>
						</ul>
					</div>
					<div class="popup-side_bottom round_weak preventClose_modalBox background_white">
						<div class="side_bottom-TotalCost">
							<span class="round_weak">Total Cost : 
								<a href="#" target="_"> 
									$1168.55
									<div class="round_medium">If you click it, you will be guided to all the stores</div>
								</a>
							</span>
						</div>				
						<div class="side_bottom-itemDetails">
							<ul>
								<li>
									<div class="itemDetails-image">	
										<a href="#">
											<img src="images/productItems/item1.png"/>
										</a>

									</div>
									<div class="itemDetails-description">
										<div class="price">
										$169
										</div>
										<span class="description">
											<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
										</span>
										<span class="brand">
											<a href="#">topshop.com</a>
										</span>
										<div class="itemDetails-heart">
											<span class="heart_empty">
												<span>1000</span>
											</span>
											<span class="heart_filled">
												<span>1001</span>
											</span>
										</div>
										
									</div>
								</li>
								<li>
									<div class="itemDetails-image">	
										<a href="#">
											<img src="images/productItems/item1.png"/>
										</a>
									</div>
									<div class="itemDetails-description">
										<div class="price">
										$169
										</div>
										<span class="description">
											<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
										</span>
										<span class="brand">
											<a href="#">topshop.com</a>
										</span>
										<div class="itemDetails-heart">
											<span class="heart_empty">
												<span>1000</span>
											</span>
											<span class="heart_filled">
												<span>1001</span>
											</span>
										</div>
										
									</div>
								</li>
								<li>
									<div class="itemDetails-image">	
										<a href="#">
											<img src="images/productItems/item1.png"/>
										</a>
									</div>
									<div class="itemDetails-description">
										<div class="price">
										$169
										</div>
										<span class="description">
											<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
										</span>
										<span class="brand">
											<a href="#">topshop.com</a>
										</span>
										<div class="itemDetails-heart">
											<span class="heart_empty">
												<span>1000</span>
											</span>
											<span class="heart_filled">
												<span>1001</span>
											</span>
										</div>
										
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="popup-comment round_weak preventClose_modalBox background_white">
						<div class="comment-messageBox">
							<img src="images/user/userPhoto.gif"/>
							<form>
								<textarea ></textarea>
								<input type="button" value="Post"/>
							</form>
						</div>
						<div class="comment-number fullWidth">
							<hr/>
							<div>
								<div class="numOfComments font_calistro italic strong background_white">9 Comments</div>
							</div>
						</div>
						<div class="comment-others">
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>
								<ul>
									<li>
										<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  
										<span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board"> Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best IdeaBest Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best IdeaBest Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best IdeaBest Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea Best Idea
								</div>
							</div>
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>	
								<ul>
									<li>
										<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board">Best Idea
								</div>
							</div>
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>	
								<ul>
									<li>
										<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board">Best Idea
								</div>
							</div>
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>
								<ul>
									<li>
										<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board">Best Idea
								</div>
							</div>
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>
								<ul>
									<li>
										<a class="color_lightBlue"  href="#">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board">Best Idea
								</div>
							</div>
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>
								<ul>
									<li>
										<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board">Best Idea
								</div>
							</div>
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>
								<ul>
									<li>
										<a class="color_lightBlue" href="userPage.php">Sara Cook</a> <span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board">Best Idea
								</div>
							</div>
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>
								<ul>
									<li>
										<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board">Best Idea
								</div>
							</div>
							<div class="others-commentWrapper">
								<a href="userPage.php">
									<img src="images/user/userPhoto.gif"/>
								</a>
								<ul>
									<li>
										<a class="color_lightBlue" href="userPage.php">Sara Cook</a>  <span class="timeStamp"> - 5 weeks ago</span>
									</li>
								</ul>
								<div class="message_board">Best Idea
								</div>
							</div>
						</div>
					</div>
					<div class="bottom clear"></div>
				</div>
			</div>
		</div>	
		<div id="quickView" class="shop">
			<div id="transparentBackground">
			</div>
			<div id="modalbox-quick">
				<div class="popup-box">
					<div class="subHeader">
						<div class="button_heart-item   pointer">
							<div class="mediumButton-leftside">
								<span class="heart_filled"></span>
								<span class="heart_empty"></span>
							</div>
							<div class="mediumButton-rightside">
								<span>
									2000
								</span>
							</div>
						</div>
						<div class="button-tryon">
							<a href="tryon.php">
								<span class="icon_tryon"></span>
								<span class="right">Try On</span>
							</a>
						</div>
						<span class="icon_close opaque_strong"></span>
					</div>
					<div class="leftSideBox">
						<div class="itemBox">
							<span class="picFrame"></span>
							<div class="picFrame-inside">
								<img src="images/productItems/item3.png"/>
							</div>
						</div>
						<div class="itemBox-related">
							<div class="sideScroll_wrapper">
								<ul class="horizontalScroll">
									<li><img src="images/productItems/item1.png"/></li>
									<li><img src="images/productItems/item1.png"/></li>
									<li><img src="images/productItems/item1.png"/></li>
									<li><img src="images/productItems/item1.png"/></li>
									<li><img src="images/productItems/item1.png"/></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="rightSideBox">
						<div class="itemDetails-description">
							<div class="description">
								<a href="item.php" class="title">
									Mass test mass test mass test mass test mass
								</a> 
								<div class="url clear">
									<span class="price">
										$169
									</span>
									<a href="#">- topshop.com</a>
								</div>
								<a href="#" class="clear">
									<div class="buy">
										<span>Shop at Topshop.com</span>
									</div>
								</a>
								<div class="itemDetails-tabs clear">
									<hr/>
									<ul>
										<li class="first">
											<span id="current">Description</span>
											<div>
												<p>
													Black crema brewed steamed qui skinny, java dripper, body latte espresso, aroma pumpkin spice espresso affogato, rich viennese grinder kopi-luwak cream. Decaffeinated caramelization aged, caramelization, extraction blue mountain mocha, organic and cultivar percolator ut, medium saucer strong cultivar white single shot single origin. Black, dripper dark, skinny cortado caramelization, decaffeinated, and filter viennese mug eu percolator blue mountain milk and at instant. Percolator saucer, sugar, trifecta caramelization cappuccino kopi-luwak, caramelization, grinder steamed skinny shop cup whipped extraction strong ristretto.
													cortado caramelization, decaffeinated, and filter viennese mug eu percolator blue mountain milk and at instant. Percolator saucer, sugar, trifecta caramelization cappuccino kopi-luwak, caramelization, grinder steamed skinny shop cup whipped extraction strong ristretto.
												</p>
											</div>
										</li>
										<li class="second">
											<span>Size</span>
											<div>
												<ul>
													<li>X-small</li>
													<li>Small</li>
													<li>Medium</li>
													<li>Large</li>
												</ul>
											</div>					
										</li>
										<li class="third">
											<span>Material</span>
											<div>
												<p>
													Woven plaid maxi top with button front opening. Two hip pockets
													*By CP Shades
													*100% Woven Cotton
													*Machine Wash Cold
													*Made in USA
												</P>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>	
		<div id="changePic">
			<div id="transparentBackground">
			</div>
			<div id="modalbox-changePic">
				<div class="popup-box changePic">
					<span class="icon_close opaque_strong"></span>
					<div class="popup-box-header">
						<span>Change your picture</span>
					</div>
					<div class="inside">
						<form action="upload_file.php" method="post" enctype="multipart/form-data" class="round_medium">
							<input type="file" name="file" id="profile_picture" class="upload-button">
						</form>
					</div>
				</div>
			</div>
		</div>	
		<div id="editProfile">
			<div id="transparentBackground">
			</div>
			<div id="modalbox-editProfile">
				<div class="popup-box changeProfile">
					<span class="icon_close opaque_strong"></span>
					<div class="popup-box-header">
						<span>Edit Profile</span>
					</div>
					<div>
						<div class="profile">
							<form>
								<div>
									<ul>
										<li>
											<span>Name: </span>
											<input id="name" type="text" value="Masanori Sen"/>
										</li>
										<li class="clear">
											<span>About:</span>
											<textarea  value="Please introduce yourself">test</textarea>
										</li>
									</ul>
								</div>
								<div class="confirmation clear">
									<div>To change Account Settings, click <a href="setting.php">Setting</a></div> 
									<button id="confirm" class="round_weak" type="submit" name="confirm">
										Confirm
									</button>
									<button id="cancel" class="round_weak" type="submit" name="cancel">
										Cancel
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	

<?php include("../includes/layouts/footer.php");?>