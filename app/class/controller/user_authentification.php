<?php	
	switch (basename($_SERVER['REQUEST_URI'])){
		case 'index.php':
			$header_title = "Home - ModiShow";
			$body_id = "index";
 			$index_page = "currentPage";
			break;
		
		case 'feed.php':
			$header_title = "Feed - ModiShow";
			$body_id = "feed";
 			$feed_page = "currentPage";
			break;
		
		case 'shop.php':
			$header_title = "Shop - ModiShow";
			$body_id = "shop";
 			$shop_page = "currentPage";
			break;
		
		case 'item.php':
			$header_title = "Shop - ModiShow";
			$body_id = "shopItem";
 			$shop_page = "currentPage";
			break;
		
		case 'shopOverall.php':
			$header_title = "Shop - ModiShow";
			$body_id = "shopOverall";
 			$shop_page = "currentPage";
			break;
		
		case 'collage.php':
			$header_title = "Collage - ModiShow";
			$body_id = "collage";
			$tryon_setting="tryonPage background_white";
 			$tryon_page = "currentPage";
			break;
		

		case 'tryon.php':
			$header_title = "Try on - ModiShow";
			$body_id = "tryclothes";
			$tryon_setting="tryonPage background_white";
 			$tryon_page = "currentPage";
			break;
		
		case 'userPage.php':
			$header_title = "Profile - ModiShow";
			$body_id = "userPage";
 			$user_page = "currentPage";
			break;

		case 'userInfo.php':
			$header_title = "Setting - ModiShow";
			$body_id = "userInfo";
			break;

		case 'setting.php':
			$header_title = "Setting - ModiShow";
			$body_id = "setting";
			break;
	}
?>