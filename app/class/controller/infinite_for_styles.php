<?php
	require_once("../../config/initialize.php");

	$page = isset($_POST['OFFSET'])?$_POST['OFFSET']:false;

	$item = isset($_POST['items'])?$_POST['items']:false;

	$attribute = isset($_POST['attribute'])?$_POST['attribute']:false;

	$per_page = isset($_POST["per_page"])?$_POST['per_page']:false;

	$username = isset($_POST["username"])?$_POST['username']:false;
	
	
	if($attribute=="index"){

		$total_count = Style::count_all();

	}else if($attribute=="userPage"){

		if($username){
			$user_object=User::find_by_attribute($username,"username");
			$user_object=!empty($user_object)? array_shift($user_object):false;
			$user_id=$user_object->user_id;

			$num_of_styles = Style::find_by_attribute($user_id,"user_id");

			$total_count = count($num_of_styles);
		}else{
			$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:false;	
			$num_of_styles = Style::find_by_attribute($user_id,"user_id");
			$total_count = count($num_of_styles);
		}

	}

	$infinite_position = new infinite_scroll($page,$per_page,$total_count);
	

	$sql = "SELECT * FROM style ";
	
	if($attribute=="userPage"){
		$sql .="WHERE user_id={$user_id} ";	
	}
	
	$sql .="Limit {$per_page} ";
	$sql .="OFFSET {$infinite_position->offset()} ";

	$found_style = Style::find_by_sql($sql);
	

	if(empty($found_style)){
		echo "<li class=\"last_item\"><span>No more items</span></li>";
	}
?>

<?php 
	$num=1;
	if($attribute=="index"){
		$loop_for_large_first=4;
		$loop_for_large_second=5;
	}
	
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

		if($attribute=="index"){
			if($num==$loop_for_large_first){
				echo "<li class='content_large'>";
				$loop_for_large_first +=5;
			}else if($num==$loop_for_large_second){
				echo "<li class='content_large'>";
				$loop_for_large_second +=5; 
			}else{
				echo "<li class='content_small'>";
			}
		}else{
			echo "<li class='content_small'>";
		}
		
?>

	<div class="button_flip">
		<span class="icon_flip_grey"></span>	
		<span class="icon_flip_dark"></span>				
	</div>
	<div class="collageBox openModal">
		<a> <!--Use PHP-->
			<div class="collageBox-inside">
				<img src="<?php echo ROOT_PATH."resources/styles/".$collage_url;?>"/>
			</div>
		</a>
	</div>
	<div class="modelBox openModal">
		<a>
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
				<span class="openModal"> 	
					<a>
						<?php echo $title;?>
					</a>
				</span>
			</div>
			<div class="styleInfo">
				<a class="artist_name" href="<?php echo ROOT_PATH.DS.'app/class/view/userPage.php?username='.urlencode($username);?>">
					By 
					<span>
							<?php echo $username;?>
					</span>
				</a>
				<a class="styleCategory">
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
if($attribute=="index" && $num==6){
	break;
}else if($attribute=="userPage" && $num==7){
	break;
}
endforeach;
?>

	