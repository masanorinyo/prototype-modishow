<?php
	require_once("../../config/initialize.php");

	$page = isset($_POST['OFFSET'])?$_POST['OFFSET']:false;

	$item = isset($_POST['items'])?$_POST['items']:false;

	$attribute = isset($_POST['attribute'])?$_POST['attribute']:false;

	$per_page = $_POST["per_page"];
	

	if($attribute=="product"){

		if($item=="accessories"){
			$clothingType = Clothing_type::find_by_attribute($item,"main_category");	
		}else{
			$clothingType = Clothing_type::find_by_attribute($item,"sub_category");	
		}

		//put the matching ids into array
		$id_array =[];
		

		foreach($clothingType as $clothing){
			$id_array[] =$clothing->clothingType_id;
			
		}

		$ids = join(",",$id_array);
	

		//Total record count($total_count)
		$total_count = product::count_all("clothingType_id",$ids);
		$condition_key="clothingType_id";

	}else{

	}
	
	

	$infinite_position = new infinite_scroll($page,$per_page,$total_count);
	
	$sql = "SELECT * FROM {$attribute} ";
	$sql .="WHERE {$condition_key} IN({$ids}) ";
	$sql .="Limit {$per_page} ";
	$sql .="OFFSET {$infinite_position->offset()} ";
	
	if($attribute="product"){
		$product_array = product::find_by_sql($sql);
	}else{

	}
	
	if(empty($product_array)){
		echo "<li class=\"items-wrapper last_item\"><span>No more items</span></li>";
	}
?>




<?php


	if($attribute=="product"){
 		foreach($product_array as $product): ?>
			<li class="items-wrapper">
				<img id="<?php echo $product->product_id.$item?>" src="<?php echo ROOT_PATH."resources/items/".$product->small_filename; ?>"/>
			</li>
<?php 
		endforeach;

	}else{

?>
			<li class="items-wrapper">
				<span> Under construction </span>
			</li>
<?php 	
			
	}


?>
