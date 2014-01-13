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
	include(LAYOUT_PATH.DS."structure/sidenavi.php");
?>
		


<div class="contentBox">
	<?php include(LAYOUT_PATH.DS."parts/about_button.php");?>
	<div class="margin-left">
		<div class="promotion">
			<img src="images/slideshow.png"/>
		</div>	
		<ul class="topSellingBox">
			<li class="leftBox">
				<div class="firstChild">
					<ul>
						<li>Top </li>
						<li>Popular</li>
						<li>Products</li>
						<li>In Categories</li>
					</ul>
				</div>
			</li>	
			<li class="clothing dress">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Dresses</span>
					</div>
				</a>
			</li>
			<li class="clothing skirt">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Skirt</span>
					</div>
				</a>
			</li>
			<li class="clothing tops">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Tops</span>
					</div>
				</a>
			</li>
			<li class="clothing outwear">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Outwear</spa>
					</div>
				</a>
			</li>
			<li class="clothing jeans">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Jeans</span>
					</div>
				</a>
			</li>
			<li class="clothing pants">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Pants</span>
					</div>
				</a>
			</li>
			<li class="clothing shorts">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Shorts</span>
					</div>
				</a>
			</li>
			<li class="clothing jumpsuits">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox large">
						<span>Jumpsuits & Rumpers</span>
					</div>
				</a>
			</li>
			<li class="clothing intimate">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Intimates</span>
					</div>
				</a>
			</li>
			<li class="clothing swimwear">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Swimwear</span>
					</div>
				</a>
			</li>
			<li class="clothing activewear">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Activewear</span>
					</div>
				</a>
			</li>
			<li class="shoes shoes">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Shoes</span>
					</div>
				</a>
			</li>
			<li class="list_accessories accessories">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Accessories</span>
					</div>
				</a>
			</li>
			<li class="list_accessories bag">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Bags</span>
					</div>
				</a>
			</li>
			<li class="list_accessories jewelry">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Jewelry</span>
					</div>
				</a>
			</li>
			<li class="beauty makeup">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Makeup</span>
					</div>
				</a>
			</li>
			<li class="beauty skincare">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Skincare</span>
					</div>
				</a>
			</li>
			<li class="beauty fragrance">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Fragrance</span>
					</div>
				</a>
			</li>
			<li class="beauty nail">
				<a href="shop.php">
					<img class="item" src="images/productItems/item1.png"/>
					<div class="popupBox">
						<span>Nail Polish</span>
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>



</div>
<div class="bottom clear"></div>


<?php include(LAYOUT_PATH.DS."structure/quickview_modal.php");?>		
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>