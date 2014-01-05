<?php
	header("Content-Type: application/json", true);
	require_once("../../config/initialize.php");
	

	$product_id = isset($_POST["product_id"])? preg_replace( '/[^0-9]/', '',  $_POST["product_id"] ):null;


	$product = Product::find_by_id($product_id);
	$product_img_rel = Product_image_rel::find_by_attribute($product_id,"product_id");

	$id_array =[];
	
	foreach($product_img_rel as $prod){
		$id_array[] =$prod->productImage_id;
	}


	$ids = join(",",$id_array);

	$sql ="SELECT * FROM product_image ";
	$sql.="WHERE productImage_id IN({$ids})";

	$productImages = Product_image::find_by_sql($sql);

	$above_close_front=null;
	$acf=null;
	$middle_close_front=null;
	$mcf=null;
	$bottom_close_front=null;
	$bcf=null;
	$above_close_back=null;
	$acb=null;
	$middle_close_back=null;
	$mcb=null;
	$bottom_close_back=null;
	$bcb=null;
	$above_open_front=null;
	$aof=null;
	$middle_open_front=null;
	$mof=null;
	$bottom_open_front=null;
	$bof=null;
	$above_open_back=null;
	$aob=null;
	$middle_open_back=null;
	$mob=null;
	$bottom_open_back=null;
	$bob=null;
	$above_front=null;
	$af=null;
	$middle_front=null;
	$mf=null;
	$bottom_front=null;
	$bf=null;
	$above_back=null;
	$ab=null;
	$middle_back=null;
	$mb=null;
	$bottom_back=null;
	$bb=null;
	$default_right_shoulder_front=null;
	$drsf=null;
	$default_left_shoulder_front=null;
	$dlsf=null;
	$default_right_hand_front=null;
	$drhf=null;
	$default_left_hand_front=null;
	$dlhf=null;
	$default_right_shoulder_back=null;
	$drsb=null;
	$default_left_shoulder_back=null;
	$dlsb=null;
	$default_right_hand_back=null;
	$drhb=null;
	$default_left_hand_back=null;
	$dlhb=null;
	$right_shoulder_front=null;
	$rsf=null;
	$left_shoulder_front=null;
	$lsf=null;
	$right_hand_front=null;
	$rhf=null;
	$left_hand_front=null;
	$lhf=null;
	$right_shoulder_back=null;
	$rsb=null;
	$left_shoulder_back=null;
	$lsb=null;
	$right_hand_back=null;
	$rhb=null;
	$left_hand_back=null;
	$lhb=null;
	$default_front=null;
	$df=null;
	$default_back=null;
	$db=null;
	$front=null;
	$f=null;
	$back=null;
	$b=null;

	foreach($productImages as $image){
		//first check what kind of image it is
		
		if($image->image_type=="top"){			
			if($image->action=="open"){
				if($image->image_direction=="front"){
					$above_open_front=$image->default_filename;
					$aof=true;
				}else{
					$above_open_back=$image->default_filename;
					$aob=true;
				}
			}else if($image->action=="close"){
				if($image->image_direction=="front"){
					$above_close_front=$image->default_filename;
					$acf=true;
				}else{
					$above_close_back=$image->default_filename;
					$acb=true;
				}
			}else{
				if($image->image_direction=="front"){
					$above_front=$image->default_filename;
					$af=true;
				}else{
					$above_back=$image->default_filename;
					$ab=true;
				}
			}
		}else if($image->image_type=="middle"){
			if($image->action=="open"){
				if($image->image_direction=="front"){
					$middle_open_front=$image->default_filename;
					$mof=true;
				}else{
					$middle_open_back=$image->default_filename;
					$mob=true;
				}
			}else if($image->action=="close"){
				if($image->image_direction=="front"){
					$middle_close_front=$image->default_filename;
					$mcf=true;
				}else{
					$middle_close_back=$image->default_filename;
					$mcb=true;
				}
			}else{
				if($image->image_direction=="front"){
					$middle_front=$image->default_filename;
					$mf=true;
				}else{
					$middle_back=$image->default_filename;
					$mb=true;
				}
			}
		}else if($image->image_type=="bottom"){
			if($image->action=="open"){
				if($image->image_direction=="front"){
					$bottom_open_front=$image->default_filename;
					$bof=true;
				}else{
					$bottom_open_back=$image->default_filename;
					$bob=true;
				}
			}else if($image->action=="close"){
				if($image->image_direction=="front"){
					$bottom_close_front=$image->default_filename;
					$bcf=true;
				}else{
					$bottom_close_back=$image->default_filename;
					$bcb=true;
				}
			}else{
				if($image->image_direction=="front"){
					$bottom_front=$image->default_filename;
					$bf=true;
				}else{
					$bottom_back=$image->default_filename;
					$bb=true;
				}
			}
		}else if($image->image_type=="default"){
			if($image->position=="right_shoulder"){
				if($image->image_direction=="front"){
					$default_right_shoulder_front=$image->default_filename;
					$drsf=true;
				}else{
					$default_right_shoulder_back=$image->default_filename;
					$drsb=true;
				}
			}else if($image->position=="left_shoulder"){
				if($image->image_direction=="front"){
					$default_left_shoulder_front=$image->default_filename;
					$dlsf=true;
				}else{
					$default_left_shoulder_back=$image->default_filename;
					$dlsb=true;
				}
			}else if($image->position=="right_hand"){
				if($image->image_direction=="front"){
					$default_right_hand_front=$image->default_filename;
					$drhf=true;
				}else{
					$default_right_hand_back=$image->default_filename;
					$drhb=true;
				}
			}else if($image->position=="left_hand"){
				if($image->image_direction=="front"){
					$default_left_hand_front=$image->default_filename;
					$dlhf=true;
				}else{
					$default_left_hand_back=$image->default_filename;
					$dlhb=true;
				}
			}else{
				if($image->image_direction=="front"){
					$default_front=$image->default_filename;
					$df=true;
				}else{
					$default_back=$image->default_filename;
					$db=true;
				}
			}
		}else{
			//if the product image does not have either above, middle, bottom, then they are accessories
			//which have position values
			if($image->position=="right_shoulder"){
				if($image->image_direction=="front"){
					$right_shoulder_front=$image->default_filename;
					$rsf=true;
				}else{
					$right_shoulder_back=$image->default_filename;
					$rsb=true;
				}
			}else if($image->position=="left_shoulder"){
				if($image->image_direction=="front"){
					$left_shoulder_front=$image->default_filename;
					$lsf=true;
				}else{
					$left_shoulder_back=$image->default_filename;
					$lsb=true;
				}
			}else if($image->position=="right_hand"){
				if($image->image_direction=="front"){
					$right_hand_front=$image->default_filename;
					$rhf=true;
				}else{
					$right_hand_back=$image->default_filename;
					$rhb=true;
				}
			}else if($image->position=="left_hand"){
				if($image->image_direction=="front"){
					$left_hand_front=$image->default_filename;
					$lhf=true;
				}else{
					$left_hand_back=$image->default_filename;
					$lhb=true;
				}
			}else{
				if($image->image_direction=="front"){
					$front=$image->default_filename;
					$f=true;
				}else{
					$back=$image->default_filename;
					$b=true;
				}
			}
		}
	}


	
	$json = array(
		"name"=>$product->name,
		"url"=>$product->url,
		"price"=>$product->price,
		"above_close_front"=>RESOURCE_PATH.DS."items".DS.$above_close_front,
		"acf"=>$acf,
		"middle_close_front"=>RESOURCE_PATH.DS."items".DS.$middle_close_front,
		"bottom_close_front"=>RESOURCE_PATH.DS."items".DS.$bottom_close_front,
		"above_close_back"=>RESOURCE_PATH.DS."items".DS.$above_close_back,
		"acb"=>$acb,
		"middle_close_back"=>RESOURCE_PATH.DS."items".DS.$middle_close_back,
		"bottom_close_back"=>RESOURCE_PATH.DS."items".DS.$bottom_close_back,
		"above_open_front"=>RESOURCE_PATH.DS."items".DS.$above_open_front,
		"aof"=>$aof,
		"middle_open_front"=>RESOURCE_PATH.DS."items".DS.$middle_open_front,
		"bottom_open_front"=>RESOURCE_PATH.DS."items".DS.$bottom_open_front,
		"above_open_back"=>RESOURCE_PATH.DS."items".DS.$above_open_back,
		"aob"=>$aob,
		"middle_open_back"=>RESOURCE_PATH.DS."items".DS.$middle_open_back,
		"bottom_open_back"=>RESOURCE_PATH.DS."items".DS.$bottom_open_back,
		"above_front"=>RESOURCE_PATH.DS."items".DS.$above_front,
		"af"=>$af,
		"middle_front"=>RESOURCE_PATH.DS."items".DS.$middle_front,
		"bottom_front"=>RESOURCE_PATH.DS."items".DS.$bottom_front,
		"above_back"=>RESOURCE_PATH.DS."items".DS.$above_back,
		"ab"=>$ab,
		"middle_back"=>RESOURCE_PATH.DS."items".DS.$middle_back,
		"bottom_back"=>RESOURCE_PATH.DS."items".DS.$bottom_back,
		"default_right_shoulder_front"=>RESOURCE_PATH.DS."items".DS.$default_right_shoulder_front,
		"drsf"=>$drsf,
		"default_left_shoulder_front"=>RESOURCE_PATH.DS."items".DS.$default_left_shoulder_front,
		"default_right_hand_front"=>RESOURCE_PATH.DS."items".DS.$default_right_hand_front,
		"drhf"=>$drhf,
		"default_left_hand_front"=>RESOURCE_PATH.DS."items".DS.$default_left_hand_front,
		"default_right_shoulder_back"=>RESOURCE_PATH.DS."items".DS.$default_right_shoulder_back,
		"drsb"=>$drsb,
		"default_left_shoulder_back"=>RESOURCE_PATH.DS."items".DS.$default_left_shoulder_back,
		"default_right_hand_back"=>RESOURCE_PATH.DS."items".DS.$default_right_hand_back,
		"drhb"=>$drhb,
		"default_left_hand_back"=>RESOURCE_PATH.DS."items".DS.$default_left_hand_back,
		"right_shoulder_front"=>RESOURCE_PATH.DS."items".DS.$right_shoulder_front,
		"rsf"=>$rsf,
		"left_shoulder_front"=>RESOURCE_PATH.DS."items".DS.$default_left_shoulder_back,
		"right_hand_front"=>RESOURCE_PATH.DS."items".DS.$right_hand_front,
		"left_hand_front"=>RESOURCE_PATH.DS."items".DS.$left_hand_front,
		"right_shoulder_back"=>RESOURCE_PATH.DS."items".DS.$right_shoulder_back,
		"rsb"=>$rsb,
		"left_shoulder_back"=>RESOURCE_PATH.DS."items".DS.$left_shoulder_back,
		"right_hand_back"=>RESOURCE_PATH.DS."items".DS.$right_hand_back,
		"rhb"=>$rhb,
		"left_hand_back"=>RESOURCE_PATH.DS."items".DS.$left_hand_back,
		"default_front"=>RESOURCE_PATH.DS."items".DS.$default_front,
		"df"=>$df,
		"default_back"=>RESOURCE_PATH.DS."items".DS.$default_back,
		"db"=>$db,
		"front"=>RESOURCE_PATH.DS."items".DS.$front,
		"f"=>$f,
		"back"=>RESOURCE_PATH.DS."items".DS.$back,
		"b"=>$b
	);

	echo json_encode($json);


?>