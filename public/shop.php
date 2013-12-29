<?php require_once("../app/config/initialize.php");?>
<?php include(LAYOUT_PATH.DS."structure/header.php");?>
<?php include(LAYOUT_PATH.DS."structure/sidenavi.php");?>	
<div class="contentBox">
	<?php include(LAYOUT_PATH.DS."parts/scrollToTop.php");?>
	<?php include(LAYOUT_PATH.DS."parts/about_button.php");?>
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
</div>

</div>
<div class="bottom clear"></div>

<?php include(LAYOUT_PATH.DS."structure/quickview_modal.php");?>		
<?php include(LAYOUT_PATH.DS."structure/signup_login.php");?>	
<?php include(LAYOUT_PATH.DS."structure/footer.php");?>