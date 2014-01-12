<?php
	require_once("../../config/initialize.php");

	$page = isset($_POST['OFFSET'])?$_POST['OFFSET']:false;

	$item = isset($_POST['items'])?$_POST['items']:false;

	$attribute = isset($_POST['attribute'])?$_POST['attribute']:false;

	$per_page = $_POST["per_page"];
		
	$total_count = Style::count_all();

	$infinite_position = new infinite_scroll($page,$per_page,$total_count);
	
	
	$sql = "SELECT * FROM {$attribute} ";
	$sql .="Limit {$per_page} ";
	$sql .="OFFSET {$infinite_position->offset()} ";
	
	
	$found_style = Style::find_by_sql($sql);
	

	

	if(empty($found_style)){
		echo "<li class=\"last_item\"><span>No more items</span></li>";
	}
?>

<?php 
	$num=1;
	
	$loop_for_large_first=4;
	$loop_for_large_second=5;
	foreach($found_style as $array_name): 
		
		$outfitOnModel_object = Outfit_on_model::find_by_id($array_name->outfitOnModel_id);
		$outfitOnModel_url = $outfitOnModel_object->m_size_filename;

		$collage_object = Collage::find_by_id($array_name->collage_id);
		
		$collage_url = $collage_object->m_size_filename;
		$user_object = User::find_by_id($array_name->user_id);
		$username = $user_object->username;
		
		$category_object = Category::find_by_id($array_name->category_id);
		$category = $category_object->sub_category;
		
		$title=$array_name->title;


		if($num==$loop_for_large_first){
			echo "<li class='content_large'>";
			$loop_for_large_first +=5;
		}else if($num==$loop_for_large_second){
			echo "<li class='content_large'>";
			$loop_for_large_second +=5; 
		}else{
			echo "<li class='content_small'>";
		}
		
?>

	<div class="button_flip">
		<span class="icon_flip_grey"></span>	
		<span class="icon_flip_dark"></span>				
	</div>
	<div class="collageBox openModal">
		<a href="#"> <!--Use PHP-->
			<div class="collageBox-inside">
				<img src="<?php echo ROOT_PATH."resources/styles/".$collage_url;?>"/>
			</div>
		</a>
	</div>
	<div class="modelBox openModal">
		<a href="#">
			<img src="<?php echo ROOT_PATH."resources/styles/".$outfitOnModel_url;?>"/>
		</a>
	</div>
	<!-- <div class="peopleBox openModal">
		<a href="#">
		</a>
	</div> -->
	<div class="descriptionBox_wrapper">
		<div class="descriptionBox">
			<div class="styleTitle ">
				<span class="openModal"> 	<a href="#">
						<?php echo $title;?>
					</a>
				</span>
			</div>
			<div class="styleInfo">
				<a class="artist_name" href="userPage.php">
					By 
					<span>
							<?php echo $username;?>
					</span>
				</a>
				<a class="styleCategory" href="#">
					Category
					<span>
					 - <?php echo $category; ?>
					</span>
				</a>
			</div>
		</div>
	</div>
</li>

<?php 
$num++;
if($num==6){break;}
endforeach;
?>

	