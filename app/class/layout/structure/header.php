<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $header_title;?></title>
		<meta charset="UTF-8">
		<meta id="view" name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<link rel="stylesheet"  href="<?php echo ROOT_PATH."public";?>/css/main.css">
		<link href="<?php echo ROOT_PATH."public";?>/css/smoothness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
	</head>
	<body id="<?php echo $body_id;?>" <?php if(isset($tryon_setting)){ echo "class='".$tryon_setting."'";} ?>>
		<div id="header" class="background_themeColor">
			<div class="inner background_themeColor center">
				<div class="inner-inside center" >
					<div id="logo">
						<a href="<?php echo ROOT_PATH."public";?>">
							<h1 id="logo_modi">Modi</h1>
							<h1 id="logo_show">Show</h1>
						</a>
					</div>
					<ul id="header_leftOptions">
						<li class="firstChild">
							<a class="<?php echo $feed_page; ?>" href="<?php echo ROOT_PATH."public";?>/feed.php">
								<h2>FEED</h2>
							</a>
						</li>
						<li>
							<a class="<?php echo $index_page; ?>" href="<?php echo ROOT_PATH."public";?>/index.php">
								<h2>EXPLORE</h2>
							</a>
						</li>					
						<li>
							<a class="<?php echo $shop_page; ?>" href="<?php echo ROOT_PATH."public";?>/shopOverall.php">
								<h2>SHOP</h2>
							</a>
							<ul class="submenu background_dark round_bottom">
								<li>
									<a href="<?php echo ROOT_PATH."public";?>/<?php echo ROOT_PATH."public";?>/shop.php">New Items</a>
								</li>
								<li class="underscore">
									<a href="<?php echo ROOT_PATH."public";?>/shop.php">On Sale</a>
								</li>
								<li class="submenu_list list_clothing">
									<a class="submenu_second_parent" href="<?php echo ROOT_PATH."public";?>/shop.php">
										Clothing
									</a>
									<div class="submenu_second">
										<ul>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Dresses
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Skirts
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Tops
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Outwear
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Jeans
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Pants
												</a>
											</li>
										</ul>
										<ul>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Shorts
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Jumpsuits &amp; Rompers
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Intimates
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Swimwear
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Activewear
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_shoes">
									<a class="submenu_second_parent" href="<?php echo ROOT_PATH."public";?>/shop.php">
										Shoes
									</a>
									<div class="submenu_second">
										<ul>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Boots
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Clogs
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Flats
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Oxford
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Pumps
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Sandles
												</a>
											</li>
										</ul>
										<ul>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Sneakers
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Moccasines
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Loafers &amp; Moccasins
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_accessories">
									<a class="submenu_second_parent" href="<?php echo ROOT_PATH."public";?>/shop.php">Accessories</a>
									<div class="submenu_second">
										<ul >
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Jewelry
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Bags
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Cases covers
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Belts
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Hats
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Sunglasses
												</a>
											</li>
										</ul>
										<ul>	
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Hair &amp; Beauty
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Scarves Ponchos
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Socks &amp; Legwear
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="submenu_list list_beauty">
									<a class="submenu_second_parent" href="<?php echo ROOT_PATH."public";?>/shop.php">
										Beauty
									</a>
									<div class="submenu_second">
										<ul >
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Makeup
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Skincare
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Fragance
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Hair
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Nails
												</a>
											</li>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Accessories
												</a>
											</li>	
										</ul>
										<ul>
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Bath &amp; Body
												</a>
											</li>	
											<li>
												<a href="<?php echo ROOT_PATH."public";?>/shop.php">
													Sets &amp;Kits
												</a>
											</li>
										</ul>
									</div>							
								</li>
							</ul>
						</li>
						<li>
							<a class="tryon" href="<?php echo ROOT_PATH."public";?>/tryon.php">
								<ul>
									<li class="basicWebLayout icon_clothes"></li>
									<li class="<?php echo $tryon_page; ?>">
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
							<?php 
								if($session->is_logged_in()){
									include(LAYOUT_PATH.DS."parts/user_profile.php");
								}else{
									echo "<a class='jumpToSignup pointer'>Sign up / Log in</a>";	
								}
							?>
						</li>
					</ul>					
					<div id="notificationBox" class="round_weak background_grey color_lightWhite pointer">
							<?php echo "0"; ?>
					</div>
				</div>
			</div>
		</div>