<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register - ModiShow</title>
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
	<body id="userInfo">	
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
		<div class="setting">
			<form>
				<div class="setting-wrapper personal">
					<div class="sub-header">
						<span>Personal Information</span>
					</div>
					<ul>
						<li>
							<span>Age group</span>
							<select id="ageGroup">
								<option value="0">
									Please select your age
								</option>
								<option>
									~17
								</option>
								<option>
									18 ~ 21
								</option>
								<option>
									22 ~ 25
								</option>
								<option>
									26 ~ 30
								</option>
								<option>
									31 ~ 40
								</option>
								<option>
									40 ~ 
								</option>
							</select>	
						</li>
						<li>
							<span>Height</span>
							<select id="heightGroup">
								<option value="0">
									Please select your height
								</option>
								<option>
									~ 4'11' ( 150cm )
								</option>
								<option>
									4'11.4' ( 151cm ) ~ 5'3' ( 160cm )
								</option>
								<option>
									5'3.4' ( 161cm ) ~ 5'6.9' ( 170cm )
								</option>
								<option>
									5'7.3' ( 171cm ) ~ 5'10.9' ( 180cm )
								</option>
								<option>
									5'11.3' ( 181cm ) ~ 6'2.8' ( 190cm )
								</option>
								<option>
									6'3.2' ( 191cm ) ~ 
								</option>
							</select>	
						</li>
						<li>
							<span>Skin color</span>
							<select id="skinGroup">
								<option value="0">
									Please select your skin color
								</option>
								<option>
									Pallo-African
								</option>
								<option>
									Midtone-African
								</option>
								<option>
									Tanned-African
								</option>
								<option>
									Pallor-Asian
								</option>
								<option>
									Midtone-Asian
								</option>
								<option>
									Tanned-Asian
								</option>
								<option>
									Pallor-Caucasian
								</option>
								<option>
									Midtone-Caucasian
								</option>
								<option>
									Tanned-Caucasian
								</option>
							</select>	
						</li>
						<li>
							<span>Size</span>
							<select id="sizeGroup">
								<option value="0">
									Please select your size
								</option>
								<option>
									~ 3 (XS)
								</option>
								<option>
									4 ~ 6 (S)
								</option>
								<option>
									7 ~ 9 (M)
								</option>
								<option>
									10 ~ 12 (L)
								</option>
								<option>
									13 ~  (XL)
								</option>
							</select>	
						</li>
						<li class="lastChild">
							<span>Body</span>
							<select id="bodyTypeGroup">
								<option value="0">
									Please select your body type
								</option>
								<option>
									Triangle
								</option>
								<option>
									Invertied Triangle
								</option>
								<option>
									Hourglass
								</option>
								<option>
									Rectangle
								</option>
								<option>
									Diamond
								</option>
								<option>
									Rounded
								</option>
							</select>	
						</li>
					</ul>
				</div>
				<div class="confirmation">
					<input id="cancel" class="round_weak" type="submit" name="cancel" value="Cancel">
					<input id="confirm" class="round_weak" type="submit" value="Confirm" name="confirm">
				</div>
			</form>
		</div>


<?php include("../includes/layouts/footer.php");?>