<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions/function.php");?>

<!DOCTYPE html>
<html>
	<head>
		<title> Item - ModiShow </title>
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
	<body id="shopItem" >	
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
							<a class="currentPage" href="shopOverall.php"><h2>SHOP</h2></a>
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
		<div class="content round_weak">
			<a id="scrollToTop" class="backToTop modalbox-fixPosition round_circle background_shadow opaque_strong" href="#header"><span class="upwardArrow"></span></a>
			<span id="about" class="button_about modalbox-fixPosition round_circle background_shadow opaque_strong">i</span>
			<div class="top">
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
					<div class="left-box">
					</div>
					<div class="right-box">
					</div>
				</div>
				<div class="leftSideBox">
					<div class="itemBox">
						<div class="picFrame-inside">
							<img src="images/productItems/item3.png"/>
						</div>
					</div>
					<div class="itemBox-related">
						<div class="inside">
							<ul>
								<li><img src="images/productItems/item1.png"/></li>
								<li><img src="images/productItems/item1.png"/></li>
								<li><img src="images/productItems/item1.png"/></li>
								<li class="lastChild"><div class="round_circle"><span>more</span></div></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="rightSideBox">
					<div class="itemDetails-description">
						<div class="description">
							<a href="#" class="title">
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress
								Big flower dress


								

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
												Black crema brewed steamed qui skinny, java dripper, body latte espresso, aroma pumpkin spice espresso affogato, rich viennese grinder kopi-luwak cream. Decaffeinated caramelization aged, 
												Black crema brewed steamed qui skinny, java dripper, body on aged, caramelization, decaffeinated, and filter viennese mug eu percolator blue mountain milk and at instant. Percolator saucer, sugar, trifecta caramelization cappuccino kopi-luwak, caramelization, grinder steamed skinny shop cup whipped extraction strong ristretto.
												Black crema brewed steamed qui skinny, java dripper, body latte espresso, aroma pumpkin spice espresso affogato, rich viennese grinder kopi-luwak cream. Decaffeinated caramelization aged, 
												Black crema brewed steamed qui skinny, java dripper, body on aged, caramelization, decaffeinated, and filter viennese mug eu percolator blue mountain milk and at instant. Percolator saucer, sugar, trifecta caramelization cappuccino kopi-luwak, caramelization, grinder steamed skinny shop cup whipped extraction strong ristretto.
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
			<div class="bottom clear">
				<div class="subHeader">
					<ul>
						<li id="similarItems">	<span class="blue-color">More items like this</span>
						</li>
						<li id="creation">
							<span class="number">11 </span>
							<span>Creations</span>
						</li>
						<li id="comment">
							<span class="number">30</span>
							<span>Comments</span>
						</li>
					</ul>
				</div>
				<div class="inside">
					<span class="hidden">No Items</span>
					<div class="similarItems">
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
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE
										MASCARA IN THERE AND BLACK BY LOUIS</a>
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
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE
										MASCARA IN THERE AND BLACK BY LOUIS</a>
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
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE
										MASCARA IN THERE AND BLACK BY LOUIS</a>
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
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE
										MASCARA IN THERE AND BLACK BY LOUIS</a>
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
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE
										MASCARA IN THERE AND BLACK BY LOUIS</a>
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
								<a href="#">
									<div class="itemDetails-image">	
										<img src="images/productItems/item1.png"/>
									</div>
								</a>
								<div class="itemDetails-description">
									<span class="description">
										<a href="item.php">MASCARA IN THERE AND BLACK BY LOUISE
										MASCARA IN THERE AND BLACK BY LOUIS</a>
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