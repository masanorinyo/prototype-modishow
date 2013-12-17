<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home - ModiShow</title>
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
	<body id="index">
		<div id="header" class="background_themeColor">
			<div class="inner background_themeColor center">
				<div class="inner-inside center" >
					<div id="logo">
						<a style="" href="index.php">
							<h1 id="logo_modi">Modi</h1>
							<h1 id="logo_show">Show</h1>
						</a>
					</div>
					<ul id="header_leftOptions">
						<li class="firstChild">
							<a href="feed.php">
								<h2>FEED</h2>
							</a>
						</li>
						<li>
							<a class="currentPage" href="index.php">
								<h2>EXPLORE</h2>
							</a>
						</li>					
						<li>
							<a href="shopOverall.php">
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
									<li class="basicWebLayout icon_clothes"></li>
									<li>
										<h2>
											TRY-ON
										</h2>
									</li>
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
		<div id="stickynavi_wrapper" class="boxShadow fullWidth">
			<div id="stickynavi">
				<ul class="stickynavi-left">
					<li id="signupBox">
						<div class="stickynavi_list_wrapper">
							<ul>
								<li class="stickynavi_list">
									<a class="jumpToSignup" >
										+ Sign Up
									</a>
								</li>	
							</ul>
						</div>
					</li>
					<li id="stickynavi_category">
						<div class="stickynavi_list_wrapper">
							<ul>
								<li class="stickynavi_list">
									Featured
								</li>
								<li class="downArrow_stickynavi_wrapper">
									<span class="downArrow_stickynavi"></span>
									<span class="downArrow_stickynavi_hover"></span>
								</li>
							</ul>
						</div>
						<ul class="stickynavi_submenu">
							<span class="upwardArrow"></span>
							<li class="titleBox">
								Category
							</li>
							<a href="#">
								<li>
									Featured
								</li>
							</a>
							<a href="#">
								<li>
									Everything
								</li>
							</a>
							<a href="#">
								<li>
									Random
								</li>
							</a>
							<div>
								<div class="background_white boxShadow stickynavi_submenu_second">
								</div>		
								<li>
									Style
									<span class="rightArrow_standard">
									</span>
									<div class="stickynavi_submenu_second">
										<ul>
											<a href="#">
												<li>
													Active
												</li>
											</a>
											<a href="#">
												<li>
													Basic
												</li>
											</a>
											<a href="#">
												<li>
													Business Casual
												</li>
											</a>
											<a href="#">
												<li>
													Bohemian
												</li>
											</a>
											<a href="#">
												<li>
													Casual
												</li>
											</a>
											<a href="#">
												<li>
													Classic
												</li>
											</a>
											<a href="#">
												<li>
													Comfortable
												</li>
											</a>
											<a href="#">
												<li>
													Celebrity
												</li>	
											</a>
										</ul>
										<ul>
											<a href="#">
												<li>
													Cute
												</li>
											</a>
											<a href="#">
												<li>
													Elegant
												</li>
											</a>
											<a href="#">
												<li>
													Formal
												</li>
											</a>
											<a href="#">
												<li>
													Goth
												</li>
											</a>
											<a href="#">
												<li>
													Preppy
												</li>
											</a>
											<a href="#">
												<li>
													Punk
												</li>
											</a>
											<a href="#">
												<li>
													Runway
												</li>
											</a>
											<a href="#">
												<li>
													Sexy
												</li>
											</a>
										</ul>
										<ul>
											<a href="#">
												<li>
													Swimwear
												</li>
											</a>
											<a href="#">
												<li>
													Vintage
												</li>
											</a>
										</ul>
										<!--<img src="images/category_style.png" style="position:absolute; bottom:0px; right:5px; height:70%;"/>-->
									</div>
								</li>
								<li>
									Occassion
									<span class="rightArrow_standard ">
									</span>
									<div class="stickynavi_submenu_second ">
										<ul>
											<a href="#">
												<li>
													Casual date
												</li>
											</a>
											<a href="#">
												<li>
													Classy date
												</li>
											</a>
											<a href="#">
												<li>
													Everyday
												</li>
											</a>
											<a href="#">
												<li>
													Formal events
												</li>
											</a>
											<a href="#">
												<li>
													Night out
												</li>
											</a>
											<a href="#">
												<li>
													Outdoor activities
												</li>
											</a>
											<a href="#">
												<li>
													Work
												</li>
											</a>
										</ul> 
										<!--<img src="images/occassion.png" style="position:absolute; bottom:20px; right:25px; width:55%;"/>-->
									</div>
								</li>
								<li>
									Season
									<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second ">			
										<ul>
											<a href="#">
												<li>
													Spring
												</li>
											</a>
											<a href="#">
												<li>
													Mid-Spring
												</li>
											</a>
											<a href="#">
												<li>
													Summer
												</li>
											</a>
											<a href="#">
												<li>
													Fall
												</li>
											</a>
											<a href="#">
												<li>
													Mid-Fall
												</li>
											</a>
											<a href="#">
												<li>
													Winter
												</li>
											</a>
										</ul>
										<!--<img src="images/season.png" style="position:absolute; bottom:0px; right:0px;width:100%;"/>-->
									</div>
								</li>
								<li>
									Weather
									<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second ">
										<ul>
											<a href="#">
												<li>
													Warm
												</li>
											</a>
											<a href="#">
												<li>
													Freezing
												</li>
											</a>
											<a href="#">
												<li>
													Cold
												</li>
											</a>
											<a href="#">
												<li>
													Raining
												</li>
											</a>
											<a href="#">
												<li>
													Hot
												</li>
											</a>
											<a href="#">
												<li>
													Snowing
												</li>
											</a>
											<a href="#">
												<li>
													Tropical
												</li>
											</a>
										</ul>
										<!--<img src="images/weather.png" style="position:absolute; bottom:0px; right:25px;width:50%"/>-->
									</div>
								</li>
							</div>
						</ul>
					</li>
					<li id="stickynavi_order">
						<div class="stickynavi_list_wrapper">
							<ul>
								<li class="stickynavi_list">Most Recent </li>
								<li class="downArrow_stickynavi_wrapper">
									<span class="downArrow_stickynavi"></span>
									<span class="downArrow_stickynavi_hover"></span>					
								</li>
							</ul>
						</div>
						<ul class="stickynavi_submenu">
							<span class="upwardArrow"></span>
							<li class="titleBox">Order</li>
							<a href="#">
								<li class="time_submenu_second">
									Most Recent
								</li>
							</a>
							<a href="#">
								<li class="most_discussed">
									Most discussed
								</li>
							</a>
							<div>
								<div class="background_white stickynavi_submenu_second"></div>						
								<li>
									<span>Most Viewed</span>
									<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<ul>
											<a href="#">
												<li>
													All Time
												</li>
											</a>
											<a href="#">
												<li>
													Today
												</li>
											</a>
											<a href="#">
												<li>
													This week
												</li>
											</a>
											<a href="#">
												<li>
													This month
												</li>
											</a>
										</ul>
									</div>
								</li>
								<li>
									<span>Most Popular</span>
									<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<ul>
											<a >
												<li>
													All Time
												</li>
											</a>
											<a href="#">
												<li>
													Today
												</li>
											</a>
											<a href="#">
												<li>
													This week
												</li>
											</a>
											<a href="#">
												<li>
													This month
												</li>
											</a>
										</ul>
									</div>
								</li>
								<li>
									<span>Price</span>
									<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<ul>
											<a href="#">
												<li>
													High to Low
												</li>
											</a>
											<a href="#">
												<li>
													Low to High
												</li>
											</a>
										</ul>
									</div>
								</li>
							</div>
						</ul>
					</li>
					<li id="stickynavi_filter" class="notFeatured">
						<div class="stickynavi_list_wrapper">
							<ul>
								<li class="stickynavi_list">Filters</li>
								<li class="downArrow_stickynavi_wrapper">
									<span class="downArrow_stickynavi"></span>
									<span class="downArrow_stickynavi_hover"></span>
								</li>
							</ul>	
						</div>
						<ul class="stickynavi_submenu">
							<span class="upwardArrow"></span>
							<li class="titleBox">Choose Filters</li>
							<div>
								<div class="background_white stickynavi_submenu_second">
								</div>	
								<li class="stickynavi_submenu_color">
									Color<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<form>
											<ul>
												<label><li class="colorBox background_white color_lightBlack"><input type="checkbox" value="white"/> White</li> </label>
												<label><li class="color_white background_black colorBox"><input type="checkbox" value="black"/> Black</li> </label>
												<label><li class="background_grey colorBox color_white"><input type="checkbox" value="grey"/> Grey</li></label>
												<label><li class="background_brown color_white colorBox"><input type="checkbox" value="brown"/> Brown</li> </label>
												<label><li class="background_beige color_black colorBox"><input type="checkbox" value="beige"/> Beige</li></label>
												<label><li class="background_green color_white colorBox"><input type="checkbox" value="green"/> Green </li></label>
												<label><li class="background_blue color_white colorBox"><input type="checkbox" value="blue"/> Blue</li></label>
												<label><li class="background_purple color_white colorBox"><input type="checkbox" value="purple"/> Purple</li></label>
												<label><li class="background_yellow colorBox color_lightBlack"><input type="checkbox" value="yellow"/> Yellow</li></label>
												<label><li class="background_pink colorBox color_lightBlack"><input type="checkbox" value="pink"/> Pink</li></label>
												<label><li class="background_red color_white colorBox"><input type="checkbox" value="red"/> Red</li></label>
												<label><li class="background_orange color_white colorBox"><input type="checkbox" value="orange"/> Orange</li></label>
												<label><li class="background_silver colorBox color_lightBlack"><input type="checkbox" value="silver"/> Silver </li></label>
												<label><li class="background_gold colorBox color_lightBlack"><input type="checkbox" value="gold"/> Gold</li></label>
												<label><li class="colorBox "><input type="checkbox" value="gold"/> Others</li></label>
											</ul>
										</form>
									</div>
								</li>
								<li>
									Pattern<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<form>
											<ul>
												<label><li><input type="checkbox" value="plain"/> Plain</li></label>
												<label><li><input type="checkbox" value="stripe"/> Stripe</li></label>
												<label><li><input type="checkbox" value="check"/> Check</li></label>
												<label><li><input type="checkbox" value="border"/> Border</li></label>
												<label><li><input type="checkbox" value="dot"/> Dot</li></label>
												<label><li><input type="checkbox" value="camouflage"/> Camouflage</li></label>
											</ul>
											<ul>
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
									Material<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<form>
											<ul>
												<label><li><input type="checkbox" value="chino"/> Chino</li></label>
												<label><li><input type="checkbox" value="cotton"/> Cotton</li></label>
												<label><li><input type="checkbox" value="corduroy"/> Corduroy</li></label>
												<label><li><input type="checkbox" value="wool"/> Wool series</li></label>
												<label><li><input type="checkbox" value="line"/> Line series</li></label>
												<label><li><input type="checkbox" value="nylon"/> Nylon series</li></label>
											</ul>
											<ul>
												<label><li><input type="checkbox" value="sweat"/> Sweat</li></label>
												<label><li><input type="checkbox" value="jersey"/> Jersey</li></label>
												<label><li><input type="checkbox" value="stretch"/> Stretch</li></label>
												<label><li><input type="checkbox" value="leather"/> Leather material</li></label>
											</ul>
										</form>
									</div>
								</li>
								<li>
									Price<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
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
											</ul>
											<ul>
											
												
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
									Brand<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second sideScroll">
										<form>							
											<div class="sideScroll_wrapper">
												<ul>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
												</ul>
											</div>
											<div class="sideScroll_wrapper">
												<ul>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
												</ul>
											</div>
											<div class="sideScroll_wrapper">
												<ul>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
												</ul>
											</div>
											<div class="sideScroll_wrapper">
												<ul>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
												</ul>
											</div>
											<div class="sideScroll_wrapper">
												<ul>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
													<label><li><input type="checkbox" value=""/> ABCD</li></label>
												</ul>
											</div>
										</form>
									</div>
								</li>
							</div>
						</ul>
					</li>
					<li id="stickynavi_creator" class="notFeatured">
						<div class="stickynavi_list_wrapper">
							<ul>
								<li class="stickynavi_list">Creaters</li>
								<li class="downArrow_stickynavi_wrapper">
									<span class="downArrow_stickynavi"></span>
									<span class="downArrow_stickynavi_hover"></span>
								</li>
							</ul>	
						</div>
						<ul id="creators" class="stickynavi_submenu">
							<li class="titleBox">Choose Creaters</li>
							<span class="upwardArrow"></span>
							<div>		
								<div class="background_white stickynavi_submenu_second"></div>			
								<li>
									Age<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<form>
											<ul>
												<label><li><input type="checkbox" value="17"/> Age: ~ 17 </li></label>
												<label><li><input type="checkbox" value="18_21"/> Age:18 ~ 21 </li></label>
												<label><li><input type="checkbox" value="22_25"/> Age:22 ~ 25 </li></label>
												<label><li><input type="checkbox" value="26_30"/> Age:26 ~ 30 </li></label>
												<label><li><input type="checkbox" value="31_40"/> Age:31 ~ 40 </li></label>
												<label><li><input type="checkbox" value="41"/> Age:40 ~  </li></label>
											</ul>
										</form>
									</div>
								</li>
								<li>
									Skin Color<span class="rightArrow_standard  extra_space"></span>
									<div class="stickynavi_submenu_second">
										<form>
											<ul>
												<label>
													<li>
														<input type="checkbox" value="18_21"/> 
														Skin tone: Dark 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="22_25"/> 
														Skin tone: Tanned 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="17"/> 
														Skin tone: Brown 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="26_30"/>
														 Skin tone: White 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="31_40"/>
														 Skin tone: Light 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="31_40"/>
														 Skin tone: Pale 
													</li>
												</label>
											</ul>
										</form>
									</div>
								</li>
								<li>
									Size<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<form>
											<ul>
												<label><li><input type="checkbox" value="3"/> Size: ~ 3 (XS)</li></label>
												<label><li><input type="checkbox" value="4_6"/> Size:4 ~ 6 (S)</li></label>
												<label><li><input type="checkbox" value="7_9"/> Size:7 ~ 9 (M)</li></label>
												<label><li><input type="checkbox" value="10_12"/> Size:10 ~ 12 (L)</li></label>
												<label><li><input type="checkbox" value="13"/> Size:13 ~ (XL)</li></label>
											</ul>
										</form>
									</div>
								</li>
								<li>
									Height<span class="rightArrow_standard "></span>
									<div class="stickynavi_submenu_second">
										<form>
											<ul>
												<label><li><input type="checkbox" value=""/>  ~ 4'11"(150cm)</li></label>
												<label><li><input type="checkbox" value=""/> 4'11.4"151cm)  ~ 5'3"(160cm)</li></label>
												<label><li><input type="checkbox" value=""/> 5'3.4"(161cm)~ 5'6.9"(170cm)</li></label>
												<label><li><input type="checkbox" value=""/> 5'7.3"(171cm)~ 5'10.9"(180cm)</li></label>
												<label><li><input type="checkbox" value=""/> 5'11.3"(181cm)~ 6'2.8"(190cm)</li></label>
												<label><li><input type="checkbox" value=""/> 6'3.2"(191cm)~ </li></label>
											</ul>
										</form>
									</div>
								</li>
								<li>
									Body Type<span class="rightArrow_standard  extra_space"></span>
									<div class="stickynavi_submenu_second">
										<form>
											<ul>
												<label>
													<li>
														<input type="checkbox" value="22_25"/> 
														Body type: Rectangle 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="17"/> 
														Body type: Apple 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="26_30"/>
														 Body type: Hourglass 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="31_40"/>
														 Body type: Pear 
													</li>
												</label>
												<label>
													<li>
														<input type="checkbox" value="31_40"/>
														 Body type: Inverted Triangle 
													</li>
												</label>
											</ul>
										</form>
									</div>
								</li>
							</div>
						</ul>
					</li>
					<li  id="stickynavi_location" class=" notFeatured">
						<div class="stickynavi_list_wrapper">
							<ul>
								<li class="stickynavi_list">All Worldwide</li>
								<li class="downArrow_stickynavi_wrapper">
									<span class="downArrow_stickynavi">
									</span>
									<span class="downArrow_stickynavi_hover">
									</span>
								</li>						
							</ul>
						</div>
						<ul class="stickynavi_submenu default">
							<span class="upwardArrow"></span>
							<li class="titleBox">Search Location</li>
							<form>
								<li>
									<span>Country:</span>
									<select class="pointer color_lightWhite background_black"> 
										<option value="worldwide">All Worldwide</option>
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
									<span>City:</span>
									<input id="cityName" type="text" maxlength="20"/>
								</li>

								<li>
									<input type="submit" class="pointer round_strong color_white" value="Search"/>
								</li>
							</form>
						</ul>
					</li>
				</ul>
				<ul class="stickynavi-right">		
					<li>
						<div class="stickynavi_list_wrapper">
							<div id="button_flipAll" class="round_strong pointer">
								<span class="icon_flip_grey"></span>		
							</div>
						</div>
					</li>
					<li>
						<div class="stickynavi_list_wrapper">
							<form id="stickynavi_searchBox">
								<input class="round_weak" type="text" name="search_name" placeholder="search..."/>
							</form>
						</div>
					</li>
				</ul>
			</div>
		</div>	
		<div id="content">
			<a class="backToTop modalbox-fixPosition round_circle background_shadow opaque_strong" href="#header">
				<span class="upwardArrow"></span>
			</a>
			<span class="button_about modalbox-fixPosition round_circle background_shadow opaque_strong">
				i
			</span>
			<!--Marquee slideshow-->
			<div id="main_slideshow" class="fullWidth">
				<div class="marquee_container">
					<div class="marquee_photos"></div>
					<div class="marquee_caption">
						<div class="marquee_caption_content"></div>
					</div>
					<div class="marquee_nav"></div>
				</div>
				<div class="marquee_panels">
					<!-- Panel -->
					<div class="marquee_panel">
						<img class="marquee_panel_photo" src="images/photos/london.jpg" alt="London" width="100" />
						<div class="marquee_panel_caption">
							<img class="marquee_flag" src="images/tryon_white.png" width="20" height="13" />
							<h2>Checkout Different Styles!</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula porttitor tortor a ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus auctor tincidunt gravida. 
							</p>
							<p>
								<span class="jumpToSignup" onClick="openRegistrationForm()">Sign up now</span>
							</p>
						</div>
					</div>
					<!-- Panel -->
					<div class="marquee_panel">
						<img class="marquee_panel_photo" src="images/photos/milan.jpg" alt="Milan" width="100" />
						<div class="marquee_panel_caption">
							<img class="marquee_flag" src="images/tryon_white.png" width="20" height="13" />
							<h2>Try On Styles!</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula porttitor tortor a ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus auctor tincidunt gravida. Morbi varius arcu ut imperdiet feugiat. 
							</p>
							<p><span class="jumpToSignup" onClick="openRegistrationForm()" >Sign up now</span></p>
						</div>
					</div>
					<!-- Panel -->
					<div class="marquee_panel">
						<img class="marquee_panel_photo" src="images/photos/staugustine.jpg" alt="St. Augustine" width="100" />
						<div class="marquee_panel_caption">
							<img class="marquee_flag" src="images/tryon_white.png" width="20" height="13" />
							<h2>Make Your Own Fashion Magazine!</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula porttitor tortor a ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus auctor tincidunt gravida. Morbi varius arcu ut imperdiet feugiat. 
							</p>
							<p><span class="jumpToSignup" onClick="openRegistrationForm()" >Sign up now</span></p>
						</div>
					</div>
					<!-- Panel -->
					<div class="marquee_panel">
						<img class="marquee_panel_photo" src="images/photos/montreal.jpg" alt="Montreal" width="100" />
						<div class="marquee_panel_caption">
							<img class="marquee_flag" src="images/tryon_white.png" width="20" height="13" />
							<h2>Share With Friends</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula porttitor tortor a ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus auctor tincidunt gravida. Morbi varius arcu ut imperdiet feugiat. 
							</p>
							<p><span class="jumpToSignup" onClick="openRegistrationForm()" >Sign up now</span></p>
						</div>
					</div>
				</div>
			</div>
			<div id="content_wrapper">
				<div class="content_stream clear">
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
					</ul>
					<ul>
						<li class="content_large firstChild">	
							<div class="button_heart">
								<span class="heart_empty"><span>40</span></span>
								<span class="heart_filled"><span>40</span></span>						
							</div>
							<div class="button_flip">
								<span class="icon_flip_grey"></span>	
								<span class="icon_flip_dark"></span>							
							</div>
							<div class="collageBox openModal">
								<a href="#">
									<div class="collageBox-inside ">
										<img src="images/style/outfit2.png">
									</div>
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
										<span class="openModal"> 
											<a href="#">
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
						<li class="content_large">	
							<div class="button_heart">
								<span class="heart_empty"><span>40</span></span>
								<span class="heart_filled"><span>40</span></span>				
							</div>
							<div class="button_flip">
								<span class="icon_flip_grey"></span>	
								<span class="icon_flip_dark"></span>							
							</div>
							<div class="collageBox openModal">
								<a href="#">
									<div class="collageBox-inside ">
										<img src="images/style/outfit2.png">
									</div>
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
										<span class="openModal"> 
											<a href="#">
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
					<ul>
						<li class="content_large firstChild">	
							<div class="button_heart">
								<span class="heart_empty"><span>40</span></span>
								<span class="heart_filled"><span>40</span></span>						
							</div>
							<div class="button_flip">
								<span class="icon_flip_grey"></span>	
								<span class="icon_flip_dark"></span>							
							</div>
							<div class="collageBox openModal">
								<a href="#">
									<div class="collageBox-inside ">
										<img src="images/style/outfit2.png">
									</div>
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
										<span class="openModal"> 
											<a href="#">
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
						<li class="content_large">	
							<div class="button_heart">
								<span class="heart_empty"><span>40</span></span>
								<span class="heart_filled"><span>40</span></span>				
							</div>
							<div class="button_flip">
								<span class="icon_flip_grey"></span>	
								<span class="icon_flip_dark"></span>							
							</div>
							<div class="collageBox openModal">
								<a href="#">
									<div class="collageBox-inside ">
										<img src="images/style/outfit2.png">
									</div>
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
										<span class="openModal"> 
											<a href="#">
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
					<ul>
						<li class="content_large firstChild">	
							<div class="button_heart">
								<span class="heart_empty"><span>40</span></span>
								<span class="heart_filled"><span>40</span></span>						
							</div>
							<div class="button_flip">
								<span class="icon_flip_grey"></span>	
								<span class="icon_flip_dark"></span>							
							</div>
							<div class="collageBox openModal">
								<a href="#">
									<div class="collageBox-inside ">
										<img src="images/style/outfit2.png">
									</div>
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
										<span class="openModal"> 
											<a href="#">
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
						<li class="content_large">	
							<div class="button_heart">
								<span class="heart_empty"><span>40</span></span>
								<span class="heart_filled"><span>40</span></span>				
							</div>
							<div class="button_flip">
								<span class="icon_flip_grey"></span>	
								<span class="icon_flip_dark"></span>							
							</div>
							<div class="collageBox openModal">
								<a href="#">
									<div class="collageBox-inside ">
										<img src="images/style/outfit2.png">
									</div>
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
										<span class="openModal"> 
											<a href="#">
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
					<ul>
						<li class="content_large firstChild">	
							<div class="button_heart">
								<span class="heart_empty"><span>40</span></span>
								<span class="heart_filled"><span>40</span></span>						
							</div>
							<div class="button_flip">
								<span class="icon_flip_grey"></span>	
								<span class="icon_flip_dark"></span>							
							</div>
							<div class="collageBox openModal">
								<a href="#">
									<div class="collageBox-inside ">
										<img src="images/style/outfit2.png">
									</div>
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
										<span class="openModal"> 
											<a href="#">
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
						<li class="content_large">	
							<div class="button_heart">
								<span class="heart_empty"><span>40</span></span>
								<span class="heart_filled"><span>40</span></span>				
							</div>
							<div class="button_flip">
								<span class="icon_flip_grey"></span>	
								<span class="icon_flip_dark"></span>							
							</div>
							<div class="collageBox openModal">
								<a href="#">
									<div class="collageBox-inside ">
										<img src="images/style/outfit2.png">
									</div>
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
										<span class="openModal"> 
											<a href="#">
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
			</div>
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
										<li class="icon_clothes"></li>
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
						<div id="mainContainer_content" class="fullWidth">
							<div class="content-top fullWidth">
								<div class="button_rectanglar center round-little">
									<div class="rectanglar-left">Collage</div>
									<div class="rectanglar-medium">Model</div>
									<div class="rectanglar-right">People</div>
								</div>
							</div>
							<div class="content-middle fullWidth">
								<div>
									<img class="content_collage" src="images/style/large_collage.png" />
									<img class="content_model" src="images/style/model2.gif"/>
									<img class="content_people" src="images/style/people1.gif"/>					
								</div>
							</div>	
							<div class="content-bottom fullWidth">
								<div class="content_description-bottom fullWidth">
									<span>Other styles created by 
										<a class="username color_lightBlue" href="userPage.php">
											Sara Cook
										</a>
									</span>
								</div>
								<div class="content-bottom_slider fullWidth">
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
								<p>
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
								<textarea id="message"></textarea>
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
	
<?php include("../includes/layouts/footer.php");?>