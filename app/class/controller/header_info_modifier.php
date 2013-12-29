<?php	
	switch (basename($_SERVER['REQUEST_URI'])){
		case 'index':
			$header_title = "Home - ModiShow";
			$body_id = "index";
 			$index_page = "currentPage";
			break;
		
		case 'feed':
			$header_title = "Feed - ModiShow";
			$body_id = "feed";
 			$feed_page = "currentPage";
			break;
		
		case 'shop':
			$header_title = "Shop - ModiShow";
			$body_id = "shop";
 			$shop_page = "currentPage";
			break;
		
		case 'item':
			$header_title = "Shop - ModiShow";
			$body_id = "shopItem";
 			$shop_page = "currentPage";
			break;
		
		case 'shopOverall':
			$header_title = "Shop - ModiShow";
			$body_id = "shopOverall";
 			$shop_page = "currentPage";
			break;
		
		case 'collage':
			$header_title = "Collage - ModiShow";
			$body_id = "collage";
			$tryon_setting="tryonPage background_white";
 			$tryon_page = "currentPage";
			break;
		

		case 'tryon':
			$header_title = "Try on - ModiShow";
			$body_id = "tryclothes";
			$tryon_setting="tryonPage background_white";
 			$tryon_page = "currentPage";
			break;
		
		case 'userPage':
			$header_title = "Profile - ModiShow";
			$body_id = "userPage";
 			$user_page = "currentPage";
			break;

		case 'userInfo':
			$header_title = "Setting - ModiShow";
			$body_id = "userInfo";
			break;

		case 'setting':
			$header_title = "Setting - ModiShow";
			$body_id = "setting";
			break;
	}
?>