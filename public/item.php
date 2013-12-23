<?php require_once("../app/config/initialize.php");?>
<?php include(LAYOUT_PATH.DS."structure/header.php");?>
		
<div class="content round_weak">
	<?php include(LAYOUT_PATH.DS."parts/scrollToTop.php");?>
	<?php include(LAYOUT_PATH.DS."parts/about_button.php");?>
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
		<?php include(LAYOUT_PATH.DS."structure/item_info.php");?>
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
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
					<?php include(LAYOUT_PATH.DS."contents/item_shop.php");?>
				</ul>
			</div>
			<?php include(LAYOUT_PATH.DS."structure/creations.php");?>
			<div class="comment">
				<div class="round_weak">
					<?php include(LAYOUT_PATH.DS."structure/comments.php");?>
				</div>
			</div>
		</div>	
	<div id="subFooter" class="clear"><span>Loading...</span></div>
</div>

<?php include(LAYOUT_PATH.DS."structure/quickview_modal.php");?>	
<?php include(LAYOUT_PATH.DS."structure/outfit_modal.php");?>	
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	

<?php include(LAYOUT_PATH.DS."structure/footer.php");?>