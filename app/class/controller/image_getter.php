<?php
	require_once("../../config/initialize.php");
	

	$product_id = isset($_POST["productId"])? $_POST["productId"]:false;
	$image_position = isset($_POST["imageType"])? $_POST["imageType"]:false;
	$zIndex = isset($_POST["zIndex"])? $_POST["zIndex"]:false;
	$itemCategory = isset($_POST["itemCate"])? $_POST["itemCate"]:false;

	
	$product = product_image_rel::find_by_attribute($product_id,"product_id");

	$product_image_id=[];
	foreach($product as $image){
		$product_image_id[] = $image->productImage_id;
	}

	$product_image_id=join(",",$product_image_id);

	$sql ="SELECT * FROM product_image ";
	$sql.="WHERE productImage_id IN({$product_image_id}) AND image_type='{$image_position}'";

	$productImages = Product_image::find_by_sql($sql);

	$productImages = empty($productImages) ?  false:array_shift($productImages);

	if(!$productImages){
		$sql ="SELECT * FROM product_image ";
		$sql.="WHERE productImage_id IN({$product_image_id}) AND image_type='bottom'";

		$productImages = Product_image::find_by_sql($sql);

		$productImages = empty($productImages) ?  false:array_shift($productImages);		
	}

	//the source of the selected image
	$src=RESOURCE_PATH.DS."items".DS.$productImages->default_filename;

	$img = "<img id='{$product_id}' class='{$itemCategory}' src='{$src}' style='z-index:{$zIndex}' />";


	if(isset($img)){
		echo $img;
	}else{
		echo false;
	}
	

?>