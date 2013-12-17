<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title> Shop - ModiShow </title>
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
	<body id="shop">	
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
							<a class="currentPage" href="shopOverall.php">
								<h2>SHOP</h2>
							</a>
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
							<a class="jumpToSignup pointer">
								Sign up / Log in
							</a>
						</li>
					</ul>					
					<div id="notificationBox" class="round_weak background_grey color_lightWhite pointer">
							0
					</div>
				</div>
			</div>
		</div>
		<div class="shop">
			<div class="itemWrapper">
				<div class="sideNavi">
					<div class="top  round_little">
						<div class="sideMenu">
							<ul>
								<li class="titleHeader underscore">
									<span>Shops &amp; Trends</span>
								</li>
								<li class="firstChild">
									<span>Trending</span>
								</li>
								<li>
									<span>New Arrival</span>
								</li>
								<li class="lastChild">
									<span>On Sale</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="middle  round_little">
						<div class="sideMenu">
							<ul>
								<li class="titleHeader underscore">
									<span>By Category</span>
								</li>
								<li class="firstChild">
									<span class="child">Clothing</span>
									<div class="clothing submenu_second">
										<ul>
											<li><span>All clothing</span></li>
											<li class="dress">
												<span>Dresses</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Day</span></li>
														<li><span>Cocktail</span></li>
														<li><span>Gowns</span></li>
													</ul>
												</div>
											</li>
											<li class="skirt">
												<span>Skirt</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Mini</span></li>
														<li><span>Knee Length</span></li>
														<li><span>Long</span></li>
													</ul>
												</div>
											</li>
											<li class="tops">
												<span>Tops</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Blouses</span></li>
														<li><span>Cardigans</span></li>
														<li><span>Sweaters</span></li>
														<li><span>Sweatshirts &amp; Hoodies</span></li>
														<li><span>Tanks</span></li>
														<li><span>T-shirts</span></li>
														<li><span>Tunics</span></li>
													</ul>
												</div>
											</li>
											<li class="outwear">
												<span>Outwear</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Coat</span></li>
														<li><span>Jacket</span></li>
														<li><span>Vests</span></li>
													</ul>
												</div>
											</li>
											<li class="jeans">
												<span>Jeans</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Bootcut</span></li>
														<li><span>Boyish</span></li>
														<li><span>Flared</span></li>
														<li><span>Skinny</span></li>
														<li><span>Straight Leg</span></li>
														<li><span>Wide leg</span></li>
													</ul>
												</div>
											</li>
											<li class="pants">
												<span>Pants</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Capri &amp; Cropped</span></li>
														<li><span>Leggigs</span></li>
													</ul>
												</div>
											</li>
											<li class="shorts">
												<span>Shorts</span>
											</li>
											<li class="jumpsuits">
												<span>Jumpsuits Rompers</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Jumpsuits</span></li>
														<li><span>Rompers</span></li>
													</ul>
												</div>
											</li>
											<li class="intimate">
												<span>Intimates</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Bras</span></li>
														<li><span>Camisoles</span></li>
														<li><span>Chemises</span></li>
														<li><span>Hosiery</span></li>
														<li><span>Sleepwear</span></li>
														<li><span>Panties &amp; Thongs</span></li>
														<li><span>Robes</span></li>
														<li><span>Socks &amp; Legwear</span></li>
													</ul>
												</div>
											</li>
											<li class="swimwear">
												<span>Swimwear</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Bikinis</span></li>
														<li><span>One piece</span></li>
														<li><span>Cover-ups</span></li>
													</ul>
												</div>
											</li>
											<li class="activewear">
												<span>Activewear</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Jackets</span></li>
														<li><span>Pants</span></li>
														<li><span>Shorts</span></li>
														<li><span>Skirts</span></li>
														<li><span>Shorts Bras</span></li>
														<li><span>Tank Tops</span></li>
														<li><span>Tops</span></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<span>Shoes</span>
									<div class="shoes submenu_second">
										<ul>
											<li class="shoes"><span>All Shoes</span></li>
											<li class="clogs"><span>Clogs</span></li>
											<li class="flats"><span>Flats</span></li>
											<li class="moccasine"><span>Loafers &amp; Moccasins</span></li>
											<li class="oxford"><span>Oxford</span></li>
											<li class="pumps"><span>Pumps</span></li>
											<li class="boots"><span>Boots</span></li>
											<li class="sandles"><span>Sandles</span></li>
											<li class="sneaker"><span>Sneakers</span></li>
										</ul>
									</div>
								</li>
								<li>
									<span>Accessories</span>
									<div class="list_accessories submenu_second">
										<ul>
											<li class="accessories">
												<span>All accessories</span>
											</li>
											<li class="jewelry">
												<span>Jewelry</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Bracelets &amp; Bangles</span></li>
														<li><span>Brooches</span></li>
														<li><span>Charms &amp; Pendants</span></li>
														<li><span>Earrings</span></li>
														<li><span>Necklaces</span></li>
														<li><span>Rings</span></li>
														<li><span>Watches</span></li>
													</ul>
												</div>
											</li>
											<li class="bag">
												<span>Bags</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Backpacks</span></li>
														<li><span>Handbags</span></li>
														<li><span>Messager Bags</span></li>
														<li><span>Wallets</span></li>
													</ul>
												</div>
											</li>
											<li class="case">
												<span>Cases covers</span> 
											</li>
											<li class="belt">
												<span>Belts</span>
											</li>
											<li class="hat">
												<span>Hats</span>
											</li>
											<li class="sunglass">
												<span>Sunglasses</span>
											</li>
											<li class="hair">
												<span>Hair Beauty</span>
											</li>
											<li class="scarve">
												<span>Scarves Ponchos</span>
											</li>
											<li class="sock">
												<span>Socks Legwear</span>
											</li>
										</ul>
									</div>
								</li>
								<li class="lastChild">
									<span>Beauty</span>
									<div class="beauty submenu_second">
										<ul>
											<li class="beauty">
												<span>All beauty</span>
											</li>
											<li class="makeup">
												<span>Makeup</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Faces</span></li>
														<li><span>Cheeks</span></li>
														<li><span>Eyes</span></li>
														<li><span>Lips</span></li>
														<li><span>Makeup tools</span></li>
													</ul>
												</div>
											</li>
											<li class="skincare">
												<span>Skincare</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Face</span></li>
														<li><span>Eyes</span></li>
														<li><span>Lips</span></li>
													</ul>
												</div>
											</li>
											<li class="fragrance">
												<span>Fragrance</span>
											</li>
											<li class="bath">
												<span>Bath &amp; Body</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Body Cleansers</span></li>
														<li><span>Body Moisturizers</span></li>
														<li><span>Body Treatments</span></li>
														<li><span>Deodorant</span></li>
														<li><span>Sun care</span></li>
													</ul>
												</div>
											</li>
											<li class="hairBeauty">
												<span>Hair</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Faces</span></li>
														<li><span>Cheeks</span></li>
														<li><span>Eyes</span></li>
														<li><span>Lips</span></li>
														<li><span>Makeup tools</span></li>
													</ul>
												</div>
											</li>
											<li class="nail">
												<span>Nails</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Shampoo</span></li>
														<li><span>Conditioner</span></li>
														<li><span>Styling Products</span></li>
														<li><span>Styling tools</span></li>
													</ul>
												</div>
											</li>
											<li class="set">
												<span>Sets &amp; Kits</span>
												<div class="submenu-thirdLevel">
													<ul>
														<li><span>Nail Polish</span></li>
														<li><span>Nail Treatments</span></li>
														<li><span>Manicure Tools</span></li>
													</ul>
												</div>
											</li>
											<li class="accessoryBeauty">
												<span>Accessories</span>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="bottom  round_little">
						<div class="sideMenu filters">
							<ul>
								<li class="titleHeader underscore">
									<span>Refine</span>
									<ul>
										
										<span class="deleteAll top-right">- Clear all </span>
									</ul>
								</li>
								<li class="firstChild">
									<span>Color</span>
									<div class="submenu_second">
											<ul>
												<label>
													<li class="colorBox">
														<span id="white">White</span>
														<div class="background_white"></div>
													</li> 
												</label>
												<label>
													<li class="colorBox">
														<span id="black">Black</span>
														<div class="background_black"></div>
													</li> 
												</label>
												<label>
													<li class="colorBox">
														
														<span id="grey">Grey</span>
														<div class="background_grey"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														<span id="brown">Brown</span>
														<div class="background_brown"></div>
													</li> 
												</label>
												<label>
													<li class="colorBox">
														<span id="beige">Beige</span>
														<div class="background_beige"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														<span id="green">Green</span>
														<div class="background_green"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														
														<span id="blue">Blue</span>
														<div class="background_blue"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														 <span id="purple">Purple</span>
														<div class="background_purple"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														 <span id="yellow">Yellow</span>
														<div class="background_yellow"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														
														<span id="pink">Pink</span>
														<div class="background_pink"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														
														<span id="red">Red</span>
														<div class="background_red"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														<span id="orange">Orange</span>
														<div class="background_orange"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														<span id="silver">Silver</span>
														<div class="background_silver"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														 
														<span id="gold">Gold</span>
														<div class="background_gold"></div>
													</li>
												</label>
												<label>
													<li class="colorBox">
														<span id="others">Others</span>
														<div class="background_other"></div>
													</li>
												</label>
											</ul>
										</form>
									</div>
								</li>
								<li>
									<span>Pattern</span>
									<div class="submenu_second">
										<ul>
											<label>
												<li>
													<span id="plain">Plain</span>
												</li>
											</label>
											<label>
												<li>
													 <span id="stripe">Stripe</span>
												</li>
												</label>
											<label>
												<li>
													 <span id="check">Check</span>
												</li>
												</label>
											<label>
												<li>
													 <span id="border">Border</span>
												</li>
												</label>
											<label>
												<li>
													 <span id="dot">Dot</span>
												</li>
												</label>
											<label>
												<li>
													 <span id="camouflage">Camouflage</span>
												</li>
											</label>
											<label>
												<li>
													 <span id="lace">Embroidery, lace</span>
												</li>
											</label>
											<label>
												<li>
													<span id="animal">Animal </span>
												</li>
												</label>
											<label>
												<li>
													 <span id="floral">Floral</span>
												</li>
												</label>
											<label>
												<li>
													<span id="print-allover">Patterned all over print</span>
												</li>
											</label>
											<label>
												<li>
													 <span id="print-logo">Print(logos,etc.)</span>
												</li>
											</label>
											<label>
												<li>
													 <span id="onepoint">Onepoint</span>
												</li>
											</label>
										</ul>
									</div>
								</li>
								<li>
									<span>Material</span>
									<div class="submenu_second">
										<ul>
											<label>
												<li>
													<span id="chino">Chino</span>
												</li>
												</label>
											<label>
												<li>
													<span id="cotton">Cotton</span>
												</li>
												</label>
											<label>
												<li>
													<span id="corduroy">Corduroy</span>
												</li>
												</label>
											<label>
												<li>
													<span id="wool">Wool series</span>
												</li>
												</label>
											<label>
												<li>
													<span id="line">Line series</span>
												</li>
												</label>
											<label>
												<li>
													<span id="nylon">Nylon series</span>
												</li>
												</label>
											<label>
												<li>
													<span id="sweat">Sweat</span>
												</li>
												</label>
											<label>
												<li>
													<span id="jersey">Jersey</span>
												</li>
												</label>
											<label>
												<li>
													<span id="stretch"> Stretch</span>
												</li>
												</label>
											<label>
												<li>
													<span id="leather">Leather material</span>
												</li>
											</label>
										</ul>
									</div>
								</li>
								<li>
									<span>Brand</span>
									<div class="submenu_second scrollable_y">
										<ul>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
											<label>
												<li>
												 <span id="abcd">ABCD</span>
												</li>
											</label>
										</ul>
									</div>	
								</li>
								<li class="lastChild">
									<span>Price</span>
									<div class="submenu_second slider_wrapper">
										<p>
										  <input type="text" id="amount"/>
										</p>
										<div id="slider-range"></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="contentBox">
					<a id="scrollToTop" class="backToTop modalbox-fixPosition round_circle background_shadow opaque_strong" href="#header">
						<span class="upwardArrow"></span>
					</a>
					<span id="about" class="button_about modalbox-fixPosition round_circle background_shadow opaque_strong">
						i
					</span>
					<div class="margin-left">
						<div class="item-guides">
							<ul>
								<li class="firstChild">
									<span class="main"></span>
									<span class="sub"></span>
								</li>
								<li>
									<span>-</span>
								</li>
								<li class="lastChild">
									<span>Sort By:</span>
									<form class="selectBox">	
										<div class="styled_select">
											<select name="sort">
												<option value="relevance">
													Relevance
												</option>
												<option value="popular">
													Most popular
												</option>
												<option value="view">
													Most viewed
												</option>
												<option value="lowToHigh">
													Price - low to high
												</option>		
												<option value="highToLow">
													Price - high to low
												</option>
											</select>
										</div>
									</form>
								</li>
							</ul>
						</div>
						<ul class="items">
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							<li>
								<div class="button-tryon">
									<a href="tryon.php"><span class="icon_tryon"></span>
									<span class="right">Try On</span></a>
									
								</div>
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
								<div class="singleItemImage">
									<span>Quick look</span>
								</div>
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE</a>
									</span>
									<div class="price">
									$169
									</div>
									<span class="url">
										<a href="#">topshop.com</a>
									</span>
								</div>
							</li>
							
						</ul>
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
		<div class="bottom clear"></div>

<?php include("../includes/layouts/footer.php");?>